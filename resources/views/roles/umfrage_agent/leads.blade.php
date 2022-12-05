@extends('layouts.app')
<?php
$i = 1;
?>
@section('content')
    <div class="mt-4">
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
    </div>
@endsection
