@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('storeFeedBackCA', ['lead_id' => $lead->id]) }}">
        @csrf
        <div class="">
            <div class="mt-4 py-4 ms-0 ms-md-1 me-0 me-md-2">
                <span class="titlelead">Lead hinzufügen</span>
                <div class="bgform mt-4 p-4 p-md-5">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="text-start">
                                <span class="titleform ">Informationen zur Person </span>
                                <div class="mt-2">
                                    <hr style="width: 55%; border: 2px solid #00727A;" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="">
                                <span class="subtitleform">Full Name</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->vorname }}" type="text" name="vorname "
                                    placeholder="Max" />
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anrede</span>
                            </div>
                            <div class="mt-2">
                                <select name="anrede" id="anrede" class="form-select inputform " id="">
                                    <option value="Herr">Herr</option>
                                    <option value="Frau">Frau</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="">
                                <span class="subtitleform">Nachname </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->nachname }}" type="text" name="nachname"
                                    placeholder="Mustermann" />
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
                                <span class="titleform ">Informationen zur Adresse </span>
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
                                        placeholder="Musterstraße" aria-label="Username">
                                    <input type="text" value="{{ $lead->hause_nummer }}" name="hause_nummer"
                                        class="inputgroupright" placeholder="Haus Nummer" aria-label="Haus Nummer">
                                </div>
                            </div>
                            <div class="mt-4 ">
                                <span class="subtitleform">Kanton</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" value="{{ $lead->kanton }}" type="text" name="kanton"
                                    placeholder="VD" />
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
                                    placeholder="Tessin (Italy) " />
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-4 mt-2">
                            <div class="text-start">
                                <span class="titleform ">Kontakt-Informationen</span>
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
                                    name="email" placeholder="Email">
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
                                    value="{{ $lead->rechtsschutz }}" name="rechtsschutz" placeholder="Allianz">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Ansprechspartner </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->ansprechspartner }}"
                                    name="ansprechspartner" placeholder="Berater">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Zufriedenheit</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->zufriedenheit }}"
                                    name="zufriedenheit" placeholder="Zufrieden">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Erreichbarkeit </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="number" value="{{ $lead->erreichbarkeit }}"
                                    name="erreichbarkeit" placeholder="10:00 : 11:00">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Hausrat </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->hausrat }}" name="hausrat"
                                    placeholder="TCS">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Krankenkasse </span>
                            </div>

                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->krankenkasse }}"
                                    name="krankenkasse" placeholder="Aquilana">

                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Sparen </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->sparen }}" name="sparen"
                                    placeholder="Nein">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anzahl personen </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="number" name="anzahl_personen"
                                    value="{{ $lead->anzahl_personen }}" placeholder="10">
                            </div>
                            <div class="mt-4 ">
                                <span class="subtitleform">Gewünschte Beratung </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->gewunschte_beratung }}"
                                    name="gewunschte_beratung" placeholder="Berater (Persönlicher Termin) ">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">3.Säule </span>
                            </div>
                            <div class="mt-2 mb-5">
                                <input class="inputform" type="text" value="{{ $lead->saule }}" name="saule"
                                    placeholder="Allianz">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Gesundheitzustand </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->gesundheitzustand }}"
                                    name="gesundheitzustand" placeholder="Nicht Gesund">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Änderung bei KK </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->anderung }}" name="anderung"
                                    placeholder="1 Jahr">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Arberistätig </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" value="{{ $lead->arberistatig }}"
                                    name="arberistatig" placeholder="Ja">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Autoversicherung</span>
                            </div>
                            <div class="mt-2 ">
                                <input type="text" class="form-control inputnumber"
                                    value="{{ $lead->autoversicherung }}" name="autoversicherung" placeholder="Zürich"
                                    aria-label="">
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
                                <input class="inputform" type="email" value="{{ $lead->kontaktieren_erwunscht }}"
                                    id="email" name="kontaktieren_erwunscht" placeholder="Ja">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mt-0 mt-md-2 mb-0 mb-md-5">
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mt-4">
                        <span class="feedbacktitle">Rückmeldung
                        </span><br>
                    </div>
                    <div class="row g-1 tab mt-4 ms-0 ms-md-0 px-3 px-md-3 d-flex justify-content-center">
                        <!-- <div class=""> -->
                            <div class="col-auto">
                                <label class="tablinks" onclick="openCity(event, 'Falsche Nummer')">
                                    <input type="radio" name="feedback_status_confirmation" value="declined"
                                        style="display: none;">Decline
                                </label>
                                <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Falsche Nummer')">Falsche Nummer</button> -->
                            </div>
                            <div class="col-auto">
                                <label class="tablinks" onclick="openCity(event, 'Hat schon gewechselt')">
                                    <input type="radio" name="feedback_status_confirmation" value="confirmed"
                                        style="display: none;">Confirm
                                </label>
                                <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Hat schon gewechselt')">Hat schon gewechselt</button> -->
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

                    <div id="Später Anrufen" class="tabcontent">
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

                    <div class="pull-right d-flex justify-content-end mt-5 mt-md-5">
                        <button class=" btn-outline-danger  me-3" type="button">Abbrechen</button>
                        <button class=" btn-outline-success" type="button">Speichern</button>
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

                    evt.currentTarget.className += " active";
                }
            </script>

            <div>
                <h3> Lead History</p>
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">Rückmeldung  Status</th>
                                <th scope="col">Rückmeldung   Von</th>
                                <th scope="col">Aktualisieren Bei</th>
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
