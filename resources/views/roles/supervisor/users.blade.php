@extends('layouts.app')

@section('content')
    <div class="my-3">
        <a href="{{ route('createUser') }}" class="fw-bold fs-3">Add User</a>
    </div>
    <div class="tableform">
    <div style="overflow-x:auto;">
        <table>
            <thead>
          <tr style="background-color: #F7F7F7;" >
            <th>Firstname</th>
            <th>Role</th>
            <th>Email</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ ucfirst(explode('_', $item->getRoleNames()[0])[0]) }} Agent </td>
                    <td>{{ $item->email }}</td>
                    <td ><a class="btn btnedit"
                        href="{{ route('getuserbyid', ['id' => $item->id]) }}"><i
                            class="fa-regular fa-pen-to-square"></i></a>

                <a onclick="if(confirm('Are you sure ?'))location.href='{{ route('deleteUser', ['id' => $item->id]) }}" class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
            @endforeach
        </tbody>
        
        </table>
        
    </div>
    {{-- <table class="my-4">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ ucfirst(explode('_', $item->getRoleNames()[0])[0]) }} Agent </td>
                        <td>{{ $item->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('getuserbyid', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                            <a onclick="if(confirm('Are you sure ?'))location.href='{{ route('deleteUser', ['id' => $item->id]) }}'"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table> --}}
        @if (Illuminate\Support\Facades\Session::has('success'))
            <span style="color:green">
                {{ Illuminate\Support\Facades\Session::get('success') }}
            </span>
        @endif
    @endsection
