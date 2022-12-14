@extends('layouts.app')
@section('content')
    <form class="needs-validation" action="{{ route('searchLeads') }}" method="GET" onkeydown="return event.key != 'Enter';"
        enctype="multipart/form-data" novalidate>
        @csrf

        <div class="mt-4 py-4 ms-0 ms-md-1 me-0 me-md-2 ">
            <span class="titlelead">Lead hinzufügen</span>
            <div class="bgform mt-4 p-4 p-md-5">
                <div class="row">
                    <div class="col-4">
                        <div class="text-start">
                            <span class="titleform ">Informationen zur Person </span>
                            <div class="mt-2">
                                <hr style="width: 55%; border: 2px solid #00727A;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="">
                            <span class="subtitleform">Full Name</span>
                        </div>
                        <div class="mt-2">
                            <input class="inputform" type="text" name="vorname" placeholder="Max " />
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Anrede</span>
                        </div>
                        <div class="mt-2">
                            <select name="anrede[]" id="anrede" class="form-select inputform ">
                                <option value="Herr">Herr</option>
                                <option value="Frau">Frau</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-4">
                        <div class="">
                            <span class="subtitleform">Nachname </span>
                        </div>
                        <div class="mt-2">
                            <input class="inputform" type="text" name="nachname[]" placeholder="Mustermann" />
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Geburtsdatum </span>
                        </div>
                        <div class="mt-2">
                            <input class="inputform" type="date" name="geburtsdatum[]" />
                            <input class="inputform" hidden type="date" name="geburtsdatum[]" />
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 mt-2">
                        <div class="text-start">
                            <span class="titleform ">Informationen zur Adresse </span>
                            <div class="mt-2">
                                <hr style="width: 55%; border: 2px solid #00727A;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-2">
                        <div class="">
                            <span class="subtitleform">Adresse</span>
                        </div>
                        <div class="mt-2 ">
                            <div class="d-flex mb-3 ">
                                <input type="text" name="adresse[]" class="inputgroupleft" placeholder="Musterstraße"
                                    aria-label="Username">
                                <input type="text" name="hause_nummer[]" class="inputgroupright"
                                    placeholder="Haus Nummer" aria-label="Haus Nummer">
                            </div>
                        </div>
                        <div class="mt-4 ">
                            <span class="subtitleform">Kanton</span>
                        </div>
                        <div class="mt-2">
                            <input class="inputform" type="text" name="kanton[]" placeholder="Kanton" />
                        </div>
                    </div>
                    <div class="col-4 mt-2">
                        <div class="">
                            <span class="subtitleform">Stadt </span>
                        </div>
                        <div class="mt-2">
                            <div class="d-flex mb-3 ">
                                <input type="text" name="plz[]" class="inputgroupleft" placeholder="PLZ"
                                    aria-label="Username">
                                <input type="text" name="stadt[]" class="inputgroupright" placeholder="Stadt"
                                    aria-label="stadt">
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Region</span>
                        </div>
                        <div class="mt-2 mb-4">
                            <input class="inputform" type="text" name="region[]" placeholder="Lorem" />
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 mt-2">
                        <div class="text-start">
                            <span class="titleform ">Kontakt-Informationen</span>
                            <div class="mt-2">
                                <hr style="width: 55%; border: 2px solid #00727A;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-2 mb-5">
                        <div class="">
                            <span class="subtitleform">Handy Nummer</span>
                        </div>
                        <div class="mt-2 ">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">+41</span>
                                </div>
                                <input type="text" class="form-control inputnumber" placeholder=""
                                    name="handy_nummer[]" aria-label="" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-2 mb-5 ">
                        <div class="">
                            <span class="subtitleform">Email </span>
                        </div>
                        <div class="mt-2">
                            <input class="inputform" type="text" name="email[]" placeholder="janedoe@gmail.com">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="text-center mt-4">
                    <span class="feedbacktitle">Sprachen</span><br>
                    <div class=" mt-4 mb-4" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck1" hidden name="sprachen[]" value="AL"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck1"> AL</label>

                        <input type="checkbox" class="btn-check" id="btncheck2" hidden name="sprachen[]" value="DE"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck2">DE</label>

                        <input type="checkbox" class="btn-check" id="btncheck3" hidden name="sprachen[]" value="EN"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck3">EN</label>

                        <input type="checkbox" class="btn-check" id="btncheck4" hidden name="sprachen[]" value="FR"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck4">FR</label>

                        <input type="checkbox" class="btn-check" id="btncheck5" hidden name="sprachen[]"
                            value="IT"autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck5">IT</label>

                        <input type="checkbox" class="btn-check" id="btncheck6" hidden name="sprachen[]" value="HR"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck6">HR</label>

                        <input type="checkbox" class="btn-check" id="btncheck7" hidden name="sprachen[]" value="PL"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck7">PL</label>

                        <input type="checkbox" class="btn-check" id="btncheck8" hidden name="sprachen[]" value="PT"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck8">PT</label>

                        <input type="checkbox" class="btn-check" id="btncheck9" hidden name="sprachen[]" value="SR"
                            autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck9">SR</label>

                        <input type="checkbox" class="btn-check" id="btncheck10" hidden name="sprachen[]"
                            value="ES" autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck10">ES</label>

                        <input type="checkbox" class="btn-check" id="btncheck11" hidden name="sprachen[]"
                            value="TR" autocomplete="off">
                        <label class="btn btn-outline-primary sprachengr" for="btncheck11">TR</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mt-2 mb-5">
                        <div class="">
                            <span class="subtitleform">Rechtsschutz </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="rechtsschutz[]" required>
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
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Gesundheitzustand </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="gesundheitzustand[]" required>
                                <option value=""></option>
                                <option value="Gesund"> Gesund</option>
                                <option value="Nicht Gesund"> Nicht Gesund</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Zufriedenheit</span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="zufriedenheit[]" id="ZufriedenheitSelect" required>
                                <option value=""></option>
                                <option value="Nicht zufrieden"> Nicht zufrieden</option>
                                <option value="Zufrieden"> Zufrieden</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Erreichbarkeit </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="erreichbarkeit[]" id="ErreichbarkeitSelect" required>
                                <option value=""></option>
                                <option value="Abend"> Abend</option>
                                <option value="Immer"> Immer</option>
                                <option value="Mittag"> Mittag</option>
                                <option value="Nachmittag"> Nachmittag</option>
                                <option value="Unterschiedlich"> Unterschiedlich</option>
                                <option value="Vormittag"> Vormittag</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">3.Säule </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="saule[]" id="3SauleSelect" required>
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
                        </div>
                    </div>
                    <div class="col-4 mt-2 mb-5">
                        <div class="">
                            <span class="subtitleform">Krankenkasse </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="krankenkasse[]" required>
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
                                <option value="Mutuel Assurance (Groupe Mutuel)"> Mutuel Assurance (Groupe Mutuel)</option>
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
                        <div class="mt-4">
                            <span class="subtitleform">Sparen </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="sparen[]" id="SparenSelect" required>
                                <option value=""></option>
                                <option value="Ja"> Ja</option>
                                <option value="Manchmal"> Manchmal</option>
                                <option value="Nein"> Nein</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Anzahl personen </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="anzahl_personen[]" id="AnzahlPersonenSelect" required>
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
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Hausrat </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="hausrat[]" id="HausratSelect" required>
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
                        </div>
                        <div class="mt-4">
                            <span class="subtitleform">Autoversicherung</span>
                        </div>
                        <div class="mt-2 ">

                            <select class="form-select" name="autoversicherung[]" id="AutoversicherungSelect" required>
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
                        </div>
                    </div>
                    <div class="col-4 mt-2 mb-5">
                        <div class="">
                            <span class="subtitleform">Ansprechspartner </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="ansprechspartner[]" required>
                                <option value=""></option>
                                <option value="Berater"> Berater</option>
                                <option value="Familienkreis"> Familienkreis</option>
                                <option value="Keine"> Keine</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <span class="subtitleform">Änderung bei KK </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="anderung[]" required>
                                <option value=""></option>
                                <option value="1 jahr"> 1 jahr</option>
                                <option value="2 jahre"> 2 jahre</option>
                                <option value="3 jahre oder mehr"> 3 jahre oder mehr</option>
                                <option value="6 monate"> 6 monate</option>
                                <option value="Nie"> Nie</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <span class="subtitleform">Arberistätig </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="arberistatig[]" id="ArbeitstatigSelect" required>
                                <option value=""></option>
                                <option value="Ja"> Ja</option>
                                <option value="Nein"> Nein</option>
                                <option value="Temporär"> Temporär</option>
                            </select>
                        </div>
                        <div class="mt-4 ">
                            <span class="subtitleform">Gewünschte Beratung </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="gewunschte_beratung[]">
                                <option value="" selected></option>
                                <option value="Berater (Persönlicher Termin)"> Berater (Persönlicher Termin)</option>
                                <option value="Online (Digital via Mail & online Abschluss)">
                                    Online (Digital via Mail & online Abschluss)
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4 mt-2">
                    </div>
                    <div class="col-4 mt-3 mb-5">
                        <div class="">
                            <span class="subtitleform">Kontaktieren erwúnscht </span>
                        </div>
                        <div class="mt-2">

                            <select class="form-select" name="kontaktieren_erwunscht[]" required>
                                <option value=""></option>
                                <option value="Ja"> Ja</option>
                                <option value="Nein"> Nein</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4 mt-2 mb-5 ">

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
                            <input type="radio" name="feedback_status[]" value="Falsche Nummer"
                                style="display: none;"> Falsche Nummer
                        </label>
                        <!-- <button class="tablinks" type="button" onclick="openCity(event, 'Falsche Nummer')">Falsche Nummer</button> -->
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Hat schon gewechselt')">
                            <input type="radio" name="feedback_status[]" value="Hat schon gewechselt"
                                style="display: none;"> Hat schon gewechselt
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Kein Interesse')">
                            <input type="radio" name="feedback_status[]" value="Kein Interesse"
                                style="display: none;"> Kein Interesse
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Krank')">
                            <input type="radio" name="feedback_status[]" value="Krank" style="display: none;">Krank
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Kunde bereits terminiert')">
                            <input type="radio" name="feedback_status[]" value="Kunde bereits terminiert"
                                style="display: none;">Kunde bereits terminiert
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Nicht Brauchbar')">
                            <input type="radio" name="feedback_status[]" value="Nicht Brauchbar"
                                style="display: none;">Nicht Brauchbar
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Nicht Erreicht')">
                            <input type="radio" name="feedback_status[]" value="Nicht Erreicht"
                                style="display: none;">Nicht Erreicht
                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Online-Offerte')">
                            <input type="radio" name="feedback_status[]" value="Online-Offerte"
                                style="display: none;">Online-Offerte
                        </label>
                    </div>
                    <div class="col-auto">

                        <label class="tablinks" onclick="openCity(event, 'Später Anrufen')">
                            <input type="radio" name="feedback_status[]" value="Später Anrufen"
                                style="display: none;">Später Anrufen

                        </label>
                    </div>
                    <div class="col-auto">
                        <label class="tablinks" onclick="openCity(event, 'Terminiert')">
                            <input type="radio" name="feedback_status[]" value="Terminiert"
                                style="display: none;">Terminiert
                        </label>
                    </div>
                    <hr class="my-3">
                    <div class="d-flex justify-content-end my-3 ">
                        <button class="buttoninput">Search</button>
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
        @endsection
