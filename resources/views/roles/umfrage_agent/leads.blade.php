@extends('layouts.app')
<?php
$i = 1;
?>
@section('content')
<div class="bgtable">
<div style="overflow-x:auto;">
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
      </tr>
    </table>
  </div>
</div>
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
@endsection
