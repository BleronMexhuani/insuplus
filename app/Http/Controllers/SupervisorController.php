<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    //
    public function assignLead(Request $req)
    {
        Lead::find($req->id)->update($req->all());
        return redirect()->back();
    }
}
