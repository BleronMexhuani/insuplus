@extends('layouts.app')
@section('content')
    <div class="">
        <div class="mt-4 py-3 px-2">
            <form action="{{ route('searchLeads') }}" method="GET">
                @csrf
                <div class="accordionbg mb-4">
                    <button type="button" class="acordion pull-right">Erweiter</button>
                    <button type="button" class="accordion">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.25 19C17.6642 19 18 19.3358 18 19.75C18 20.1642 17.6642 20.5 17.25 20.5H10.75C10.3358 20.5 10 20.1642 10 19.75C10 19.3358 10.3358 19 10.75 19H17.25ZM21.25 13C21.6642 13 22 13.3358 22 13.75C22 14.1642 21.6642 14.5 21.25 14.5H6.75C6.33579 14.5 6 14.1642 6 13.75C6 13.3358 6.33579 13 6.75 13H21.25ZM24.25 7C24.6642 7 25 7.33579 25 7.75C25 8.16421 24.6642 8.5 24.25 8.5H3.75C3.33579 8.5 3 8.16421 3 7.75C3 7.33579 3.33579 7 3.75 7H24.25Z"
                                fill="#00727A" />
                        </svg>
                    </button>
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
                                        name="assigned_from[]">
                                        @foreach ($umfrage_agents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <select class="selectpicker" data-live-search="true" multiple data-actions-box="true"
                                        name="assign_to_id_call[]">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
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
                                <div class="mt-2">
                                    <span class="subtitleform">Feedback</span>
                                </div>
                                <div class="mt-2">
                                    <select class="selectpicker" data-live-search="true" name="feedback_status[]"
                                        multiple data-actions-box="true">
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
                            <div class="col-md-3 mb-3 ">
                                <div class="mt-2">
                                    <span class="subtitleform">Später Anrufen</span>
                                </div>
                                <div class="mt-2 ">
                                    <div class="input-group mt-2 ">
                                        <input type="text" class="form-controol input-sm mb-4" name="anrufdatum[]"
                                            placeholder="von" onfocus="(this.type='date')" onblur="(this.type='text')"
                                            name="" onchange="change()">
                                        <input type="text" class="form-controol input-sm mb-4" name="anrufdatum[]"
                                            placeholder="bis" onfocus="(this.type='date')" onblur="(this.type='text')"
                                            name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 my-auto">
                                <div class="mt-2">
                                    <button class="buttonsearch mb-4 mb-md-0"><i class="fa fa-search ps-1 "
                                            style="color:#00727A"></i></button>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </form>
            <div class="tableform">
                <div style="padding: 25px">
                    <span class="ms-1 mb-4 titleoftable ">All
                        <hr
                            style=" border: 2px solid #00727A;
                         width: 25px;
                         margin-top: 0px;
                         margin-left: 3px;">
                    </span>
                </div>
                <hr style="margin: 0px 23px 7px 23px;">
                <div class="">
                    <form action="" method="GET">
                        <div class="col-md-4 searchgrup">
                            <div class="input-group  searchLeads mt-md-4 mt-3 mb-3 mb-md-0">
                                <div class="form-outline">
                                    <input class="inputleads ps-5" name="vorname" type="text"
                                        placeholder="Search Leads" />
                                    <i class="fa fa-search filtersubmit ps-1 "></i>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('assignLead') }}" method="POST">
                        @csrf
                        <div class="d-flex row">
                            <div class="col-md-3">
                                <div class="searchgrup mt-md-4 mt-3">
                                    <select name="assign_to_id_call" placeholder="Call agents" id=""
                                        class="form-select inputleads  select-form  mb-3">
                                        <option value="">Choose Call Agents</option>
                                        @foreach ($callagents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mt-md-4 mt-0 chooseteamgroup">
                                    <select name="assign_to_id_team_leader" id=""
                                        class="form-select inputleads select-form  mb-3">
                                        <option value="">Choose Team Leader</option>
                                        @foreach ($team_leaders as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="btnsubmit mb-md-4 mb-0 mt-md-4 mt-0 text-center">
                                    <button class=" btnprofile w-100 " style="color:white;">Submit</button>
                                </div>
                            </div>
                        </div>
                        @if (Illuminate\Support\Facades\Session::has('message'))
                            <span class="fs-5 mb-2 fw-500">
                                {{ Illuminate\Support\Facades\Session::get('message') }}
                            </span>
                        @endif
                        
                        <div style="overflow-x:auto; overflow-y: hidden">
                            <table class="tableStyle" style="margin: 0px 0px;overflow-x: auto;
                            margin-bottom: 0px;
                            padding: 0px;">
                                <thead style="background-color: #F7F7F7;">
                                    <tr class="text-center ">
                                        <td>
                                            <div class="checkbox ms-3 squaredFour">
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
                                
                                    <tbody>
                                        @foreach ($leads as $item)
                                    @php
                                        $feedback_datum = App\Models\FeedBack::where('lead_id', $item->id)
                                            ->orderBy('created_at', 'desc')
                                            ->first();

                                    @endphp
                                        <tr class="text-center tablesfont">
                                            <td>
                                                <label>
                                                    <input type="checkbox" name="lead_id[]" value="{{ $item->id }}"
                                                        class="check ms-3">
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
                                            <td
                                                style="color:{{ $item->feedback_status == 'Terminiert' ? 'green' : 'red' }};">
                                                {{ $item->feedback_status }}</td>
                                            <td>{{ App\Models\FeedBack::where('lead_id', $item->id)->orderBy('created_at', 'desc')->pluck('created_at')->first() }}
                                            </td>
                                            <td><a class="btn btnedit"
                                                    href="{{ route('getLeadById', ['id' => $item->id]) }}"><i
                                                        class="fa-regular fa-pen-to-square"></i></a></td>
                                            <td><a class="btn btndelete"><i class="fa-solid fa-trash-can"></i></a></td>
                                        </tr>
                                @endforeach

                                    </tbody>

                            </table>
                            <div class=" pt-4">
                                <div class="text-center text-sm-start my-3 ps-0 ps-sm-4">
                                    <span>Shows {{ $leads->firstItem() }} - {{ $leads->lastItem() }} of Total
                                        {{ $leads->total() }} Leads </span>

                                </div>
                                <div class="d-flex justify-content-center navPagination">
                                    {{ $leads->onEachSide(1)->links() }}
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
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
