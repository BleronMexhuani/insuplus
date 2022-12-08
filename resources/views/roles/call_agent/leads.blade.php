@extends('layouts.app')
@section('content')
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
            <div class="table-responsive">
                <table class="table">
                    <thead style="background-color: #ebebeb;">
                        <tr class="text-center">

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
                                <td><a class="btn btnedit mb-2" href="{{ route('lead_info.call', ['id' => $item->id]) }}"><i
                                            class="fa-regular fa-pen-to-square"></i></a><span>Edit</span></td>
                                <td><a class="btn btndelete mb-2"><i class="fa-solid fa-trash-can"></i></a><span>Delete</span></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>





    <style>
        .container {
            padding: 2rem 0rem;
        }
    </style>

    <script>
        $("#checkAll").click(function() {
            $(".check").prop('checked', $(this).prop('checked'));
        });
    </script>
@endsection
