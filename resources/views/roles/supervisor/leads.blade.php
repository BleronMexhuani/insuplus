@extends('layouts.app')
@section('content')
    <form action="{{route('searchLeads')}}" method="GET">
        @csrf
        <div class="row">
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
        
        </div>

    </form>
    <div class="col ms-0 ms-md-2 px-0 px-md-5">
        <div class="mt-4 py-3 px-2">
            <span class="ms-1 subtitlelead ">All</span>
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
                                                class="fa-regular fa-pen-to-square"></i></a></td>
                                    <td><a class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a></td>
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
@endsection
