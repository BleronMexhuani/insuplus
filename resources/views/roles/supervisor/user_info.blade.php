@extends('layouts.app')

@section('content')
    <form action="{{ route('updateUser', ['id' => $user->id]) }}" class="d-flex justify-content-center my-3" method="post">
        @method('PUT')
        @csrf
        <div class="row w-75">
            <div class="col-6">
                <label for="Emai">Name</label>
                <input type="text" name="name" class="form-control " value="{{ $user->name }}">
            </div>
            <div class="col-6">
                <label for="Emai">Email</label>
                <input type="text" name="email" class="form-control " value="{{ $user->email }}">
            </div>
        
            <div class="col-6 my-3">
                <label for="">Select Role</label>
                <select name="role" class="form-control" id="roles">
                    <option value="quality_agent">Quality Agent</option>
                    <option value="umfrage_agent">Umfrage Agent</option>
                    <option value="call_agent">Call Agent</option>
                    <option value="supervisor">Supervisor</option>
                </select>
                <script>
                    $("#roles").val('{{$user->getRoleNames()[0]}}')
                </script>
            </div>
            <div class="col-6 my-auto">
                <span>Submit</span>
                <button class="btn btn-primary w-100" style="background-color:blue">Submit</button>
            </div>
            @if(Illuminate\Support\Facades\Session::has('success'))
                <span style="color:green">
                    {{Illuminate\Support\Facades\Session::get('success')}}
                </span>
            @endif
        </div>
    </form>
@endsection
