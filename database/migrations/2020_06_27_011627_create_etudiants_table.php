<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cycle_id')->unsigned();
            $table->bigInteger('filiere_id')->unsigned();
            $table->string('nationalite_id');
            $table->string('anneeUniversitaire_id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('matricule');
            $table->date('dateNaissance');
            $table->string('lieuNaissance');
            $table->string('email');
            $table->integer('numero');
            $table->string('photo');


            $table->foreign('cycle_id')
            ->references('id')
            ->on('cycles')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('filiere_id')
            ->references('id')
            ->on('filieres')
            ->onDelete('restrict')
            ->onUpdate('restrict');


           
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
        Schema::dropIfExists('etudiants');
    }
}
