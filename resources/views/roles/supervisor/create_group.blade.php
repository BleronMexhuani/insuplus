@extends('layouts.app')
@section('content')
<div class="px-md-3 pe-md-4 mt-5">
    <div class=" my-3 p-3" style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <h3>Team-Registrierung</h3>
        <form action="{{route('handleSubmitCreateGroup')}}" class="my-5" method="post">
            @csrf
            <div class="row">
                <div class="col-3">
                    <label for="Group">Group Name</label>
                    <input type="text" class="form-control" placeholder="Group Name.." name="group_name">
                </div>
                <div class="col-3">
                    <label for="Umfrage Agents">Umfrage Agents</label>
                    <select class="selectpicker form-control" required data-live-search="true" name="umfrage_agents[]"
                        multiple='true'>
                        @foreach ($umfrage as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="Call Agent">Call Agents</label>
                    <select class="selectpicker form-control " required data-live-search="true" name="call_agents[]" multiple='true'>
                        @foreach ($callagents as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3">
                    <label for="Call Agent">Team Leaders</label>
                    <select class="selectpicker form-control" required data-live-search="true" name="team_leaders[]" multiple='true'>
                        @foreach ($team_leaders as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-3 my-3">
                    <button class="btn btn-primary w-100" style="color:white">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
