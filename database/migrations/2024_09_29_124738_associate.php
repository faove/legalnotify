<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('associates', function (Blueprint $table) {
            $table->increments('id');  // Asociado 
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('dni')->nullable()->unsigned(); //DNI
            $table->integer('nie')->nullable()->unsigned(); //NIE
            $table->integer('nif')->nullable()->unsigned(); //NIF
            $table->integer('passport')->nullable()->unsigned(); //PASAPORTE
            // $table->string('tution')->nullable(); //COLEGIARUTA
            // $table->integer('age')->nullable()->unsigned(); //EDAD
            $table->string('gender')->length(1)->nullable(); //GENERO
            $table->string('address')->nullable(); //DIRECION DOMICILIO
            $table->date('date_birth')->nullable(); //FECHA DE NACIMIEMNTO
            $table->date('date_begin')->nullable(); //FECHA DE ENTRADA A LA CONSULTORIO JURIDICO
            $table->string('email')->unique();
            $table->integer('civil_status_id')->nullable()->unsigned();
            $table->integer('country_id')->nullable()->unsigned();//NACIONALIDAD ID PAIS
            $table->string('social_networks')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone')->nullable(); //TELEFONO FIJO
            $table->string('phone_number', 45)->nullable(); //CELULAR
            $table->boolean('supervisor_status')->nullable(); //SUPERVISOR
            $table->integer('user_id')->nullable()->unsigned(); //user_id => id of table user
            $table->boolean('status')->nullable(); //Status
            // $table->integer('process_specialties_id')->nullable()->unsigned(); //ESPECIALIDADES POR PROCESSS   DIVORCIOS / FAMILIARES / ETC.
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('civil_status_id')->references('id')->on('civil_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associates');
    }
};