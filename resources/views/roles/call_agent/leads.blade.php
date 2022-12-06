@extends('layouts.app')
@section('content')
<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Vorname</th>
            <th scope="col">Feedback Status</th>
            <th scope="col">Agent</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leads as $item)
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->vorname }}</td>
            <td>{{ $item->feedback_status }}</td>
            <td>{{ $item->getAssignedAgent->name }}</td>
            <td><a class="btn btn-primary " href="lead_info/{{$item->id}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="col ms-0 ms-md-2 px-0 px-md-5">
    <div class="mt-4 py-3 px-2">
        <span class="ms-1 subtitlelead ">All</span>
        <hr>
        <div class="row">
            <div class="col-8 mb-4 mt-3">
                <div class="input-group">
                    <div class="form-outline">
                        <input class="inputleads ps-5"  type="text" placeholder="Search" />
                        <i  class="fa fa-search filtersubmit ps-1 "></i>
                    </div>
                    
                  </div>
                  
            </div>
            <div class="col">
                <div style="margin-top: 4px; width:25vh">
                    <div class="topPlaceholder px-4">
                        <span>Filter</span>
                    </div>
                    <select class="form-select inputleads select-form " aria-label="Default select example">
                    <option selected>All</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

            </div>
            <div class="col">
                <div style="margin-top: 4px">
                    <div class="topPlaceholder px-4">
                        <span>Sort</span>
                    </div>
                <select class="form-select inputleads select-form" aria-label="Default select example">
                    <option selected>All</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead style="background-color: #ebebeb;">
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="check" id="checkAll">
                                </label>
                            </div>
                        </td>
                        <th>Vorname</th>
                        <th>Nachname</th>
                        <th>Jahr</th>
                        <th>Kanton</th>
                        <th>Region</th>
                        <th>Sprache</th>
                        <th>Status</th>
                        <th>Created Time</th>
                        <th>Created From</th>
                        <th>Feedback</th>
                        <th>Feedback datum</th>
                        <th >Aktion </th>
                        <th > </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" class="check">
                            </label>
                        </td>
                        <td>Enis</td>
                        <td>Demolli</td>
                        <td>2000</td>
                        <td>Prishtina</td>
                        <td>Kosovo</td>
                        <td>Shqip</td>
                        <td>Not Assigned</td>
                        <td>23.11.2000 12:07AM</td>
                        <td>Denis Demolli</td>
                        <td style="color: green;">Termin</td>
                        <td>Denis Demolli</td>
                        <td ><a class="btn btnedit" href="lead_info/{{$item->id}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                        <td ><a class="btn btndelete" href="lead_info/{{$item->id}}"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" class="check">
                            </label>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" class="check">
                            </label>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>
                            <label>
                                <input type="checkbox" class="check">
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>




<style>
    .container {
        padding: 2rem 0rem;
    }

</style>

<script>
    $("#checkAll").click(function() {
        $(".check").prop('checked', $(this).prop('checked'));
    });
</script>

@endsection