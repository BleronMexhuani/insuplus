@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('storeFeedBackQA', ['lead_id' => $lead->id]) }}"
        class="w-50 d-flex justify-content-center text-center">
        @csrf
        <div>
            <div>
                <label for="">Kampagne</label>
                <input class="form-control" value="{{ $lead->kampagne }}" type="text" name="kampagne">
            </div>
            <div>
                <label for="">Vorname</label>
                <input class="form-control" value="{{ $lead->vorname }}" type="text" name="vorname">

            </div>
            <div>
                <label for="">Nachname</label>
                <input class="form-control" value="{{ $lead->nachname }}" type="text" name="nachname">
            </div>
            <div>
                <label for="">Anrede</label>
                <input class="form-control " value="{{ $lead->anrede }}" type="text" name="anrede">
            </div>
            <div>
                <label for="">Gebursdatum</label>
                <input class="form-control" value="{{ $lead->geburtsdatum }}" type="text" name="gebursdatum">
            </div>
            <div>
                <label for="">HandyNumber</label>
                <input class="form-control" value="{{ $lead->handy_nummer }}" type="text" name="handy_nummer">
            </div>
            <div>
                <label for="">Email</label>
                <input class="form-control" value="{{ $lead->email }}" type="text" name="email">
            </div>
            <div>
                <label for="">Addresse</label>
                <input class="form-control" value="{{ $lead->adresse }}" type="text" name="adresse">
            </div>
            <div>
                <label for="">Feedback</label>
                <select name="feedback_status" id="" class="form-control">
                    <option value="termin">Termin</option>
                    <option value="falsche_nummer">Falsche Nummer</option>
                </select>
            </div>

            <button type="submit" style="background-color: blue;color:white" class="btn  mt-1 w-100">Submit</button>
        </div>
    </form>
    <div>
        <h3> Lead History</p>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>

                        <th scope="col">Feedback Status</th>
                        <th scope="col">Feedback From</th>
                        <th scope="col">Updated at</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($feedbacks as $item)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $item->feedback }}</td>
                            <td>{{ $item->getUserFeedback->name }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
