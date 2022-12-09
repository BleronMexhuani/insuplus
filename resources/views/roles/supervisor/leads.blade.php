@extends('layouts.app')
@section('content')
    <form action="{{ route('searchLeads') }}" method="GET">
        @csrf


        {{-- <div class="row">
            <div class="col-3">
                <label for="">Creation Date</label>
                <div class="row">
                    <div class="col-6">
                        <input type="date" class="form-control" name="created_at[]">
                    </div>

                    <div class="col-6">
                        <input type="date" class="form-control" name="created_at[]">
                    </div>
                </div>
            </div>
            <div class="col-3 my-auto">
                <button class="btn btn-primary" style="color:white">Search</button>
            </div>
        </div> --}}

    </form>
    <div class="col ms-0 ms-md-2 px-0 px-md-5">

        <div class="mt-4 py-3 px-2">
            <div class="accordionbg mb-4">
                <button class="acordion pull-right">Erweiter</button>
                <button class="accordion">Filter</button>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="mt-4">
                                <span class="subtitleform">Erstellungsdatum</span>
                            </div>
                            <div class="input-group mt-2">
                                <input type="text" class="form-controol input-sm" placeholder="von"
                                    onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09" name=""
                                    onchange="change()">
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
                                    onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09" name=""
                                    onchange="change()">
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
                                    <input class="form-controol input-sm" type="number" value="" name=""
                                        placeholder="Herr" min="1" max="10000">
                                    <input class="form-controol input-sm" type="number" value="" name=""
                                        placeholder="Herr" min="1" max="10000">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="mt-4">
                                <span class="subtitleform">Kanton</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">Region</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">Sprache</span>
                            </div>
                            <div class="mt-2">
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
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="mt-4">
                                <span class="subtitleform">Sparpotenzial</span>
                            </div>
                            <div class="mt-2"> 
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
                                <span class="subtitleform">Krankenkasse</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">3. Säule</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">Kontaktieren</span>
                            </div>
                            <div class="mt-2">
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
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="mt-4">
                                <span class="subtitleform">Pool:</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">Bestätigungsstatus</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">Feedback</span>
                            </div>
                            <div class="mt-2">
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
                                <span class="subtitleform">Duplicate</span>
                            </div>
                            <div class="mt-2">
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
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="mt-4">
                            <span class="subtitleform">Später Anrufen</span>
                        </div>
                        <div class="mt-2 ">
                            <div class="input-group mt-2 ">
                                <input type="text" class="form-controol input-sm mb-4" placeholder="von"
                                onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09" name=""
                                onchange="change()">
                            <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                onfocus="(this.type='date')" onblur="(this.type='text')" max="2022-12-09"
                                name="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="ms-1 mb-4 subtitlelead ">All</span>
            <hr>
            <div class="row">
                <div class="col-8 mb-4 mt-3">
                    <div class="input-group">
                        <div class="form-outline">
                            <input class="inputleads ps-5" type="text" placeholder="Search" />
                            <i class="fa fa-search filtersubmit ps-1 "></i>
                        </div>

                    </div>

                </div>

                <div class="col">
                    <div style="margin-top: 4px; width:25vh">
                        <div class="topPlaceholder px-4">
                            <span>Filter</span>
                        </div>
                        <select class="form-select inputleads select-form " aria-label="Default select example">
                            <option selected>All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                </div>
                <div class="col">
                    <div style="margin-top: 4px">
                        <div class="topPlaceholder px-4">
                            <span>Sort</span>
                        </div>
                        <select class="form-select inputleads select-form" aria-label="Default select example">
                            <option selected>All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="table-responsive-md">
                <form action="{{ route('assignLead') }}" method="POST">
                    @csrf
                    <div class="d-flex row">

                        <div class="col-6">

                            <select name="assign_to_id_call" id=""
                                class="form-select inputleads select-form  mb-3">
                                <option value=""></option>
                                @foreach ($callagents as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-primary" style="color:white;">Submit</button>
                        </div>

                    </div>
                    @if (Illuminate\Support\Facades\Session::has('message'))
                        <span class="fs-5 mb-2 fw-500">
                            {{ Illuminate\Support\Facades\Session::get('message') }}
                        </span>
                    @endif
                    <table class="table">
                        <thead style="background-color: #ebebeb;">
                            <tr class="text-center">
                                <td>
                                    <div class="checkbox">
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
                        @foreach ($leads as $item)
                            @php
                                $feedback_datum = App\Models\Feedback::where('lead_id', $item->id)
                                    ->orderBy('created_at', 'desc')
                                    ->first();
                                
                            @endphp
                            <tbody>
                                <tr class="text-center">
                                    <td>
                                        <label>
                                            <input type="checkbox" name="lead_id[]" value="{{ $item->id }}"
                                                class="check">
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
                                    <td style="color:{{ $item->feedback_status == 'Terminiert' ? 'green' : 'red' }};">
                                        {{ $item->feedback_status }}</td>
                                    <td>{{ App\Models\Feedback::where('lead_id', $item->id)->orderBy('created_at', 'desc')->pluck('created_at')->first() }}
                                    </td>
                                    <td><a class="btn btnedit" href="{{ route('getLeadById', ['id' => $item->id]) }}"><i
                                                class="fa-regular fa-pen-to-square"></i></a><span>Edit</span></td>
                                    <td><a class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a><span>Delete</span></td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </form>
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
