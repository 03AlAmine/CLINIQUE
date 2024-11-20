<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->enum('sexe', ['Homme', 'Femme', 'Autre']);
            $table->string('telephone', 15)->nullable();
            $table->text('adresse')->nullable();
            $table->integer('age')->nullable();
            $table->enum('role', ['Directeur', 'Médecin', 'Patient']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
