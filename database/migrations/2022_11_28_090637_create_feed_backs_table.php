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
        Schema::create('feed_backs', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id');
            $table->string('user_id');
            $table->string('feedback')->nullable();
            $table->string('termin_datum')->nullable();
            $table->string('terminzeit')->nullable();
            $table->string('mitbewhoner')->nullable();
            $table->string('person_krank')->nullable();
            $table->string('vertragdatum')->nullable();
            $table->string('bestatigungsstatus')->nullable();
            $table->string('anrufdatum')->nullable();
            $table->string('zeit_anrufe')->nullable();

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
        Schema::dropIfExists('feed_backs');
    }
};
