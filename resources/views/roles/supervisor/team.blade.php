@extends('layouts.app')
@section('content')
    <form class="mt-5" action="{{ route('editTeam', ['id' => $team->id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-3">
                <label for="Group Name">Group Name</label>
                <input type="text" required name="group_name" class="form-control" value="{{ $team->group_name }}">
            </div>
            <div class="col-3">
                <label for="Call Agents">Call agents</label>
                <select class="selectpicker" required name="call_agents[]" data-live-search="true" multiple data-actions-box="true">
                    @foreach ($call_agents as $item)
                        <option value="{{ $item->id }}"
                            @php echo in_array($item->id,explode(',',$team->call_agents)) ? 'selected' : '' @endphp>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="Umfrage Agents">Umfrage agents</label>
                <select class="selectpicker" required name="umfrage_agents[]" data-live-search="true" multiple
                    data-actions-box="true">
                    @foreach ($umfrage_agents as $item)
                        <option value="{{ $item->id }}"
                            @php echo in_array($item->id,explode(',',$team->umfrage_agents)) ? 'selected' : '' @endphp>
                            {{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for=""></label>
                <button class="btn btn-primary w-100" style="color:white">
                    Edit
                </button>
            </div>
        </div>
    </form>
@endsection
