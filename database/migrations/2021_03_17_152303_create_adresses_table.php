<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('rue', 45)->nullable();
            $table->string('numero', 45)->nullable();
            $table->string('boite', 45)->nullable();
            $table->string('code_postal', 45)->nullable();
            $table->string('commune', 45)->nullable();
            $table->string('tel_1', 45)->nullable();
            $table->string('tel_2', 45)->nullable();
            $table->timestamps(6);
            $table->integer('users_id')->index('fk_adresse_users1_idx');
            // $table->primary(['id', 'users_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
