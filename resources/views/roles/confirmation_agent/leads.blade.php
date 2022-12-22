@extends('layouts.app')
@section('content')
    <div class="mt-4 py-3 px-2 pe-md-5">
        <div class="tableform ">
            <div style="overflow-x:auto; overflow-y: hidden">
                <table class="">
                    <thead style="background-color: #F7F7F7;">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Vorname</th>
                            <th scope="col">Feedback Status</th>
                            <th scope="col">Agent</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leads as $item)
                            <tr class="text-center">
                                <th scope="row">1</th>
                                <td>kjlasdkljflkajsdf</td>
                                <td>{{ $item->vorname }}</td>
                                <td>{{ $item->feedback_status }}</td>
                                <td>{{ $item->getAssignedAgent->name }}</td>
                                <td><a class="btn btn-primary" href="lead_info/{{ $item->id }}">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
