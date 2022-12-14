@extends('layouts.app')
@section('content')
    <div class="">
        <div class="mt-4 py-3 px-2">
            <form action="{{ route('searchLeads') }}" method="GET">
                @csrf
                <div class="accordionbg mb-4">
                    <button type="button" class="acordion pull-right">Erweiter</button>
                    <button type="button" class="accordion">Filter</button>

                    <div class="panel">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Erstellungsdatum</span>
                                </div>

                                <div class="input-group mt-2">
                                    <input type="text" class="form-controol input-sm" placeholder="von"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name="created_at[]"
                                        onchange="change()">
                                    <input type="text" class="form-controol input-sm" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name="created_at[]">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Verteildatum</span>
                                </div>
                                <div class="input-group mt-2">
                                    <input type="text" class="form-control input-sm" placeholder="von"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name="verteilen_datum[]"
                                        onchange="change()">
                                    <input type="text" class="form-control input-sm" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name="verteilen_datum[]">
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Benutzer</span>
                                </div>
                                <div class="input-group mt-2 ">
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true"
                                        name="assgined_from">
                                        @foreach ($umfrage_agents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true"
                                        name="assign_to_id_call">
                                        @foreach ($callagents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Mannschaft</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true"
                                        name="teams[]">
                                        @foreach ($teams as $item)
                                            <option value="{{ $item->id }}">{{ $item->group_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Jahrgang</span>
                                </div>
                                <div>
                                    <div class="input-group mt-2">
                                        <input class="form-controol input-sm" type="number" value=""
                                            name="geburtsdatum[]" placeholder="Herr" min="1" max="3000">
                                        <input class="form-controol input-sm" type="number" name="geburtsdatum[]"
                                            value="" name="" placeholder="Herr" min="1" max="10000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kanton</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" name="kanton[]" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="AG">Aargau</option>
                                        <option value="AR">Appenzell Ausserrhoden</option>
                                        <option value="AI">Appenzell Innerrhoden</option>
                                        <option value="BL">Basel-Land</option>
                                        <option value="BS">Basel-Stadt</option>
                                        <option value="BE">Bern</option>
                                        <option value="FR">Fribourg</option>
                                        <option value="GE">Genève</option>
                                        <option value="GL">Glarus</option>
                                        <option value="GR">Graubünden</option>
                                        <option value="JU">Jura</option>
                                        <option value="LU">Luzern</option>
                                        <option value="NE">Neuchâtel</option>
                                        <option value="NW">Nidwalden</option>
                                        <option value="OW">Obwalden</option>
                                        <option value="SG">St. Gallen</option>
                                        <option value="SH">Schaffhausen</option>
                                        <option value="SZ">Schwyz</option>
                                        <option value="SO">Solothurn</option>
                                        <option value="TG">Thurgau</option>
                                        <option value="TI">Ticino</option>
                                        <option value="UR">Uri</option>
                                        <option value="VD">Vaud</option>
                                        <option value="VS">Valais</option>
                                        <option value="ZG">Zug</option>
                                        <option value="ZH">Zürich</option>
                                        <option value="LI">Liechtenstein</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Region</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true"
                                        name="region[]">
                                        <option id="Deutschschweiz (Germany)" value="Deutschschweiz (Germany)">
                                            Deutschschweiz (Germany)</option>
                                        <option id="Tessin (Italy)" value="Tessin (Italy)"> Tessin (Italy)</option>
                                        <option id="Westschweiz (France)" value="Westschweiz (France)"> Westschweiz
                                            (France)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Sprache</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" name="sprachen[]" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="AL">Albanisch</option>
                                        <option value="DE">Deutsch</option>
                                        <option value="EN">Englisch</option>
                                        <option value="FR">Französisch</option>
                                        <option value="IT">Italienisch</option>
                                        <option value="HR">Kroatisch</option>
                                        <option value="PL">Polnisch</option>
                                        <option value="PT">Portugiesisch</option>
                                        <option value="SR">Serbisch</option>
                                        <option value="ES">Spanisch</option>
                                        <option value="TR">Türkisch</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Sparpotenzial</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="sparen[]" multiple
                                        data-actions-box="true">
                                        <option id="Ja" value="Ja"> Ja</option>
                                        <option id="Manchmal" value="Manchmal"> Manchmal</option>
                                        <option id="Nein" value="Nein"> Nein</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Krankenkasse</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="krankenkasse[]" multiple
                                        data-actions-box="true">
                                        <option value="Agrisano"> Agrisano</option>
                                        <option value="AMB"> AMB</option>
                                        <option value="Aquilana"> Aquilana</option>
                                        <option value="Arcosana"> Arcosana</option>
                                        <option value="Assura-Basis"> Assura-Basis</option>
                                        <option value="Atupri"> Atupri</option>
                                        <option value="Avenir"> Avenir</option>
                                        <option value="Birchmeier"> Birchmeier</option>
                                        <option value="Compact Grundversicherung"> Compact Grundversicherung</option>
                                        <option value="CONCORDIA"> CONCORDIA</option>
                                        <option value="CSS"> CSS</option>
                                        <option value="EasySana"> EasySana</option>
                                        <option value="EGK"> EGK</option>
                                        <option value="Einsiedler Krankenkasse"> Einsiedler Krankenkasse</option>
                                        <option value="GALENOS"> GALENOS</option>
                                        <option value="Glarner"> Glarner</option>
                                        <option value="Helsana"> Helsana</option>
                                        <option value="INTRAS"> INTRAS</option>
                                        <option value="Keine"> Keine</option>
                                        <option value="KLuG"> KLuG</option>
                                        <option value="Kolping"> Kolping</option>
                                        <option value="KPT"> KPT</option>
                                        <option value="KVF"> KVF</option>
                                        <option value="LUMNEZIANA"> LUMNEZIANA</option>
                                        <option value="Luzerner Hinterland"> Luzerner Hinterland</option>
                                        <option value="Moove Sympany"> Moove Sympany</option>
                                        <option value="Mutuel Assurance (Groupe Mutuel)"> Mutuel Assurance (Groupe Mutuel)
                                        </option>
                                        <option value="ÖKK"> ÖKK</option>
                                        <option value="Philos"> Philos</option>
                                        <option value="Progrès"> Progrès</option>
                                        <option value="PROVITA"> PROVITA</option>
                                        <option value="rhenusana"> rhenusana</option>
                                        <option value="sana24"> sana24</option>
                                        <option value="Sanagate"> Sanagate</option>
                                        <option value="sanavals Gesundheitkasse"> sanavals Gesundheitkasse</option>
                                        <option value="Sanitas"> Sanitas</option>
                                        <option value="Simplon"> Simplon</option>
                                        <option value="SLKK"> SLKK</option>
                                        <option value="sodalis"> sodalis</option>
                                        <option value="Steffisburg"> Steffisburg</option>
                                        <option value="Stoffel"> Stoffel</option>
                                        <option value="Sumiswalder Krankenkasse"> Sumiswalder Krankenkasse</option>
                                        <option value="SUPRA"> SUPRA</option>
                                        <option value="SWICA"> SWICA</option>
                                        <option value="Vallèe d'Entremont"> Vallèe d'Entremont</option>
                                        <option value="Visana AG"> Visana AG</option>
                                        <option value="Visperterminen KKV"> Visperterminen KKV</option>
                                        <option value="vita surselva"> vita surselva</option>
                                        <option value="vivacare"> vivacare</option>
                                        <option value="Vivao Sympany"> Vivao Sympany</option>
                                        <option value="Wädenswil"> Wädenswil</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">3. Säule</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="saule[]" multiple
                                        data-actions-box="true">
                                        <option value="Allianz"> Allianz</option>
                                        <option value="Axa"> Axa</option>
                                        <option value="Baloise"> Baloise</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Basler"> Basler</option>
                                        <option value="CSS Gruppe"> CSS Gruppe</option>
                                        <option value="Die Mobiliar"> Die Mobiliar</option>
                                        <option value="Elipslife">Elipslife</option>
                                        <option value="Generali"> Generali</option>
                                        <option value="Group Mutuel"> Group Mutuel</option>
                                        <option value="Helvetia">Helvetia</option>
                                        <option value="Keine auskunft">Keine auskunft</option>
                                        <option value="Keine"> Keine</option>
                                        <option value="Lichtenstein Life">Lichtenstein Life</option>
                                        <option value="Nationale Suisse"> Nationale Suisse</option>
                                        <option value="PAX"> PAX</option>
                                        <option value="Post">Post</option>
                                        <option value="Skandia">Skandia</option>
                                        <option value="Swiss Life"> Swiss Life</option>
                                        <option value="Vaudoise"> Vaudoise</option>
                                        <option value="Zürich"> Zürich</option>
                                        <option value="Zürich Connect">Zürich Connect</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="kontaktieren_erwunscht[]"
                                        multiple data-actions-box="true">
                                        <option value="Ja"> Ja</option>
                                        <option value="Nein"> Nein</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="bestatigungs_status[]"
                                        multiple data-actions-box="true">
                                        <option value="null"> Bestätigung pendent</option>
                                        <option value="Autoversicherung"> Autoversicherung</option>
                                        <option value="Bestätigt"> Bestätigt</option>
                                        <option value="Intern"> Intern</option>
                                        <option value="Krankenkasse"> Krankenkasse</option>
                                        <option value="Nicht bestätigt"> Nicht bestätigt</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Feedback</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="feedback_status[]" multiple
                                        data-actions-box="true">
                                        <option value="null">Leer</option>
                                        <option value="Falsche Nummer">Falsche Nummer</option>
                                        <option value="Hat schon gewechselt">Hat schon gewechselt</option>
                                        <option value="Kein Interesse">Kein Interesse</option>
                                        <option value="Krank">Krank</option>
                                        <option value="Kunde bereits terminiert">Kunde bereits terminiert</option>
                                        <option value="Nicht Brauchbar">Nicht Brauchbar</option>
                                        <option value="Nicht erreicht">Nicht erreicht</option>
                                        <option value="Online-Offerte">Online-Offerte</option>
                                        <option value="Später Anrufen">Später Anrufen</option>
                                        <option value="Terminiert">Terminiert</option>
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Duplicate</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" multiple
                                        data-actions-box="true">
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                        <option value="6">Six</option>
                                        <option value="7">Seven</option>
                                        <option value="8">Eight</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">


                            <div class="col-3 col-md-3 mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Später Anrufen</span>
                                </div>
                                <div class="mt-2 ">
                                    <div class="input-group mt-2 ">
                                        <input type="text" class="form-controol input-sm mb-4" name="anrufdatum[]" placeholder="von"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" 
                                            name="" onchange="change()">
                                        <input type="text" class="form-controol input-sm mb-4" name="anrufdatum[]" placeholder="bis"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" 
                                            name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-auto">
                                <button class="btn btn-primary w-50" style="color:white;">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            <span class="ms-1 mb-4 subtitlelead ">All</span>
            <hr>
            <div class="row">
                <div class="col-8 mb-4 mt-3">
                    <div class="input-group">
                        <div class="form-outline">
                            <input class="inputleads ps-5" type="text" placeholder="Search" />
                            <i class="fa fa-search filtersubmit ps-1 "></i>
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
            <div class="table-responsive-md">
                <form action="{{ route('assignLead') }}" method="POST">
                    @csrf
                    <div class="d-flex row">

                        <div class="col-6">

                            <select name="assign_to_id_call" id=""
                                class="form-select inputleads select-form  mb-3">
                                <option value=""></option>
                                @foreach ($callagents as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-primary" style="color:white;">Submit</button>
                        </div>

                    </div>
                    @if (Illuminate\Support\Facades\Session::has('message'))
                        <span class="fs-5 mb-2 fw-500">
                            {{ Illuminate\Support\Facades\Session::get('message') }}
                        </span>
                    @endif
                    <div style="overflow-x:auto;">
                        <table class="table">
                            <thead style="background-color: #ebebeb;">
                                <tr class="text-center">
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="check" id="checkAll">
                                            </label>
                                        </div>
                                    </td>
                                    <th>Vorname</th>
                                    <th>Nachname</th>
                                    <th>Geburtsdatum</th>
                                    <th>Email</th>
                                    <th>Region</th>
                                    <th>Sprache</th>
                                    <th>Verteilen At</th>
                                    <th>Created Time</th>

                                    <th>Created From</th>
                                    <th>Feedback</th>
                                    <th>Feedback datum</th>
                                    <th>Aktion </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            @foreach ($leads as $item)
                                @php
                                    $feedback_datum = App\Models\Feedback::where('lead_id', $item->id)
                                        ->orderBy('created_at', 'desc')
                                        ->first();
                                    
                                @endphp
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <label>
                                                <input type="checkbox" name="lead_id[]" value="{{ $item->id }}"
                                                    class="check">
                                            </label>
                                        </td>
                                        <td>{{ $item->vorname }}</td>
                                        <td>{{ $item->nachname }}</td>
                                        <td>{{ $item->geburtsdatum }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->region }}</td>
                                        <td>{{ $item->sprachen }}</td>
                                        <td>{{ $item->assign_to_id_call ? App\Models\User::find($item->assign_to_id_call)->name : ($item->assign_to_id_team_leader ? App\Models\User::find($item->assign_to_id_team_leader)->name : 'Not Assigned') }}
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->assigned_from }}</td>
                                        <td style="color:{{ $item->feedback_status == 'Terminiert' ? 'green' : 'red' }};">
                                            {{ $item->feedback_status }}</td>
                                        <td>{{ App\Models\Feedback::where('lead_id', $item->id)->orderBy('created_at', 'desc')->pluck('created_at')->first() }}
                                        </td>
                                        <td><a class="btn btnedit"
                                                href="{{ route('getLeadById', ['id' => $item->id]) }}"><i
                                                    class="fa-regular fa-pen-to-square"></i></a></td>
                                        <td><a class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script>
        $("#checkAll").click(function() {
            $(".check").prop('checked', $(this).prop('checked'));
        });
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
@endsection
