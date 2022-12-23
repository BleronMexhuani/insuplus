@extends('layouts.app')

@section('content')
    <div class="px-md-3 pe-md-4">
        <div class="py-2 px-2">
        <div class="tableform mt-5">
            <div style="overflow-x:auto; overflow-y:hidden;">
                <table>
                    <thead style="background-color: #F7F7F7;">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Group Name</th>
                            <th scope="col">Team Leader</th>
                            <th scope="col">Umfrage Agents</th>
                            <th scope="col">Call Agents</th>
                            <th>Aktion</th>
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
                                    <a class="btn btnedit" href="{{ route('getGroupById', ['id' => $item->id]) }}"><i
                                            class="fa-regular fa-pen-to-square"></i></a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
