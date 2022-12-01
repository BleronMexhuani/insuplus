@extends('layouts.app')
@section('content')
        <table class="table table-bordered mt-5" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Vorname</th>
                    <th scope="col">Feedback Status</th>
                    <th scope="col">Agent</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $item->vorname }}</td>
                        <td>{{ $item->feedback_status }}</td>
                        <td>{{ $item->getAssignedAgent->name }}</td>
                        <td><a class="btn btn-primary" href="lead_info/{{$item->id}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection