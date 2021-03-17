<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('client', 45)->nullable();
            $table->string('fournisseur', 45)->nullable();
            $table->string('propriétaire', 45)->nullable();
            $table->timestamps(6);
            $table->decimal('prix', 2, 0)->nullable();
            $table->integer('users_id')->index('fk_factures_users1_idx');
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
        Schema::dropIfExists('factures');
    }
}
