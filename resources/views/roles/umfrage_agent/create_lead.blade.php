@extends('layouts.app')
@section('content')
<form class="needs-validation" action="{{ route('create_lead') }}" method="POST" onkeydown="return event.key != 'Enter';" enctype="multipart/form-data" novalidate>
    @csrf

    <div class="mt-4 py-3 px-2">
        <span class="titlelead">Lead hinzufügen</span>
        <div class="bgform mt-4 p-4 p-md-5">
            <div class="row">
                <div class="col-4">
                    <div class="text-start">
                        <span class="titleform ">Person Information </span>
                        <div class="mt-2">
                            <hr style="width: 55%; border: 2px solid #00727A;" />
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="">
                        <span class="subtitleform">Vorname</span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="vorname" placeholder="Jane" />
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Anrede</span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="number" name="anrede" placeholder="Herr" min="1" max="9" />
                    </div>

                </div>
                <div class="col-4">
                    <div class="">
                        <span class="subtitleform">Nachname </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="nachname" placeholder="Jane" />
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Geburtsdatum </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="date" name="geburtsdatum" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4 mt-2">
                    <div class="text-start">
                        <span class="titleform ">Address Information </span>
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
                            <input type="text" name="adresse" class="inputgroupleft" placeholder="James Scar" aria-label="Username">
                            <input type="text" name="hause_nummer" class="inputgroupright" placeholder="Haus Nummer" aria-label="Haus Nummer">
                        </div>
                    </div>
                    <div class="mt-4 ">
                        <span class="subtitleform">Kanton</span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="kanton" placeholder="Kanton" />
                    </div>
                </div>
                <div class="col-4 mt-2">
                    <div class="">
                        <span class="subtitleform">Stadt </span>
                    </div>
                    <div class="mt-2">
                        <div class="d-flex mb-3 ">
                            <input type="text" name="plz" class="inputgroupleft" placeholder="PLZ" aria-label="Username">
                            <input type="text" name="stadt" class="inputgroupright" placeholder="Stadt" aria-label="stadt">
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Region</span>
                    </div>
                    <div class="mt-2 mb-4">
                        <input class="inputform" type="text" name="region" placeholder="Lorem" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4 mt-2">
                    <div class="text-start">
                        <span class="titleform ">Kontakt Information</span>
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
                            <input type="text" class="form-control inputnumber" placeholder="" aria-label="" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-2 mb-5 ">
                    <div class="">
                        <span class="subtitleform">Email </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="email" placeholder="janedoe@gmail.com">
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center mt-4">
                <span class="feedbacktitle">Sprachen</span><br>
                <div class=" mt-4 mb-4" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" 
                        id="btncheck1" hidden name="sprachen[]" value="AL" autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck1"> AL</label>

                    <input type="checkbox" class="btn-check" id="btncheck2"
                        hidden name="sprachen[]" value="DE"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck2">DE</label>

                    <input type="checkbox" class="btn-check" id="btncheck3"
                       hidden name="sprachen[]" value="EN"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck3">EN</label>

                    <input type="checkbox" class="btn-check" id="btncheck4"
                      hidden name="sprachen[]" value="FR"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck4">FR</label>

                    <input type="checkbox" class="btn-check" id="btncheck5"
                        hidden name="sprachen[]"
                        value="IT"autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck5">IT</label>

                    <input type="checkbox" class="btn-check" id="btncheck6"
                        hidden name="sprachen[]" value="HR"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck6">HR</label>

                    <input type="checkbox" class="btn-check" id="btncheck7"
                       hidden name="sprachen[]" value="PL"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck7">PL</label>

                    <input type="checkbox" class="btn-check" id="btncheck8"
                      hidden name="sprachen[]" value="PT"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck8">PT</label>

                    <input type="checkbox" class="btn-check" id="btncheck9"
                        hidden name="sprachen[]" value="SR"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck9">SR</label>

                    <input type="checkbox" class="btn-check" id="btncheck10"
                        hidden name="sprachen[]" value="ES"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck10">ES</label>

                    <input type="checkbox" class="btn-check" id="btncheck11"
                        hidden name="sprachen[]" value="TR"
                        autocomplete="off">
                    <label class="btn btn-outline-primary sprachengr" for="btncheck11">TR</label>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-2 mb-5">
                    <div class="">
                        <span class="subtitleform">Rechtsschutz </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="rechtsschutz" placeholder="Doe">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Gesundheitzustand </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="gesundheitzustand" placeholder="Herr">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Zufriedenheit</span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="zufriedenheit" placeholder="03.02.1999">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Erreichbarkeit </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="erreichbarkeit" placeholder="Herr">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">3.Säule </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="saule" placeholder="janedoe@gmail.com">
                    </div>
                </div>
                <div class="col-4 mt-2 mb-5">
                    <div class="">
                        <span class="subtitleform">Krankenkasse </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="krankenkasse" placeholder="German">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Sparen </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="sparen" placeholder="03.02.1999">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Anzahl personen </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="anzahl_personen" placeholder="German">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Hausrat </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="hausrat" placeholder="Jane">
                    </div>
                    <div class="mt-4">
                        <span class="subtitleform">Autoversicherung</span>
                    </div>
                    <div class="mt-2 ">
                        <input type="text" class="form-control inputnumber" placeholder="+41" aria-label="">
                    </div>
                </div>
                <div class="col-4 mt-2 mb-5">
                    <div class="">
                        <span class="subtitleform">Ansprechspartner </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="ansprechspartner" placeholder="03.02.1999">
                    </div>

                    <div class="mt-4">
                        <span class="subtitleform">Änderung bei KK </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="anderung" placeholder="Herr">
                    </div>

                    <div class="mt-4">
                        <span class="subtitleform">Arberistätig </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="arberistatig" placeholder="03.02.1999">
                    </div>
                    <div class="mt-4 ">
                        <span class="subtitleform">Gewünschte Beratung </span>
                    </div>
                    <div class="mt-2">
                        <input class="inputform" type="text" name="gewunschte_beratung" placeholder="03.02.1999">
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
                        <input class="inputform" type="text" name="kontaktieren_erwunscht" placeholder="German">
                    </div>
                </div>
                <div class="col-4 mt-2 mb-5 ">

                </div>
            </div>
            <div class="d-flex justify-content-end ">
                <button class="buttoninput">Lorem</button>
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
        }
    </script>
    
    @endsection