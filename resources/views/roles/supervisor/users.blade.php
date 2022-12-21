@extends('layouts.app')

@section('content')
<div class="col ms-0 ms-md-2 px-0 px-md-2 pe-md-4">
    <div class="my-3 mt-5">
        <a href="{{ route('createUser') }}" class="titleoftable  fs-3">Add User</a>
    </div>
    <div class="tableform mt-5">
        <div style="overflow-x:auto; overflow-y: hidden">
            <table>
                <thead>
                    <tr style="background-color: #F7F7F7;">
                        <th>Firstname</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th class="text-center">Aktion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ ucfirst(explode('_', $item->getRoleNames()[0])[0]) }} Agent </td>
                            <td>{{ $item->email }}</td>
                            <td><a class="btn btnedit" href="{{ route('getuserbyid', ['id' => $item->id]) }}"><i
                                        class="fa-regular fa-pen-to-square"></i></a>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        @if (Illuminate\Support\Facades\Session::has('success'))
            <span style="color:green">
                {{ Illuminate\Support\Facades\Session::get('success') }}
            </span>
        @endif
    @endsection
