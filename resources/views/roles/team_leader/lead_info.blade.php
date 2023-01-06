@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('storeFeedBack', ['lead_id' => $lead->id]) }}" class="">
        @csrf
        <div class="">
            <div class="mt-4 py-4 ms-0 ms-md-1 me-0 me-md-2">
                <span class="titlelead">Lead hinzufügen</span>
                <div class="bgform mt-4 p-4 p-md-5">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="text-start">
                                <span class="titleform ">Informationen zur Person</span>
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
                                    placeholder="Max " />
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anrede</span>
                            </div>
                            <div class="mt-2 mb-3">
                                <select name="anrede" id="anrede" class="form-select inputform ">
                                    <option value="Herr">Herr</option>
                                    <option value="Frau">Frau</option>
                                </select>
                                <script>
                                    $("#anrede").val('{{ $lead->anrede }}').change()
                                </script>
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
                        <div class="col-12 col-md-4 mt-2 mb-2 mb-md-3">
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
                        <div class="col-12 col-md-4 mt-2 mb-2 mb-md-3">
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
                                <div class="mt-2">
                                    <select class="form-select selectinput" name="rechtsschutz" id="rechtsschutz"
                                        required>
                                        <option value=""></option>
                                        <option value="Allianz"> Allianz</option>
                                        <option value="Assista"> Assista</option>
                                        <option value="Axa-Arag Rechtsschutz"> Axa-Arag Rechtsschutz</option>
                                        <option value="Cap"> Cap</option>
                                        <option value="Coop"> Coop</option>
                                        <option value="Dextra Rechtsschutz"> Dextra Rechtsschutz</option>
                                        <option value="Die Mobiliar"> Die Mobiliar</option>
                                        <option value="Generali"> Generali</option>
                                        <option value="Keine"> Keine</option>
                                        <option value="Keine auskunft"> Keine auskunft</option>
                                        <option value="Orion"> Orion</option>
                                        <option value="Protekta Rechtsschutz"> Protekta Rechtsschutz</option>
                                        <option value="TCS"> TCS</option>
                                        <option value="Zürich"> Zürich</option>
                                    </select>
                                    <script>
                                        $("#rechtsschutz").val('{{ $lead->rechtsschutz }}').change();
                                    </script>

                                </div>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Ansprechspartner </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="ansprechspartner" id="ansprechspartner"
                                    required>
                                    <option value=""></option>
                                    <option value="Berater"> Berater</option>
                                    <option value="Familienkreis"> Familienkreis</option>
                                    <option value="Keine"> Keine</option>
                                </select>
                                <script>
                                    $("#ansprechspartner").val('{{ $lead->ansprechspartner }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform ">Zufriedenheit</span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="zufriedenheit" id="ZufriedenheitSelect"
                                    required>
                                    <option value=""></option>
                                    <option value="Nicht zufrieden"> Nicht zufrieden</option>
                                    <option value="Zufrieden"> Zufrieden</option>
                                </select>
                                <script>
                                    $("#ZufriedenheitSelect").val('{{ $lead->zufriedenheit }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform ">Erreichbarkeit </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="erreichbarkeit" id="ErreichbarkeitSelect"
                                    required>
                                    <option value=""></option>
                                    <option value="Abend"> Abend</option>
                                    <option value="Immer"> Immer</option>
                                    <option value="Mittag"> Mittag</option>
                                    <option value="Nachmittag"> Nachmittag</option>
                                    <option value="Unterschiedlich"> Unterschiedlich</option>
                                    <option value="Vormittag"> Vormittag</option>
                                </select>
                                <script>
                                    $("#ErreichbarkeitSelect").val('{{ $lead->erreichbarkeit }}').change();
                                </script>

                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Hausrat </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="hausrat" id="HausratSelect" required>
                                    <option value=""></option>
                                    <option value="Allianz"> Allianz</option>
                                    <option value="Appenzeller Versicherung"> Appenzeller Versicherung</option>
                                    <option value="Aquilana"> Aquilana</option>
                                    <option value="AXA"> AXA</option>
                                    <option value="Baloise"> Baloise</option>
                                    <option value="Basler"> Basler</option>
                                    <option value="Belmot">Belmot</option>
                                    <option value="CAP"> CAP</option>
                                    <option value="CSS Gruppe"> CSS Gruppe</option>
                                    <option value="DAS"> DAS</option>
                                    <option value="Die Mobiliar"> Die Mobiliar</option>
                                    <option value="Elvia">Elvia</option>
                                    <option value="Emmental Versicherung"> Emmentaler Versicherung</option>
                                    <option value="Epona"> Epona</option>
                                    <option value="Europe Assistance"> Europe Assistance</option>
                                    <option value="Europäische">Europäische</option>
                                    <option value="Fortuna">Fortuna</option>
                                    <option value="Galenos">Galenos</option>
                                    <option value="Generali"> Generali</option>
                                    <option value="Groupe Mutuel Gruppe"> Groupe Mutuel Gruppe</option>
                                    <option value="GVB"> GVB</option>
                                    <option value="Helsana Gruppe"> Helsana Gruppe</option>
                                    <option value="Helvetia">Helvetia</option>
                                    <option value="Keine"> Keine</option>
                                    <option value="Keine auskunft">Keine auskunft</option>
                                    <option value="Lloyd's">Lloyd's</option>
                                    <option value="Nationale Suisse"> Nationale Suisse</option>
                                    <option value="OCC"> OCC</option>
                                    <option value="Orion">Orion</option>
                                    <option value="Protekta">Protekta</option>
                                    <option value="Smile.direct"> Smile.direct</option>
                                    <option value="Solida"> Solida</option>
                                    <option value="Sympany">Sympany</option>
                                    <option value="TCS">TCS</option>
                                    <option value="Vaudoise"> Vaudoise</option>
                                    <option value="Visana"> Visana</option>
                                    <option value="Zürich"> Zürich</option>
                                    <option value="Zürich Connect">Zürich Connect</option>
                                </select>
                                <script>
                                    $("#HausratSelect").val('{{ $lead->hausrat }}').change();
                                </script>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Krankenkasse </span>
                            </div>

                            <div class="mt-2">
                                <select class="form-select selectinput" name="krankenkasse" id="krankenkasse" required>
                                    <option value=""></option>
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
                                <script>
                                    $("#krankenkasse").val('{{ $lead->krankenkasse }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Sparen </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="sparen" id="sparen" required>
                                    <option value=""></option>
                                    <option value="Ja"> Ja</option>
                                    <option value="Manchmal"> Manchmal</option>
                                    <option value="Nein"> Nein</option>
                                </select>
                                <script>
                                    $("#sparen").val('{{ $lead->sparen }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anzahl personen </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="anzahl_personen" id="AnzahlPersonenSelect"
                                    required>
                                    <option value=""></option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="6"> 6</option>
                                    <option value="7"> 7</option>
                                    <option value="8"> 8</option>
                                    <option value="9"> 9</option>
                                    <option value="10"> 10</option>
                                </select>
                                <script>
                                    $("#AnzahlPersonenSelect").val('{{ $lead->anzahl_personen }}').change();
                                </script>
                            </div>
                            <div class="mt-4 ">
                                <span class="subtitleform">Gewünschte Beratung </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="gewunschte_beratung"
                                    id="gewunschte_beratung">
                                    <option value="" selected></option>
                                    <option value="Berater (Persönlicher Termin)"> Berater (Persönlicher Termin)</option>
                                    <option value="Online (Digital via Mail & online Abschluss)">
                                        Online (Digital via Mail & online Abschluss)
                                    </option>
                                </select>
                                <script>
                                    $("#gewunschte_beratung").val('{{ $lead->gewunschte_beratung }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">3.Säule </span>
                            </div>
                            <div class="mt-2 mb-4">
                                <select class="form-select selectinput" name="saule" id="3SauleSelect" required>
                                    <option value=""></option>
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
                                <script>
                                    $("#3SauleSelect").val('{{ $lead->saule }}').change();
                                </script>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <span class="subtitleform">Gesundheitzustand </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="gesundheitzustand" id="gesundheitzustand"
                                    required>
                                    <option value=""></option>
                                    <option value="Gesund"> Gesund</option>
                                    <option value="Nicht Gesund"> Nicht Gesund</option>
                                </select>
                                <script>
                                    $("#gesundheitzustand").val('{{ $lead->gesundheitzustand }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Änderung bei KK </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="anderung" id="anderung" required>
                                    <option value=""></option>
                                    <option value="1 jahr"> 1 jahr</option>
                                    <option value="2 jahre"> 2 jahre</option>
                                    <option value="3 jahre oder mehr"> 3 jahre oder mehr</option>
                                    <option value="6 monate"> 6 monate</option>
                                    <option value="Nie"> Nie</option>
                                </select>
                                <script>
                                    $("#anderung").val('{{ $lead->anderung }}').change();
                                </script>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Arberistätig </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="arberistatig" id="ArbeitstatigSelect"
                                    required>
                                    <option value=""></option>
                                    <option value="Ja"> Ja</option>
                                    <option value="Nein"> Nein</option>
                                    <option value="Temporär"> Temporär</option>
                                </select>
                                <script>
                                    $("#ArbeitstatigSelect").val('{{ $lead->arberistatig }}').change();
                                </script>

                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Autoversicherung</span>
                            </div>
                            <div class="mt-2 ">
                                <select class="form-select selectinput" name="autoversicherung"
                                    id="AutoversicherungSelect" required>
                                    <option value=""></option>
                                    <option value="Allianz"> Allianz</option>
                                    <option value="Appenzeller Versicherung"> Appenzeller Versicherung</option>
                                    <option value="Aquilana"> Aquilana</option>
                                    <option value="Axa"> Axa</option>
                                    <option value="Baloise"> Baloise</option>
                                    <option value="Basler"> Basler</option>
                                    <option value="Belmot">Belmot</option>
                                    <option value="CAP"> CAP</option>
                                    <option value="Die Mobiliar"> Die Mobiliar</option>
                                    <option value="Elvia">Elvia</option>
                                    <option value="Emmentaler Versicherung"> Emmentaler Versicherung</option>
                                    <option value="Epona"> Epona</option>
                                    <option value="Europäische">Europäische</option>
                                    <option value="Europe Assistance"> Europe Assistance</option>
                                    <option value="Evasan"> Evasan</option>
                                    <option value="Fortuna">Fortuna</option>
                                    <option value="Galenos">Galenos</option>
                                    <option value="Generali"> Generali</option>
                                    <option value="GVB"> GVB</option>
                                    <option value="Helvetia">Helvetia</option>
                                    <option value="Keine"> Keine</option>
                                    <option value="Keine auskunft">Keine auskunft</option>
                                    <option value="Lloyd's">Lloyd's</option>
                                    <option value="Nationale Suisse"> Nationale Suisse</option>
                                    <option value="OCC"> OCC</option>
                                    <option value="Orion">Orion</option>
                                    <option value="Protecta">Protecta</option>
                                    <option value="Smile.direct"> Smile.direct</option>
                                    <option value="Solida"> Solida</option>
                                    <option value="Sympany">Sympany</option>
                                    <option value="TCS">TCS</option>
                                    <option value="Vaudoise"> Vaudoise</option>
                                    <option value="Zürich"> Zürich</option>
                                    <option value="Zürich Connect">Zürich Connect</option>
                                </select>
                                <script>
                                    $("#AutoversicherungSelect").val('{{ $lead->autoversicherung }}').change();
                                </script>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-4 mt-4">
                        </div>
                        <div class="col-12 col-md-4 mt-3 mb-4">
                            <div class="">
                                <span class="subtitleform ">Kontaktieren erwúnscht </span>
                            </div>
                            <div class="mt-2">
                                <select class="form-select selectinput" name="kontaktieren_erwunscht"
                                    id="kontaktieren_erwunscht" required>
                                    <option value=""></option>
                                    <option value="Ja"> Ja</option>
                                    <option value="Nein"> Nein</option>
                                </select>
                                <script>
                                    $("#kontaktieren_erwunscht").val('{{ $lead->kontaktieren_erwunscht }}').change();
                                </script>
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
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Kein Interesse')">
                                <input type="radio" name="feedback_status" value="Kein Interesse"
                                    style="display: none;"> Kein Interesse
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Krank')">
                                <input type="radio" name="feedback_status" value="Krank" style="display: none;">Krank
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Kunde bereits terminiert')">
                                <input type="radio" name="feedback_status" value="Kunde bereits terminiert"
                                    style="display: none;">Kunde bereits terminiert
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Nicht Brauchbar')">
                                <input type="radio" name="feedback_status" value="Nicht Brauchbar"
                                    style="display: none;">Nicht Brauchbar
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Nicht Erreicht')">
                                <input type="radio" name="feedback" value="Nicht Erreicht"
                                    style="display: none;">Nicht Erreicht
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Online-Offerte')">
                                <input type="radio" name="feedback_status" value="Online-Offerte"
                                    style="display: none;">Online-Offerte
                            </label>
                        </div>
                        <div class="col-auto">

                            <label class="tablinks" onclick="openCity(event, 'Später Anrufen')">
                                <input type="radio" name="feedback_status" value="Später Anrufen"
                                    style="display: none;">Später Anrufen
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="tablinks" onclick="openCity(event, 'Terminiert')">
                                <input type="radio" name="feedback_status" value="Terminiert"
                                    style="display: none;">Terminiert
                            </label>
                        </div>

                        <div id="Falsche Nummer" class="tabcontent">
                            <div class="mt-5">
                                <hr>

                            </div>
                        </div>
                    </div>
                    <div id="Hat schon gewechselt" class="tabcontent">
                        <div class="mt-5">
                            <hr>

                        </div>
                    </div>
                    <div id="Kein Interesse" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                        </div>
                    </div>
                    <div id="Krank" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                        </div>
                    </div>
                    <div id="Kunde bereits terminiert" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                        </div>
                    </div>
                    <div id="Nicht Brauchbar" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                        </div>
                    </div>
                    <div id="Nicht Erreicht" class="tabcontent">
                        <div class="mt-5">
                            <hr>
                        </div>
                    </div>
                    <div id="Online-Offerte" class="tabcontent">
                        <div class="mt-5">
                            <hr>
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
                                        <input class="inputform" type="date"
                                            value="@php echo isset($last_feedback->anrufdatum) ? $last_feedback->anrufdatum : '' @endphp"
                                            name="anrufdatum" placeholder="" />
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Zeit für Annrufe</span>
                                    </div>
                                    <div class="mt-2">
                                        <select name="zeitfuranrufen" id="zeitfuranrufeni"
                                            class="form-select inputform mt-2 ">
                                            <option value=""></option>
                                            <option value="08:00">
                                                08 : 00 </option>
                                            <option value="08:15">
                                                08 : 15 </option>
                                            <option value="08:30">
                                                08 : 30 </option>
                                            <option value="08:45">
                                                08 : 45 </option>
                                            <option value="09:00">
                                                09 : 00 </option>
                                            <option value="09:15">
                                                09 : 15 </option>
                                            <option value="09:30">
                                                09 : 30 </option>
                                            <option value="09:45">
                                                09 : 45 </option>
                                            <option value="10:00">
                                                10 : 00 </option>
                                            <option value="10:15">
                                                10 : 15 </option>
                                            <option value="10:30">
                                                10 : 30 </option>
                                            <option value="10:45">
                                                10 : 45 </option>
                                            <option value="11:00">
                                                11 : 00 </option>
                                            <option value="11:15">
                                                11 : 15 </option>
                                            <option value="11:30">
                                                11 : 30 </option>
                                            <option value="11:45">
                                                11 : 45 </option>
                                            <option value="12:00">
                                                12 : 00 </option>
                                            <option value="12:15">
                                                12 : 15 </option>
                                            <option value="12:30">
                                                12 : 30 </option>
                                            <option value="12:45">
                                                12 : 45 </option>
                                            <option value="13:00">
                                                13 : 00 </option>
                                            <option value="13:15">
                                                13 : 15 </option>
                                            <option value="13:30">
                                                13 : 30 </option>
                                            <option value="13:45">
                                                13 : 45 </option>
                                            <option value="14:00">
                                                14 : 00 </option>
                                            <option value="14:15">
                                                14 : 15 </option>
                                            <option value="14:30">
                                                14 : 30 </option>
                                            <option value="14:45">
                                                14 : 45 </option>
                                            <option value="15:00">
                                                15 : 00 </option>
                                            <option value="15:15">
                                                15 : 15 </option>
                                            <option value="15:30">
                                                15 : 30 </option>
                                            <option value="15:45">
                                                15 : 45 </option>
                                            <option value="16:00">
                                                16 : 00 </option>
                                            <option value="16:15">
                                                16 : 15 </option>
                                            <option value="16:30">
                                                16 : 30 </option>
                                            <option value="16:45">
                                                16 : 45 </option>
                                            <option value="17:00">
                                                17 : 00 </option>
                                            <option value="17:15">
                                                17 : 15 </option>
                                            <option value="17:30">
                                                17 : 30 </option>
                                            <option value="17:45">
                                                17 : 45 </option>
                                            <option value="18:00">
                                                18 : 00 </option>
                                            <option value="18:15">
                                                18 : 15 </option>
                                            <option value="18:30">
                                                18 : 30 </option>
                                            <option value="18:45">
                                                18 : 45 </option>
                                            <option value="19:00">
                                                19 : 00 </option>
                                            <option value="19:15">
                                                19 : 15 </option>
                                            <option value="19:30">
                                                19 : 30 </option>
                                            <option value="19:45">
                                                19 : 45 </option>
                                            <option value="20:00">
                                                20 : 00 </option>
                                            <option value="20:15">
                                                20 : 15 </option>
                                            <option value="20:30">
                                                20 : 30 </option>
                                            <option value="20:45">
                                                20 : 45 </option>
                                            <option value="21:00">
                                                21 : 00 </option>
                                            <option value="21:15">
                                                21 : 15 </option>
                                            <option value="21:30">
                                                21 : 30 </option>
                                            <option value="21:45">
                                                21 : 45 </option>
                                            <option value="22:00">
                                                22 : 00 </option>
                                        </select>
                                        <script>
                                            $("#zeitfuranrufeni").val('{{ isset($last_feedback->zeit_anrufe) ? $last_feedback->zeit_anrufe : '' }}').change();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <hr>
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
                                        <input class="inputform" type="date"
                                            value="{{ isset($last_feedback->termin_datum) && $last_feedback->termin_datum }}"
                                            name="termindatum" placeholder="" />
                                    </div>
                                </div>
                                <div class="col mb-3">
                                    <div class="mt-4">
                                        <span class="subtitleform">Terminzeit</span>
                                    </div>
                                    <div class="mt-2">
                                        <select name="terminzeit" id="terminzeit" class="form-select inputform mt-2 ">
                                            <option value=""></option>
                                            <option value="08:00">
                                                08 : 00 </option>
                                            <option value="08:15">
                                                08 : 15 </option>
                                            <option value="08:30">
                                                08 : 30 </option>
                                            <option value="08:45">
                                                08 : 45 </option>
                                            <option value="09:00">
                                                09 : 00 </option>
                                            <option value="09:15">
                                                09 : 15 </option>
                                            <option value="09:30">
                                                09 : 30 </option>
                                            <option value="09:45">
                                                09 : 45 </option>
                                            <option value="10:00">
                                                10 : 00 </option>
                                            <option value="10:15">
                                                10 : 15 </option>
                                            <option value="10:30">
                                                10 : 30 </option>
                                            <option value="10:45">
                                                10 : 45 </option>
                                            <option value="11:00">
                                                11 : 00 </option>
                                            <option value="11:15">
                                                11 : 15 </option>
                                            <option value="11:30">
                                                11 : 30 </option>
                                            <option value="11:45">
                                                11 : 45 </option>
                                            <option value="12:00">
                                                12 : 00 </option>
                                            <option value="12:15">
                                                12 : 15 </option>
                                            <option value="12:30">
                                                12 : 30 </option>
                                            <option value="12:45">
                                                12 : 45 </option>
                                            <option value="13:00">
                                                13 : 00 </option>
                                            <option value="13:15">
                                                13 : 15 </option>
                                            <option value="13:30">
                                                13 : 30 </option>
                                            <option value="13:45">
                                                13 : 45 </option>
                                            <option value="14:00">
                                                14 : 00 </option>
                                            <option value="14:15">
                                                14 : 15 </option>
                                            <option value="14:30">
                                                14 : 30 </option>
                                            <option value="14:45">
                                                14 : 45 </option>
                                            <option value="15:00">
                                                15 : 00 </option>
                                            <option value="15:15">
                                                15 : 15 </option>
                                            <option value="15:30">
                                                15 : 30 </option>
                                            <option value="15:45">
                                                15 : 45 </option>
                                            <option value="16:00">
                                                16 : 00 </option>
                                            <option value="16:15">
                                                16 : 15 </option>
                                            <option value="16:30">
                                                16 : 30 </option>
                                            <option value="16:45">
                                                16 : 45 </option>
                                            <option value="17:00">
                                                17 : 00 </option>
                                            <option value="17:15">
                                                17 : 15 </option>
                                            <option value="17:30">
                                                17 : 30 </option>
                                            <option value="17:45">
                                                17 : 45 </option>
                                            <option value="18:00">
                                                18 : 00 </option>
                                            <option value="18:15">
                                                18 : 15 </option>
                                            <option value="18:30">
                                                18 : 30 </option>
                                            <option value="18:45">
                                                18 : 45 </option>
                                            <option value="19:00">
                                                19 : 00 </option>
                                            <option value="19:15">
                                                19 : 15 </option>
                                            <option value="19:30">
                                                19 : 30 </option>
                                            <option value="19:45">
                                                19 : 45 </option>
                                            <option value="20:00">
                                                20 : 00 </option>
                                            <option value="20:15">
                                                20 : 15 </option>
                                            <option value="20:30">
                                                20 : 30 </option>
                                            <option value="20:45">
                                                20 : 45 </option>
                                            <option value="21:00">
                                                21 : 00 </option>
                                            <option value="21:15">
                                                21 : 15 </option>
                                            <option value="21:30">
                                                21 : 30 </option>
                                            <option value="21:45">
                                                21 : 45 </option>
                                            <option value="22:00">
                                                22 : 00 </option>
                                        </select>
                                        <script>
                                            $("#terminzeit").val('{{ isset($last_feedback->terminzeit) ?  $last_feedback->terminzeit : '' }}').change();
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mt-4">
                                    <span class="subtitleform">Wie lautet Ihr persönliche Geburtsdatum ...... und wie die
                                        Namen und Geburtsdaten Ihrer Familienangehörigen (Mitbewohner)?</span>
                                </div>
                                <div class="mt-2">
                                    <textarea name="koment_der_geburtsdatum"
                                        value="{{ isset($last_feedback->mitbewhoner) && $last_feedback->mitbewhoner }}" class="inputformm"
                                        id="" cols="30" rows="3">{{ isset($last_feedback->mitbewhoner) && $last_feedback->mitbewhoner }}</textarea>
                                    {{-- <input class="inputformm" type="text" name="koment_der_geburtsdatum"
                                        placeholder="" /> --}}
                                </div>
                            </div>
                            <div>
                                <div class="mt-4">
                                    <span class="subtitleform">Falls 1 Person krank ist - Können Sie sich vorstellen, einen
                                        Teil Ihrer Familie zu versichern?</span>
                                </div>
                                <div class="mt-2">
                                    <select name="koment_der_Konnen" id="koment_der_Konnen"
                                        class="form-select inputform mt-2 ">
                                        <option value="Ja">Ja</option>
                                        <option value="Nein">Nein</option>
                                    </select>
                                    <script>
                                        $("#koment_der_Konnen").val('{{ isset($last_feedback->person_krank) && $last_feedback->person_krank }}').change();
                                    </script>
                                </div>
                            </div>
                            <div class="mt-5">
                                <hr>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <div class="mt-2 ms-2" id="bestatigungs_status" style="display: none">
                                <div class="mt-4">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <select name="bestatigungs_status" id="besta" class="form-select inputform mt-2 ">
                                    <option value="Autoversicherung">Autoversicherung</option>
                                    <option value="Bestätigt">Bestätigt</option>
                                    <option value="Krankenkasse">Krankenkasse</option>
                                    <option value="Nicht bestätigt">Nicht bestätigt</option>
                                </select>
                                <script>
                                    $("#besta").val('{{ isset($last_feedback->bestatigungsstatus) && $last_feedback->bestatigungsstatus }}').change();
                                </script>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="mt-2 me-2" id="kontaktieren_erwunscht_2" style="display: none">
                                <div class="mt-4">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                </div>
                                <select name="kontaktieren_erwunscht_2" id="kontaktieren_erwunscht_2"
                                    class="form-select inputform mt-2">
                                    <option value="Ja">Ja</option>
                                    <option value="Nein">Nein</option>
                                </select>
                                <script>
                                    $("#kontaktieren_erwunscht_2").val('{{ $lead->kontaktieren_erwunscht }}').change();
                                </script>
                            </div>
                        </div>
                    </div>


                    <div class=" ms-2 me-3 py-2" id="bemerkungDiv" style="display: none">
                        <div class="mt-4">
                            <span class="subtitleform">Bemerkung </span>
                        </div>
                        <input class="inputform mt-2"
                            value="{{ isset($last_feedback->bemerkung) && $last_feedback->bemerkung }}" type="text"
                            id="text" name="bemerkung" placeholder="">
                    </div>

                    <div class="pull-right d-flex justify-content-end mt-5 mt-md-5">
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
                $(document).ready(function() {
                    const feedbackStatusInputs = document.querySelectorAll('input[name="feedback_status"]');

                    feedbackStatusInputs.forEach(input => {
                        if (input.value === '{{ $lead->feedback_status }}') {
                            input.click();
                        }
                    });
                })
            </script>

            <div>
                <h3> Lead History</p>
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th scope="col">#</th>

                                <th scope="col">Rückmeldung Status</th>
                                <th scope="col">Rückmeldung Von</th>
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
