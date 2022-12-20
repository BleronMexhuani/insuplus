@extends('layouts.app')
<?php
$i = 1;
?>
@section('content')
    <div class="mt-4 py-3 px-2">
        <div class="form-outline">
            <form action="" method="get">
                <input class="inputleads ps-5" type="text" name="vorname" placeholder="Search Leads" />
                <i class="fa fa-search filtersubmit ps-1 "></i>
            </form>
        </div>
        <div class="tableform">
            <div style="overflow-x:auto;">
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
                        <span>Shows {{ $leads->firstItem() }} - {{ $leads->lastItem() }} of Total {{ $leads->total() }}
                            Leads </span>
                    </div>
                    <div class="d-flex justify-content-center navPagination">
                        {{ $leads->onEachSide(1)->links() }}
                    </div>

                </div>
            </div>
            {{-- <div style="overflow-x:auto;">
    <table>
      <tr>
        <th>Vorname</th>
        <th>Nachname </th>
        <th>Jahr </th>
        <th>Kanton</th>
        <th>Region</th>
        <th>Sprache</th>
        <th>Status</th>
        <th>Created Time</th>
        <th>Created From</th>
        <th>Feedback</th>
        <th>Feedback Datum</th>
      </tr>
      <tr>
        <td>Jill</td>
        <td>Smith</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Eve</td>
        <td>Jackson</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
        <td>94</td>
      </tr>
      <tr>
        <td>Adam</td>
        <td>Johnson</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td>67</td>
        <td><a class="btn btnedit"><i
                class="fa-regular fa-pen-to-square"></i></a></td>
    <td><a class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a></td>
      </tr>
    </table>
  </div>
</div> --}}
            {{-- <div class="mt-4">
        <h3>Leads</h3>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th scope="col">Nr.</th>
                    <th scope="col">Kampagne</th>
                    <th scope="col">Vorname</th>
                    <th scope="col">Nachname</th>
                    <th scope="col">Geburtsdatum</th>
                    <th scope="col">Handy Nummer</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->kampagne }}</td>
                        <td>{{ $item->vorname }}</td>
                        <td>{{ $item->nachname }}</td>
                        <td>{{ $item->geburtsdatum }}</td>
                        <td>{{ $item->handy_nummer }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> --}}
        </div>
    @endsection
