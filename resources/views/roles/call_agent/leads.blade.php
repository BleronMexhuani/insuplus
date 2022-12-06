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
            <td><a class="btn btn-primary" href="lead_info/{{$item->id}}">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Select Day</th>
                        <th scope="col">Article Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Words</th>
                        <th scope="col">Shares</th>
                        <th scope="col">Shares</th>
                        <th scope="col">Shares</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">1</label>
                            </div>
                        </td>
                        <td></td>
                        <td>Cristina</td>
                        <td>913</td>
                        <td>2.846</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">2</label>
                            </div>
                        </td>
                        <td>Bootstrap Grid 4 Tutorial and Examples</td>
                        <td>Cristina</td>
                        <td>1.434</td>
                        <td>3.417</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">3</label>
                            </div>
                        </td>
                        <td>Bootstrap Flexbox Tutorial and Examples</td>
                        <td>Cristina</td>
                        <td>1.877</td>
                        <td>1.234</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> -->

<div class="col ms-0 ms-md-2 px-0 px-md-5">
    <div class="mt-4 py-3 px-2">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck"></label>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"></label>
                            </div>
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
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2"></label>
                            </div>
                        </td>
                        <td>Anna</td>
                        <td>Pitt</td>
                        <td>35</td>
                        <td>New York</td>
                        <td>USA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection

<style>
    .container {
        padding: 2rem 0rem;
    }

    /* h4 {
  margin: 2rem 0rem 1rem;
} */
</style>