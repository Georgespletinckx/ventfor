<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nom', 45);
            $table->string('circonference', 45)->nullable();
            $table->string('volume', 45)->nullable();
            $table->string('annee', 45)->nullable();
            $table->string('localisation', 45)->nullable();
            $table->string('qualité', 45)->nullable();
            $table->string('opegestion', 45)->nullable();
            $table->string('typeproduit', 45)->nullable();
            $table->string('modevente', 45)->nullable();
            $table->tinyInteger('certification')->nullable()->default(1);
            $table->timestamps(6);
            $table->string('disponible', 45)->nullable();
            $table->string('photo', 45)->nullable();
            $table->integer('types_bois_id')->index('fk_articles_types_bois_idx');
            $table->integer('users_id')->index('fk_articles_users1_idx');
            $table->integer('circonference_id')->index('fk_articles_circonference1_idx');
            $table->integer('volume_id')->index('fk_articles_volume1_idx');
            $table->integer('annee_id')->index('fk_articles_annee1_idx');
            $table->integer('qualite_id')->index('fk_articles_qualite1_idx');
            $table->integer('operation_gestion_id')->index('fk_articles_operation_gestion1_idx');
            $table->integer('type_produit_id')->index('fk_articles_type_produit1_idx');
            $table->integer('mode_vente_id')->index('fk_articles_mode_vente1_idx');
            $table->integer('essences_resineuses_idessences_resineuses')->index('fk_articles_essences_resineuses1_idx');
            // $table->primary(['id', 'types_bois_id', 'users_id', 'circonference_id', 'volume_id', 'annee_id', 'qualite_id', 'operation_gestion_id', 'type_produit_id', 'mode_vente_id', 'essences_resineuses_idessences_resineuses']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
