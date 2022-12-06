<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SupervisorController extends Controller
{
    //
    public function assignLead(Request $req)
    {
        Lead::find($req->id)->update($req->all());
        return redirect()->back();
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
}
