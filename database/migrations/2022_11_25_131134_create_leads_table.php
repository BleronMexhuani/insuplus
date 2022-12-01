<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->integer('assign_to_id_team_leader')->nullable();
            $table->integer('assign_to_id_call')->nullable();
            $table->integer('assigned_from')->nullable();
            $table->integer('completed')->default(0);
            $table->string('kampagne')->nullable();
            $table->string('anrede')->nullable();
            $table->string('vorname')->nullable();
            $table->string('nachname')->nullable();
            $table->string('geburtsdatum')->nullable();
            $table->string('handy_nummer')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();
            $table->string('stadt')->nullable();
            $table->string('kanton')->nullable();
            $table->string('region')->nullable();
            $table->string('sprachen')->nullable();
            $table->string('autoversicherung')->nullable();
            $table->string('saule')->nullable();
            $table->string('hausrat')->nullable();
            $table->string('rechtsschutz')->nullable();
            $table->string('gesundheitszustand')->nullable();
            $table->string('ansprechspartner')->nullable();
            $table->string('krankenkasse')->nullable();
            $table->string('sparen')->nullable();
            $table->string('anderung')->nullable();
            $table->string('zufriedenheit')->nullable();
            $table->string('anzahl_personen')->nullable();
            $table->string('arbeitstatig')->nullable();
            $table->string('erreichbarkeit')->nullable();
            $table->string('gewunschte_beratung')->nullable();
            $table->string('erreichbarkeit_hour')->nullable();
            $table->string('jahrlichearztkosten')->nullable();
            $table->string('krankenkassenpramiemonatlichCHF')->nullable();
            $table->string('anschprechspartner')->nullable();
            $table->string('hypotek')->nullable();
            $table->string('steuer')->nullable();
            $table->string('sindsiearbeitstatig')->nullable();
            $table->string('habensieeinenkredit')->nullable();
            $table->string('sypotek')->nullable();
            $table->string('pramieim_jahr')->nullable();
            $table->string('optin')->nullable();
            $table->string('beruf')->nullable();
            $table->string('kontaktieren_erwunscht')->nullable();
            $table->string('bemerkung')->nullable();
           
            $table->string('feedback_status')->default('pending');
            $table->string('feedback_status_quality_check')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
};
