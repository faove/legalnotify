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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');  // Clientes  Index 
            $table->string('name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('dni')->nullable()->unsigned(); //DNI
            $table->integer('nie')->nullable()->unsigned(); //NIC
            $table->integer('passport')->nullable(); //PASAPORTE
            $table->integer('age')->nullable(); //EDAD
            $table->string('gender', 1)->nullable(); //GENERO
            $table->string('address')->nullable(); //DIRECION DOMICILIO
            $table->date('date_birth')->nullable(); //FECHA DE NACIMIEMNTO
            $table->date('date_death')->nullable();
            $table->boolean('confirm_dead')->nullable()->default(0);
            $table->string('email')->nullable();
            $table->string('social_networks')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('telephone')->nullable(); //TELEFONO FIJO
            $table->string('phone_number', 45)->nullable();
            $table->string('registry')->nullable(); //REGISTRO
            $table->integer('civil_status_id')->nullable()->unsigned();
            $table->integer('country_id')->nullable()->unsigned();//NACIONALIDAD ID PAIS
            $table->integer('city_id')->nullable()->unsigned();
            $table->string('client_status_id', 3)->nullable();//Estado del Cliente A = Activo B= Baja 
            $table->json('dates_keys')->nullable(); //JSON que muestra las fechas claves 
            $table->json('data')->nullable(); //JSON para guardar value faltantes
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('civil_status_id')->references('id')->on('civil_status');
            $table->foreign('client_status_id')->references('id')->on('client_status');
            // $table->foreign('id')->references('client_id')->on('expedients');
            // $table->foreign('id')->references('client_id')->on('services');
            // client with service 1 -> N
            //$table->foreign('dni')->references('client_id')->on('services')->onDelete('cascade');
            // $table->foreign('city_id')->references('id')->on('cities');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};