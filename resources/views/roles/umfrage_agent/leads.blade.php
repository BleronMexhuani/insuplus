@extends('layouts.app')
<?php
$i = 1;
?>
@section('content')
    <div class="mt-4 py-3 px-2">
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
            <div class="">
                <form action="" method="GET">
                    <div class="col searchgrup">
                        <div class="input-group  searchLeads mt-md-4 mt-3 mb-3 mb-md-4">
                            <div class="form-outline">
                                <input class="inputleads ps-5" name="vorname" type="text"
                                    placeholder="Search Leads" />
                                <i class="fa fa-search filtersubmit ps-1 "></i>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
                <div style="overflow-x:auto; overflow-y: hidden">
                    <table>
                        <thead style="background-color: #F7F7F7;">
                            <tr class="text-center">
                                <td>

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

                                <th> </th>
                            </tr>
                        </thead>
                        @foreach ($leads as $item)
                            @php
                                $feedback_datum = App\Models\FeedBack::where('lead_id', $item->id)
                                    ->orderBy('created_at', 'desc')
                                    ->first();
                                
                            @endphp
                            <tbody>
                                <tr class="text-center">
                                    <td>

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
                                    <td>{{ App\Models\FeedBack::where('lead_id', $item->id)->orderBy('created_at', 'desc')->pluck('created_at')->first() }}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach

                    </table>

                    <div class=" pt-4">
                        <div class="text-center text-sm-start my-3 ps-0 ps-sm-4">
                            <span>Shows {{ $leads->firstItem() }} - {{ $leads->lastItem() }} of Total
                                {{ $leads->total() }}
                                Leads </span>
                        </div>
                        <div class="d-flex justify-content-center navPagination">
                            {{ $leads->onEachSide(1)->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
