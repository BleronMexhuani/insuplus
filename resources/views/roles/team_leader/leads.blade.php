@extends('layouts.app')
@section('content')
    <div class="px-md-3 pe-md-4">
        <div class="mt-4 py-4 px-2">
            <form action="{{ route('searchLeads') }}" method="GET">
                @csrf
                <div class="accordionbg mb-4">
                    {{-- <button type="button" onclick="location.href='{{ route('advancedFilter') }}'"
                        class="acordion pull-right">Erweiter</button> --}}
                    <button type="button" class="accordion">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.25 19C17.6642 19 18 19.3358 18 19.75C18 20.1642 17.6642 20.5 17.25 20.5H10.75C10.3358 20.5 10 20.1642 10 19.75C10 19.3358 10.3358 19 10.75 19H17.25ZM21.25 13C21.6642 13 22 13.3358 22 13.75C22 14.1642 21.6642 14.5 21.25 14.5H6.75C6.33579 14.5 6 14.1642 6 13.75C6 13.3358 6.33579 13 6.75 13H21.25ZM24.25 7C24.6642 7 25 7.33579 25 7.75C25 8.16421 24.6642 8.5 24.25 8.5H3.75C3.33579 8.5 3 8.16421 3 7.75C3 7.33579 3.33579 7 3.75 7H24.25Z"
                                fill="#00727A" />
                        </svg>
                    </button>
                    <div class="panel">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Erstellungsdatum</span>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="text" class="form-controol input-sm" placeholder="von"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                        name="" onchange="change()">
                                    <input type="text" class="form-controol input-sm" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                        name="">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Verteildatum</span>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="text" class="form-control input-sm" placeholder="von"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                        name="" onchange="change()">
                                    <input type="text" class="form-control input-sm" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                        name="">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Benutzer</span>
                                </div>
                                <div class="input-group mt-2 ">
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Mannschaft</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker " data-live-search="true" multiple data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Jahrgang</span>
                                </div>
                                <div>
                                    <div class="input-group mt-2">
                                        <input class="form-controol input-sm" type="number" value=""
                                            name="" placeholder="Herr" min="1" max="10000">
                                        <input class="form-controol input-sm" type="number" value=""
                                            name="" placeholder="Herr" min="1" max="10000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kanton</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Region</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Sprache</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Sparpotenzial</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Krankenkasse</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">3. Säule</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Feedback</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Später Anrufen</span>
                                </div>
                                <div class="mt-2 ">
                                    <div class="input-group mt-2 ">
                                        <input type="text" class="form-controol input-sm mb-4" placeholder="von"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                            name="" onchange="change()">
                                        <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                            name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-auto">
                                <div class="mt-2">
                                    <button class="buttonsearch mb-4 mb-md-0"><i class="fa fa-search ps-1 "
                                            style="color:#00727A"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <div class="tableform">
                <div class="tableform">
                    <div style="padding: 25px">
                        <span class="ms-1 mb-4 titleoftable ">All
                            <hr
                                style=" border: 2px solid #00727A;
                             width: 25px;
                             margin-top: 0px;
                             margin-left: 3px;">
                        </span>
                    </div>
                    <hr style="margin: 0px 23px 7px 23px;">

                    <form action="" method="GET">
                        <div class="col searchgrup">
                            <div class="input-group  searchLeads mt-md-4 mt-3 mb-3 mb-md-0">
                                <div class="form-outline">
                                    <input class="inputleads ps-5" name="vorname" type="text"
                                        placeholder="Search Leads" />
                                    <i class="fa fa-search filtersubmit ps-1 "></i>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive-md">
                        <form action="{{ route('assignLead_team_leader') }}" method="POST">
                            @csrf
                            <div class="d-flex row">
                                <div class="col-md-3">
                                    <div class="searchgrup mt-md-4 mt-3">
                                        <select name="assign_to_id_call" placeholder="Call agents" id=""
                                            class="form-select inputleads  select-form  mb-3">
                                            <option value="">Choose Call Agents</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="col-md-3">
                                    <div class="mt-md-4 mt-0 chooseteamgroup">
                                        <select name="assign_to_id_team_leader" id=""
                                            class="form-select inputleads select-form  mb-3">
                                            <option value="">Choose Team Leader</option>
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-md-2 ">
                                    <div class="btnsubmit mb-md-4 mb-0 mt-md-4 mt-0 text-center">
                                        <button class=" btnprofile w-100 " style="color:white;">Submit</button>
                                    </div>
                                </div>
                            </div>

                            @if (Illuminate\Support\Facades\Session::has('message'))
                                <span class="fs-5 mb-2 fw-500">
                                    {{ Illuminate\Support\Facades\Session::get('message') }}
                                </span>
                            @endif
                            <div style="overflow-x:auto; overflow-y: hidden">
                                <table class="" style="margin: 0px 0px;overflow-x: auto;
                                margin-bottom: 0px;
                                padding: 0px;">
                                    <thead style="background-color: #F7F7F7;">
                                        <tr class="text-center">
                                            <td>
                                                <div class="checkbox ms-3 squaredFour">
                                                    <label>
                                                        <input type="checkbox" class="check" id="checkAll">
                                                    </label>
                                                </div>
                                            </td>
                                            <th>Vorname</th>
                                            <th>Nachname</th>
                                            <th>Geburtsdatum</th>
                                            <th>Email</th>
                                            <th>Region</th>
                                            <th>Sprache</th>
                                            <th>Verteilen At</th>
                                            <th>Created Time</th>
                                            <th>Created From</th>
                                            <th>Feedback</th>
                                            <th>Feedback datum</th>
                                            <th>Aktion </th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    
                                <tbody>
                                    @foreach ($leads as $item)
                                        @php
                                            $feedback_datum = App\Models\Feedback::where('lead_id', $item->id)
                                                ->orderBy('created_at', 'desc')
                                                ->first();
                                            
                                        @endphp
                                        <tbody>
                                            <tr class="text-center tablesfont">
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="lead_id[]"
                                                            value="{{ $item->id }}" class="check ms-3">
                                                    </label>
                                                </td>
                                                <td>{{ $item->vorname }}</td>
                                                <td>{{ $item->nachname }}</td>
                                                <td>{{ $item->geburtsdatum }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->region }}</td>
                                                <td>{{ $item->sprachen }}</td>
                                                <td>{{ $item->assign_to_id_call ? App\Models\User::find($item->assign_to_id_call)->name : ($item->assign_to_id_team_leader ? App\Models\User::find($item->assign_to_id_team_leader)->name : 'Not Assigned') }}
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->assigned_from }}</td>
                                                <td
                                                    style="color:{{ $item->feedback_status == 'Terminiert' ? 'green' : 'red' }};">
                                                    {{ $item->feedback_status }}</td>
                                                <td>{{ App\Models\Feedback::where('lead_id', $item->id)->orderBy('created_at', 'desc')->pluck('created_at')->first() }}
                                                </td>
                                                <td><a class="btn btnedit"
                                                        href="{{ route('team_leader.lead_info', ['id' => $item->id]) }}"><i
                                                        class="fa-regular fa-pen-to-square"></i></a></td>
                                                <td><a class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            {{ $leads->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $("#checkAll").click(function() {
                    $(".check").prop('checked', $(this).prop('checked'));
                });
            </script>
            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                        } else {
                            panel.style.display = "block";
                        }
                    });
                }
            </script>
        @endsection
