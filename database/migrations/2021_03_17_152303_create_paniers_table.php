<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('article', 45)->nullable();
            $table->string('fournisseur', 45)->nullable();
            $table->string('propriétaire', 45)->nullable();
            $table->string('client', 45)->nullable();
            $table->timestamps(6);
            $table->integer('users_id')->index('fk_panier_users1_idx');
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
        Schema::dropIfExists('paniers');
    }
}
