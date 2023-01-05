@extends('layouts.app')

@section('content')

    <div class="col ms-0 ms-md-2 px-0 " style="height: 90vh;">
        <div class="row ">
            <div class="my-3 mt-5 col-2">
             <button class="benutzerbutton w-100 ">  <a href="{{ route('createUser') }}" class="  ">Benutzer Hinzufügen</a> </button>

            </div>
            <div class="col-10 my-3 mt-5 ">
                <form action="" class="d-flex justify-content-end">
                    <div class="pe-2">
                        <select class="selectpicker " data-live-search="true" name="roles[]" multiple='true'>
                            <option value="quality_agent">Quality Agent</option>
                            <option value="umfrage_agent">Umfrage Agent</option>
                            <option value="team_leader">Team Leader</option>
                            <option value="call_agent">Call Agent</option>
                            <option value="supervisor">Supervisor</option>

                        </select>
                    </div>
                    <div class="pe-2">
                        <input type="text" placeholder="Vorname.." class="form-control" name="vorname" style="border-radius: 8px">
                    </div>
                    <div class="">
                        <button class="suchebutton " style="color:white">Suche</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="tableform mt-4">
            <div style="overflow-x:auto; overflow-y: hidden">
                <table>
                    <thead>
                        <tr style="background-color: #F7F7F7;">
                            <th>Vorname</th>
                            <th>Rolle</th>
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
                                    <a class="btn btndelete"
                                        onclick="if(confirm('Are you sure?'))window.location.href='{{ route('deleteUser', ['id' => $item->id]) }}'"><i
                                            class="fa-solid fa-trash-can"></i></a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" pt-4">
                    <div class="text-center text-sm-start my-3 ps-0 ps-sm-4">
                        <span>Shows {{ $users->firstItem() }} - {{ $users->lastItem() }} of Total
                            {{ $users->total() }} Users </span>

                    </div>
                    <div class="d-flex justify-content-center navPagination">
                        {{ $users->onEachSide(1)->links() }}
                    </div>

                </div>
            </div>
        </div>
        @if (Illuminate\Support\Facades\Session::has('success'))
            <span style="color:green">
                {{ Illuminate\Support\Facades\Session::get('success') }}
            </span>
        @endif
    @endsection
</div>
