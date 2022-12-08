@extends('layouts.app')
@section('content')
    <form action="{{route('createUser.add')}}" class="d-flex justify-content-center my-3" method="POST" >
  
            @csrf
            <div class="row w-75">
                <div class="fs-2 mb-3">Create User</div>
                <div class="col-6">
                    <label for="Emai">Name</label>
                    <input type="text" name="name" class="form-control ">
                </div>
                <div class="col-6">
                    <label for="Emai">Email</label>
                    <input type="text" name="email" class="form-control " >
                </div>
                <div class="col-6">
                    <label for="Emai">Password</label>
                    <input type="text" name="password" class="form-control " >
                </div>
            
                <div class="col-6">
                    <label for="">Select Role</label>
                    <select name="role" class="form-control" id="roles">
                        <option value="quality_agent">Quality Agent</option>
                        <option value="umfrage_agent">Umfrage Agent</option>
                        <option value="team_leader">Team Leader</option>
                        <option value="call_agent">Call Agent</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                </div>
                <div class="col-6 my-3">
             
                    <button class="btn btn-primary w-100" style="background-color:blue">Submit</button>
                </div>
                @if(Illuminate\Support\Facades\Session::has('success'))
                    <span style="color:green">
                        {{Illuminate\Support\Facades\Session::get('success')}}
                    </span>
                @endif
            </div>
        </form>
    </form>
@endsection
