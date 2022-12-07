<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{

    public function leads()
    {
        $callagents = User::role(['call_agent'])->get();

        $leads = $this->leadsOfSupervisor();

        return view('roles.supervisor.leads', compact('callagents', 'leads'));
    }

    public function leadsOfSupervisor()
    {
        // $lead  = Lead::where('completed', 0)->where('assign_to_id_call', null)->where('assign_to_id_team_leader', null)->get();
        $lead = Lead::all();
        return $lead;
    }
    //
    public function assignLead(Request $req)
    {

        if (isset($req->lead_id)) {
            Lead::whereIn('id', $req->lead_id)->update($req->except('_token', 'lead_id'));
            $message = 'Succesfully leads are assigned';
        } else {
            $message = 'You must select a lead first to assign';
        }
        return redirect()->back()->with('message', $message);
    }
    public function getUsers()
    {
        $users = User::all();

        return view('roles.supervisor.users', compact('users'));
    }
    public function getUserById($id)
    {
        $user = User::find($id);

        return view('roles.supervisor.user_info', compact('user'));
    }

    public function updateUser(Request $req, $id)
    {
        User::find($id)->update($req->except('_token', 'role'));
        User::find($id)->syncRoles($req->role);

        return redirect()->back()->with('success', 'The user was updated succesfully');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->back()->with('success', 'The user was deleted succesfully');
    }
    public function addUser(Request $request)
    {
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->except('_token', 'role'));
        $user->assignRole($request->role);
        return redirect()->back()->with('success', 'The user was created succesfully');
    }
    public function getLeadById($id)
    {
        $lead = Lead::find($id);
        $feedbacks = $this->getAllFeedBacks($id);

        return view('roles.supervisor.lead_info', compact('lead', 'feedbacks'));
    }
    public function getAllFeedBacks($id)
    {
        return FeedBack::where('lead_id', $id)->get();
    }
    public function storeFeedBack(Request $req, $lead_id)
    {

        $req['user_id'] = Auth::user()->id;
        if ($req['sprachen']) {
            $req['sprachen'] = implode(",", $req['sprachen']);
        }
        Lead::find($lead_id)->update($req->except(
            "feedback",
            "user_id",
            "lead_id",
            "termindatum",
            "terminzeit",
            "mitbewhoner",
            "person_krank",
            "vertragdatum",
            "bestatigungsstatus",
            "anrufdatum",
            "zeit_anrufe",
            "koment_der_geburtsdatum",
            "koment_der_Können"
        ));

        FeedBack::create([
            'feedback' => $req->feedback_status,
            'user_id' => Auth::user()->id,
            'lead_id' => $lead_id,
            'termin_datum' => $req->termindatum,
            'terminzeit' => $req->terminzeit,
            "mitbewhoner" => $req->mitbewhoner,
            "person_krank" => $req->person_krank,
            "vertragdatum" => $req->vertragdatum,
            "bestatigungsstatus" => $req->bestatigungsstatus,
            "anrufdatum" => $req->anrufdatum,
            "zeit_anrufe" => $req->zeit_anrufe,
            "bemerkung" => $req->bemerkung
        ]);
        if ($req->feedback_status == 'Terminiert' || $req->feedback_status == 'online_offerte') {
            Lead::where('id', $lead_id)->update(['completed' => 1, 'feedback_status' => $req->feedback_status]);
        } else {
            Lead::where('id', $lead_id)->update(['completed' => -1, 'feedback_status' => $req->feedback_status]);
        }
        return redirect('supervisor/leads');
    }
}
