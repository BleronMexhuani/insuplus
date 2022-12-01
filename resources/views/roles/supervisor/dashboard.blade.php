<form action="{{ route('assignLead') }}" class="w-50" method="POST">
    @csrf
    <div>
        <label for="">Select the lead to assign for</label>
        <select name="id" class="form-control " id="">
            @foreach ($leadSuperVisor as $item)
                <option value="{{ $item->id }}">{{ $item->vorname }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="">Assign to call agent</label>
        <select name="assign_to_id_call" class="form-control " id="">
            @foreach ($callagent as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="text-center">
        <button type="submit" style="background-color:blue;color:white"
            class="btn btn-primary mt-2 w-100 ">Submit</button>
    </div>

</form>
