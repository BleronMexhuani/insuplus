@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('storeFeedBackQA', ['lead_id' => $lead->id]) }}">
        @csrf
        <div class="col ms-0 ms-md-2 px-0 px-md-5">
            <div class="mt-4 py-3 px-2">
                <span class="titlelead">Lead hinzufügen</span>
                <div class="bgform mt-4 p-4 p-md-5">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="text-start">
                                <span class="titleform ">Person Information </span>
                                <div class="mt-2">
                                    <hr style="width: 55%; border: 2px solid #00727A;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="">
                                <span class="subtitleform">Vorname</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->vorname }}" type="text" name="vorname"
                                    placeholder="Jane" />
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anrede</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="number" value="{{ $lead->anrede }}" id="tentacles"
                                    name="anrede" placeholder="Herr" min="1" max="9" />
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="">
                                <span class="subtitleform">Nachname </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->nachname }}" type="text" name="nachname"
                                    placeholder="Jane" />
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Geburtsdatum </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->geburtsdatum }}" type="date" id="birthday"
                                    name="geburtsdatum" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-4 mt-2">
                            <div class="text-start">
                                <span class="titleform ">Address Information </span>
                                <div class="mt-2">
                                    <hr style="width: 55%; border: 2px solid #00727A;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-2">
                            <div class="">
                                <span class="subtitleform">Adresse</span>
                            </div>
                            <div class="mt-2 ">
                                <div class="d-flex mb-3 ">
                                    <input type="text" value="{{ $lead->adresse }}" name="adresse" class="inputgroupleft"
                                        placeholder="James Scar" aria-label="Username">
                                    <input type="text" value="{{ $lead->hause_nummer }}" name="hause_nummer"
                                        class="inputgroupright" placeholder="Haus Nummer" aria-label="Haus Nummer">
                                </div>
                            </div>
                            <div class="mt-4 ">
                                <span class="subtitleform">Kanton</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->kanton }}" type="text" name="kanton"
                                    placeholder="Kanton" />
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-2">
                            <div class="">
                                <span class="subtitleform">Stadt </span>
                            </div>
                            <div class="mt-2">
                                <div class="d-flex mb-3 ">
                                    <input type="text" value="{{ $lead->plz }}" name="plz" class="inputgroupleft"
                                        placeholder="PLZ" aria-label="Username">
                                    <input type="text" value="{{ $lead->stadt }}" name="stadt" class="inputgroupright"
                                        placeholder="Stadt" aria-label="stadt">
                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Region</span>
                            </div>
                            <div class="mt-2 mb-4">
                                <input class="inputform" type="text" value="{{ $lead->region }}" name="region"
                                    placeholder="Lorem" />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-4 mt-2">
                            <div class="text-start">
                                <span class="titleform ">Kontakt Information</span>
                                <div class="mt-2">
                                    <hr style="width: 55%; border: 2px solid #00727A;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-2 mb-2 mb-md-5">
                            <div class="">
                                <span class="subtitleform">Handy Nummer</span>
                            </div>
                            <div class="mt-2 ">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+41</span>
                                    </div>
                                    <input type="text" value="{{ $lead->handy_nummer }}" name="handy_nummer"
                                        class="form-control inputnumber" placeholder="" aria-label=""
                                        aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-2 mb-5 ">
                            <div class="">
                                <span class="subtitleform">Email </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->email }}" type="email" id="email"
                                    name="email" placeholder="janedoe@gmail.com">
                            </div>
                        </div>

                    </div>
                    <hr>
                    @php
                        $sprachen = explode(',', $lead->sprachen);
                        
                    @endphp
                    <div class="text-center mt-4">
                        <span class="feedbacktitle">Sprachen</span><br>
                        <div class=" mt-4 mb-4" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" {{ in_array('AL', $sprachen) ? 'checked' : '' }}
                                id="btncheck1" hidden name="sprachen[]" value="AL" autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck1"> AL</label>

                            <input type="checkbox" class="btn-check" id="btncheck2"
                                {{ in_array('DE', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="DE"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck2">DE</label>

                            <input type="checkbox" class="btn-check" id="btncheck3"
                                {{ in_array('EN', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="EN"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck3">EN</label>

                            <input type="checkbox" class="btn-check" id="btncheck4"
                                {{ in_array('FR', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="FR"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck4">FR</label>

                            <input type="checkbox" class="btn-check" id="btncheck5"
                                {{ in_array('IT', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]"
                                value="IT"autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck5">IT</label>

                            <input type="checkbox" class="btn-check" id="btncheck6"
                                {{ in_array('HR', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="HR"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck6">HR</label>

                            <input type="checkbox" class="btn-check" id="btncheck7"
                                {{ in_array('PL', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="PL"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck7">PL</label>

                            <input type="checkbox" class="btn-check" id="btncheck8"
                                {{ in_array('PT', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="PT"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck8">PT</label>

                            <input type="checkbox" class="btn-check" id="btncheck9"
                                {{ in_array('SR', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="SR"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck9">SR</label>

                            <input type="checkbox" class="btn-check" id="btncheck10"
                                {{ in_array('ES', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="ES"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck10">ES</label>

                            <input type="checkbox" class="btn-check" id="btncheck11"
                                {{ in_array('TR', $sprachen) ? 'checked' : '' }} hidden name="sprachen[]" value="TR"
                                autocomplete="off">
                            <label class="btn btn-outline-primary sprachengr" for="btncheck11">TR</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Rechtsschutz </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" id=""
                                    value="{{ $lead->rechtsschutz }}" name="rechtsschutz" placeholder="Doe">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Ansprechspartner </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->ansprechspartner }}"
                                    name="ansprechspartner" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Zufriedenheit</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->zufriedenheit }}"
                                    name="zufriedenheit" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Erreichbarkeit </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->erreichbarkeit }}"
                                    name="erreichbarkeit" placeholder="Herr">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Hausrat </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->hausrat }}" name="hausrat"
                                    placeholder="Jane">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Krankenkasse </span>
                            </div>

                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->krankenkasse }}"
                                    name="krankenkasse" placeholder="German">

                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Sparen </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->sparen }}" name="sparen"
                                    placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anzahl personen </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->anzahl_personen }}"
                                    name="anzahl_personen" placeholder="German">
                            </div>
                            <div class="mt-4 ">
                                <span class="subtitleform">Gewünschte Beratung </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->gewunschte_beratung }}"
                                    name="gewunschte_beratung" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">3.Säule </span>
                            </div>
                            <div class="mt-2 mb-5">
                                <input class="inputform" type="text" value="{{ $lead->saule }}" name="saule"
                                    placeholder="janedoe@gmail.com">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Gesundheitzustand </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->gesundheitzustand }}"
                                    name="gesundheitzustand" placeholder="Herr">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Änderung bei KK </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->anderung }}" name="anderung"
                                    placeholder="Herr">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Arberistätig </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->arberistatig }}"
                                    name="arberistatig" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Autoversicherung</span>
                            </div>
                            <div class="mt-2 ">
                                <input type="text" value="{{ $lead->autoversicherung }}" name="autoversicherung"
                                    class="form-control inputnumber" placeholder="+41" aria-label="">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-4 mt-4">
                        </div>
                        <div class="col-12 col-md-4 mt-3 mb-5">
                            <div class="">
                                <span class="subtitleform">Kontaktieren erwúnscht </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" id="email"
                                    value="{{ $lead->kontaktieren_erwunscht }}" name="kontaktieren_erwunscht"
                                    placeholder="German">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-0 mt-md-2 mb-0 mb-md-5">
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mt-4">
                        <span class="feedbacktitle">Feedback</span><br>
                    </div>
                    <div class="row g-1 tab mt-4 ms-0 ms-md-0 px-3 px-md-3 d-flex justify-content-center">
                        <!-- <div class=""> -->
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Falsche Nummer')">
                                <input type="radio" name="feedback_status" value="Falsche Nummer"
                                    style="display: none;"> Falsche Nummer
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Falsche Nummer')">Falsche Nummer</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Hat schon gewechselt')">
                                <input type="radio" name="feedback_status" value="Hat schon gewechselt"
                                    style="display: none;"> Hat schon gewechselt
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Hat schon gewechselt')">Hat schon gewechselt</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Kein Interesse')">
                                <input type="radio" name="feedback_status" value="Kein Interesse"
                                    style="display: none;"> Kein Interesse
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Kein Interesse')">Kein Interesse</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Krank')">
                                <input type="radio" name="feedback_status" value="Krank" style="display: none;">Krank
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Krank')">Krank</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Kunde bereits terminiert')">
                                <input type="radio" name="feedback_status" value="Kunde bereits terminiert"
                                    style="display: none;">Kunde bereits terminiert
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Kunde bereits terminiert')">Kunde bereits terminiert</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Nicht Brauchbar')">
                                <input type="radio" name="feedback_status" value="Nicht Brauchbar"
                                    style="display: none;">Nicht Brauchbar
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Nicht Brauchbar')">Nicht Brauchbar</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Nicht Erreicht')">
                                <input type="radio" name="feedback" value="Nicht Erreicht"
                                    style="display: none;">Nicht Erreicht
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Nicht Erreicht')">Nicht Erreicht</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Online-Offerte')">
                                <input type="radio" name="feedback_status" value="Online-Offerte"
                                    style="display: none;">Online-Offerte
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Online-Offerte')">Online-Offerte</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Später Anrufrn')">
                                <input type="radio" name="feedback_status" value="Später Anrufrn"
                                    style="display: none;">Später Anrufrn
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Später Anrufrn')">Später Anrufrn</button> -->
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Terminiert')">
                                <input type="radio" name="feedback_status" value="Terminiert"
                                    style="display: none;">Terminiert
                            </label>
                            <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Terminiert')">Terminiert</button> -->
                        </div>

                        <div id="Falsche Nummer" class="tabcontent">
                            <div class="mt-5">
                                <hr>
                                {{-- <div class="row">
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Bestätigungsstatus</span>
                                    </div>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Kontaktieren erwúnscht </span>
                                        <div class="mt-2">
                                            <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                                {{-- <div class="mt-4">
                                <span class="subtitleform">
                                    Bemerkung
                                </span>
                                <div class="mt-2">
                                    <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                                </div>
                            </div> --}}
                            </div>
                        </div>

                    </div>
                    <div id="Hat schon gewechselt" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Vertragdatum</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="date" name="vertragdatum" placeholder="" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                            <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Kein Interesse" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Krank" class="tabcontent">
                        <div class="mt-5">

                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Kunde bereits terminiert" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Nicht Brauchbar" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Nicht Erreicht" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Online-Offerte" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Später Anrufrn" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Anrufdatum</span>
                                    </div>
                                    <div class="mt-2">
                                        <input class="inputform" type="date" name="anrufdatum" placeholder="" />
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Zeit für Annrufe</span>
                                    </div>
                                    <div class="mt-2">
                                        <input class="inputform" type="number" name="zeitfuranrufen"
                                            placeholder="09:00" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <hr>
                            {{-- <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="mt-4">
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                             <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="bemerkung" placeholder="">
                            </div> 
                        </div> --}}
                        </div>
                    </div>

                    <div id="Terminiert" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Termindatum</span>
                                    </div>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" name="termindatum" placeholder="" />
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Terminzeit</span>
                                    </div>
                                    <div class="mt-2">

                                        <input class="inputform" type="text" name="terminzeit" placeholder="Ja" />
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mt-4">
                                    <span class="subtitleform">Wie lautet Ihr persönliche Geburtsdatum ...... und wie die
                                        Namen und Geburtsdaten Ihrer Familienangehörigen (Mitbewohner)?</span>
                                </div>
                                <div class="mt-2">

                                    <input class="inputformm" type="text" name="koment_der_geburtsdatum"
                                        placeholder="" />
                                </div>
                            </div>
                            <div>
                                <div class="mt-4">
                                    <span class="subtitleform">Falls 1 Person krank ist - Können Sie sich vorstellen, einen
                                        Teil Ihrer Familie zu versichern?</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="koment_der_Können" placeholder="Ja" />
                                </div>
                            </div>
                            <div class="mt-5">
                                <hr>
                                {{-- <div class="row">
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Bestätigungsstatus</span>
                                    </div>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" name="bestatigungs_status" placeholder="Intern" />
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Kontaktieren erwúnscht </span>
                                        <div class="mt-2">
                                            <input class="inputform" type="text" id="text" name="kontaktieren_erwunscht_2" placeholder="Ja">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="mt-2 ms-2" id="bestatigungs_status" style="display: none">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <input class="inputform mt-2" type="text" name="bestatigungs_status"
                                    placeholder="Intern" />
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="mt-2 me-2" id="kontaktieren_erwunscht_2" style="display: none">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                </div>
                                <input class="inputform mt-2" type="text" id="text"
                                    name="kontaktieren_erwunscht_2" placeholder="Ja">
                            </div>
                        </div>
                    </div>


                    <div class=" ms-2 me-3 py-2" id="bemerkungDiv" style="display: none">
                        <div class="mt-4">
                            <span class="subtitleform">Bemerkung </span>
                        </div>
                        <input class="inputform mt-2" type="text" id="text" name="bemerkung" placeholder="">
                    </div>

                    <div class=" d-flex justify-content-end mt-5 mt-md-5">
                        <button class="btn btn-outline-danger  me-3">Abbrechen</button>
                        <button class="btn btn-outline-success" type="submit">Speichern</button>
                    </div>
                </div>
            </div>
            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                    document.getElementById('bemerkungDiv').style.display = "block"
                    document.getElementById('bestatigungs_status').style.display = "block"
                    document.getElementById('kontaktieren_erwunscht_2').style.display = "block"

                }
            </script>

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
