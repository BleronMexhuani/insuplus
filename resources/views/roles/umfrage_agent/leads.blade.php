@extends('layouts.app')
@section('content')
    <form class="needs-validation" action="{{ route('create_lead') }}" method="POST" onkeydown="return event.key != 'Enter';" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="col ms-5 px-5">
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
                                <input class="inputform" type="text" name="vorname" placeholder="Jane" /></input>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anrede</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="number" id="tentacles" name="tentacles" placeholder="Herr" min="1" max="9" />
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Sprache</span>
                            </div>
                            <div class="mt-2 mb-4">
                                <input class="inputform" type="text" name="sprache" placeholder="German" /></input>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="">
                                <span class="subtitleform">Nachname </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="text" name="nachname" placeholder="Jane" /></input>
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Geburtsdatum </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="date" id="birthday" name="birthday" />
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
                                <input class="inputform" type="text" name="kanton" placeholder="Kanton" /></input>
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
                                <input class="inputform" type="text" name="region" placeholder="Lorem" /></input>
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
                                <input class="inputform" type="email" id="email" name="email" placeholder="janedoe@gmail.com">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mt-4">
                        <span class="feedbacktitle">Sprachen</span><br>
                        <div class="btn-group-toggle mt-4 mb-4" data-toggle="buttons">
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="AL"> AL </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="" value="DE" checked> DE </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="EN"> EN </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="FR"> FR </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="IT"> IT </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="HR"> HR </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="PL"> PL </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="PT"> PT </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="SR"> SR </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="ES"> ES </label>
                            <label class="btn btn-outline-info btnsprachen">
                                <input type="checkbox" hidden name="sprachen[]" class="form-control" value="TR"> TR </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4  ">
                        </div>
                        <div class="col-4 mt-4 mb-5">
                            <div class="">
                                <span class="subtitleform">Autoversicherung</span>
                            </div>
                            <div class="mt-2 ">
                                <input type="text" class="form-control inputnumber" placeholder="+41" aria-label="">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Hausrat </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="hausrat" placeholder="Jane">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Gesundheitzustand </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="gesundheitzustand" placeholder="Herr">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Krankenkasse </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="krankenkasse" placeholder="German">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Änderung bei KK </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="anderung" placeholder="Herr">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Anzahl personen </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="anzahl" placeholder="German">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Erreichbarkeit </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="erreichbarkeit" placeholder="Herr">
                            </div>
                        </div>
                        <div class="col-4 mt-4 mb-5">
                            <div class="">
                                <span class="subtitleform">3.Säule </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="saule" placeholder="janedoe@gmail.com">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Rechtsschutz </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="rechtsschutz " placeholder="Doe">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Ansprechspartner </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="ansprechspartner" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Sparen </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="sparen" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Zufriedenheit</span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="zufriedenheit" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4">
                                <span class="subtitleform">Arberistätig </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="arberistätig" placeholder="03.02.1999">
                            </div>
                            <div class="mt-4 ">
                                <span class="subtitleform">Gewünschte Beratung </span>
                            </div>
                            <div class="mt-2">
                                <input class="inputform" type="email" id="email" name="gewünschte" placeholder="03.02.1999">
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
                                <input class="inputform" type="email" id="email" name="kontaktieren" placeholder="German">
                            </div>
                        </div>
                        <div class="col-4 mt-2 mb-5 ">
    
                        </div>
                    </div>
                    <hr>
                    <div class="text-center mt-4">
                        <span class="feedbacktitle">Feedback</span><br>
                        <div class="btn-group-toggle mt-4 mb-5" data-toggle="buttons" id="feedback">
                            <label class="btn btn-outline-info feedbackbtn" id="falschenummerlabel" onclick="falschenummer()">
                                <input type="radio" hidden name="feedback" value="Falsche Nummer" id="falschenummer"> Falsche Nummer
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" onclick="hatschongechselt()" id="hatschogewechseltlabel">
                                <input type="radio" hidden name="feedback" value="Hat schon gewechselt" id="hatschogewechselt"> Hat schon gewechselt
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" id="keininteresselabel" onclick="keininteresse()">
                                <input type="radio" hidden name="feedback" value="Kein Interesse" id="keininteresse"> Kein Interesse
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" id="kranklabel" onclick="krank()">
                                <input type="radio" hidden name="feedback" value="Krank" id="krank"> Krank
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" id="kundebereitsterminiertlabel" onclick="kundebereitsterminiert()">
                                <input type="radio" hidden name="feedback" value="Kunde bereits terminiert" id="kundebereitsterminiert"> Kunde bereits terminiert
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" id="nichtbrauchbarlabel" onclick="nichtbrauchbar()">
                                <input type="radio" hidden name="feedback" value="Nicht Brauchbar" id="nichtbrauchbar"> Nicht Brauchbar
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" id="nichterreichtlabel" onclick="nichterreicht()">
                                <input type="radio" hidden name="feedback" value="Nicht erreicht" id="nichterreicht"> Nicht erreicht
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" id="onlineoffertelabel" onclick="onlineofferte()">
                                <input type="radio" hidden name="feedback" value="Online-Offerte" id="onlineofferte"> Online-Offerte
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" onclick="spateranrufen()" id="spateranrufenlabel">
                                <input type="radio" hidden name="feedback" value="Später Anrufen" id="spateranrufen"> Später Anrufen
                            </label>
                            <label class="btn btn-outline-info feedbackbtn" onclick="terminiert()" id="terminiertlabel">
                                <input type="radio" hidden name="feedback" value="Terminiert" id="terminiert"> Terminiert
                            </label>
                        </div>
                        <div class="pull-right d-flex justify-content-end mt-3">
                            <button class="btn btn-outline-danger me-3">Abbrechen</button>
                            <button class="btn btn-outline-success" type="submit" name="submitted">Speichern</button>
                        </div>
                    </div>
                    <div class="form-row" id="hatschongechseltselect">
                        <div class="col-md-6 mb-4">
                        </div>
                    </div>
                    <section id="spateranrufenselect">
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="">Anrufdatum</label>
                                <input type="date" class="form-control" min="2022-11-30" name="Anrufdatum" />
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="">Zeit für Anrufe</label>
                                <select class="custom-select" name="Zeitfuranrufen">
                                    <option value=""></option>
                                    <option value="08:00">
                                        08 : 00 </option>
                                    <option value="08:15">
                                        08 : 15 </option>
    
                                </select>
                            </div>
                        </div>
                        <hr>
                    </section>
                    <section id="terminiertselect">
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="">Termindatum</label>
                                <input type="date" class="form-control" min="2022-11-30" name="Termindatum" id="termindatumrequired" />
                            </div>
    
                            <div class="col-md-6 mb-4">
                                <label for="">Terminzeit</label>
                                <select class="custom-select" name="Terminzeit" id="terminzeitrequired">
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
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-4">
                                <label for="">Wie lautet Ihr persönliche Geburtsdatum ...... und wie die Namen und Geburtsdaten Ihrer Familienangehörigen (Mitbewohner)?</label>
                                <textarea name="terminiertTextbox" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-md-6 mb-4">
                                <br>
                                <label for="">Falls 1 Person krank ist - Können Sie sich vorstellen, einen Teil Ihrer Familie zu versichern?</label>
                                <select name="terminiertSelectFalls" class="custom-select" id="">
                                    <option value="" disabled selected>Nothing Selected</option>
                                    <option value="Ja">Ja</option>
                                    <option value="Nein">Nein</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <div id="falseNr" style="display: none;">
                        <hr>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="mt-4" id="Bestatigungsstatusselectttt">
                                    <span class="subtitleform">Bestätigungsstatus</span>
                                </div>
                                <div class="mt-2">
                                    <input class="inputform" type="text" name="bestätigungsstatus" placeholder="Intern" /></input>
                                </div>
                                <script type="text/javascript">
                                    $('#Bestatigungsstatusselectttt').val('Bestätigt').change();
                                </script>
    
                            </div>
                            <div class="col mb-3">
                                <div class="mt-4" id="KontaktierenErwunschtSelect">
                                    <span class="subtitleform">Kontaktieren erwúnscht </span>
                                    <div class="mt-2">
                                        <input class="inputform" type="text" id="text" name="kontaktieren" placeholder="Ja">
                                    </div>
                                    <script type="text/javascript">
                                        $('#KontaktierenErwunschtSelectt').val('Ja').change();
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="subtitleform">
                                Bemerkung
                            </span>
                            <div class="mt-2">
                                <input class="inputform" type="text" id="text" name="kontaktieren" placeholder="Ja">
                            </div>
                        </div>
                        <div class="pull-right d-flex justify-content-end mt-3">
                            <button class="btn btn-outline-danger  me-3">Abbrechen</button>
                            <button class="btn btn-outline-success" type="submit" name="submitted">Speichern</button>
                        </div>
                    </div>
                    <script>
                        // $('.feedbackbtn').on("click", function() {
                        //     let all_feedbackbtn = $('.feedbackbtn');
                        //     for (let i = 0; i < all_feedbackbtn.length; i++) {
                        //         all_feedbackbtn[i].classList.remove('active');
                        //     }
                        //     $(this).addClass('active');
                        // })
    
    
    
                        document.getElementById("hatschongechseltselect").style.display = 'none';
                        document.getElementById("spateranrufenselect").style.display = 'none';
                        document.getElementById("terminiertselect").style.display = 'none';
                        document.getElementById("leadhistorietable").style.display = 'none';
    
                        var leadhistorietest = false;
                        var hatschongechselttest = false;
                        var spateranrufentest = false;
                        var terminierttest = false;
    
                        var falschenummertest = false;
                        var keininteressetest = false;
                        var kranktest = false;
                        var kundebereitsterminierttest = false;
                        var nichtbrauchbartest = false;
                        var nichterreichttest = false;
                        var onlineoffertetest = false;
    
                        function onlineofferte() {
                            if (onlineoffertetest) {
                                document.getElementById("onlineofferte").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                onlineoffertetest = false;
    
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminiert = false;
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            } else {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                //document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                //$('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                onlineoffertetest = true;
    
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            }
                        }
    
                        function nichterreicht() {
                            if (nichterreichttest) {
                                document.getElementById("nichterreicht").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                nichterreichttest = false;
    
                                nichtbrauchbartest = false;
                                kundebereitsterminiert = false;
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
                                onlineoffertetest = false;
                            } else {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                //document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                //$('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                nichterreichttest = true;
    
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
                                onlineoffertetest = false;
                            }
                        }
    
                        function nichtbrauchbar() {
                            if (nichtbrauchbartest) {
                                document.getElementById("nichtbrauchbar").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                nichtbrauchbartest = false;
    
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                            } else {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                //document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                //$('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                nichtbrauchbartest = true;
    
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                            }
                        }
    
                        function kundebereitsterminiert() {
                            if (kundebereitsterminierttest) {
                                document.getElementById("kundebereitsterminiert").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                kundebereitsterminierttest = false;
    
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                            } else {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                //document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                //$('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                kundebereitsterminierttest = true;
    
                                kranktest = false;
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                            }
                        }
    
                        function krank() {
                            if (kranktest) {
                                document.getElementById("krank").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                kranktest = false;
    
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                            } else {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                //document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                //$('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                kranktest = true;
    
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
                                keininteressetest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                            }
                        }
    
                        function keininteresse() {
                            if (keininteressetest) {
                                document.getElementById("keininteresse").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                keininteressetest = false;
    
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                            } else {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                //document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                //$('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                keininteressetest = true;
    
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
    
                                falschenummertest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                            }
                        }
    
                        function falschenummer() {
                            if (falschenummertest) {
                                document.getElementById("falschenummer").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                falschenummertest = false;
    
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                keininteressetest = false;
    
                            } else {
    
                                document.getElementById("falseNr").style.display = 'block';
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = true;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
                                //$('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                falschenummertest = true;
    
                                hatschongechselttest = false;
                                spateranrufentest = false;
                                terminierttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                keininteressetest = false;
                            }
                        }
    
                        function leadhistorie() {
                            if (leadhistorietest) {
                                document.getElementById("leadhistorietable").style.display = 'none';
                                leadhistorietest = false;
                            } else {
                                document.getElementById("leadhistorietable").style.display = 'block';
                                document.getElementById("falseNr").style.display = 'none';
    
                                leadhistorietest = true;
                            }
                        }
    
                        function hatschongechselt() {
                            //alert($('input[id="hatschogewechselt"]').is(':checked'));
                            //if($('input[id="hatschogewechselt"]').is(':checked')){
                            if (hatschongechselttest) {
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                hatschongechselttest = false;
    
                                spateranrufentest = false;
                                terminierttest = false;
                                falschenummertest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                keininteressetest = false;
                            } else {
                                document.getElementById('spateranrufen').checked = false;
                                //uncheck everything
                                //end of uncheck
                                document.getElementById("hatschongechseltselect").style.display = 'block';
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("falseNr").style.display = 'none';
    
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                //document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                //$('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
    
                                hatschongechselttest = true;
    
                                spateranrufentest = false;
                                terminierttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            }
                            //}
                        }
    
                        function spateranrufen() {
                            if (spateranrufentest) {
                                document.getElementById("spateranrufenselect").style.display = 'none';
                                spateranrufentest = false;
                                hatschongechselttest = false;
                                terminierttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            } else {
                                document.getElementById('hatschogewechselt').checked = false;
                                //uncheck everything
                                //end of uncheck
                                document.getElementById("spateranrufenselect").style.display = 'block';
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                //document.getElementById("spateranrufen").checked = false;
                                document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                //$('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                $('#terminiertlabel').attr("class", "btn btn-outline-info");
                                spateranrufentest = true;
    
                                hatschongechselttest = false;
                                terminierttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            }
                        }
    
                        function terminiert() {
                            if (terminierttest) {
                                document.getElementById("terminiertselect").style.display = 'none';
                                document.getElementById("termindatumrequired").required = false;
                                document.getElementById("terminzeitrequired").required = false;
                                document.getElementById("strasserequired").required = false;
                                document.getElementById("hausnummerrequired").required = false;
                                terminierttest = false;
                                spateranrufentest = false;
                                hatschongechselttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            } else {
                                document.getElementById('hatschogewechselt').checked = false;
                                //uncheck everything
                                //end of uncheck
                                document.getElementById("terminiertselect").style.display = 'block';
                                document.getElementById("termindatumrequired").required = true;
                                document.getElementById("terminzeitrequired").required = true;
                                document.getElementById("strasserequired").required = true;
                                document.getElementById("hausnummerrequired").required = true;
                                document.getElementById("hatschongechseltselect").style.display = 'none';
                                document.getElementById("spateranrufenselect").style.display = 'none';
    
                                document.getElementById("falschenummer").checked = false;
                                document.getElementById("hatschogewechselt").checked = false;
                                document.getElementById("keininteresse").checked = false;
                                document.getElementById("krank").checked = false;
                                document.getElementById("kundebereitsterminiert").checked = false;
                                document.getElementById("nichtbrauchbar").checked = false;
                                document.getElementById("nichterreicht").checked = false;
                                document.getElementById("onlineofferte").checked = false;
                                document.getElementById("spateranrufen").checked = false;
                                //document.getElementById("terminiert").checked = false;
    
                                $('#falschenummerlabel').attr("class", "btn btn-outline-info");
                                $('#hatschogewechseltlabel').attr("class", "btn btn-outline-info");
                                $('#keininteresselabel').attr("class", "btn btn-outline-info");
                                $('#kranklabel').attr("class", "btn btn-outline-info");
                                $('#kundebereitsterminiertlabel').attr("class", "btn btn-outline-info");
                                $('#nichtbrauchbarlabel').attr("class", "btn btn-outline-info");
                                $('#nichterreichtlabel').attr("class", "btn btn-outline-info");
                                $('#onlineoffertelabel').attr("class", "btn btn-outline-info");
                                $('#spateranrufenlabel').attr("class", "btn btn-outline-info");
                                //$('#terminiertlabel').attr("class", "btn btn-outline-info");
    
                                terminierttest = true;
    
                                spateranrufentest = false;
                                hatschongechselttest = false;
    
                                onlineoffertetest = false;
                                nichterreichttest = false;
                                nichtbrauchbartest = false;
                                kundebereitsterminierttest = false;
                                kranktest = false;
                                falschenummertest = false;
                                keininteressetest = false;
                            }
                        }
                    </script> <br><br>
                    <!-- <div class="pull-right">
                     <button class="btn btn-outline-danger" onclick="window.location.href='leads.php'">Abbrechen</button>
                     <button class="btn btn-outline-success" type="submit" name="submitted">Speichern</button>
                    </div> -->
                    </form>
    
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        document.getElementById("Bestatigungsstatusselectttt").disabled = true;
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
            </div>
           
        </div>
           
    </form>


@endsection