@extends('layouts.app')

@section('content')
    <table class="table  table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Group Name</th>
                <th scope="col">Team Leader</th>
                <th scope="col">Umfrage Agents</th>
                <th scope="col">Call Agents</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($teams as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->group_name }}</td>
                    <td>{{ App\Models\User::find($item->team_leaders)->name }}</td>
                    <td>{{ count(explode(',', $item->umfrage_agents)) }}</td>
                    <td>{{ count(explode(',', $item->call_agents)) }}</td>
                    <td>
                        <a href="{{ route('getGroupById', ['id' => $item->id]) }}" class="btn btn-primray">Edit</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
