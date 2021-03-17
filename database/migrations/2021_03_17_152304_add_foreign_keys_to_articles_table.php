<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('annee_id', 'fk_articles_annee1')->references('id')->on('annees')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('circonference_id', 'fk_articles_circonference1')->references('id')->on('circonferences')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('essences_resineuses_idessences_resineuses', 'fk_articles_essences_resineuses1')->references('idessences_resineuses')->on('essences_resineuses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('mode_vente_id', 'fk_articles_mode_vente1')->references('id')->on('mode_ventes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('operation_gestion_id', 'fk_articles_operation_gestion1')->references('id')->on('operation_gestions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('qualite_id', 'fk_articles_qualite1')->references('id')->on('qualites')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('type_produit_id', 'fk_articles_type_produit1')->references('id')->on('type_produits')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('types_bois_id', 'fk_articles_types_bois')->references('id')->on('essences_feuillues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('users_id', 'fk_articles_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('volume_id', 'fk_articles_volume1')->references('id')->on('volumes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign('fk_articles_annee1');
            $table->dropForeign('fk_articles_circonference1');
            $table->dropForeign('fk_articles_essences_resineuses1');
            $table->dropForeign('fk_articles_mode_vente1');
            $table->dropForeign('fk_articles_operation_gestion1');
            $table->dropForeign('fk_articles_qualite1');
            $table->dropForeign('fk_articles_type_produit1');
            $table->dropForeign('fk_articles_types_bois');
            $table->dropForeign('fk_articles_users1');
            $table->dropForeign('fk_articles_volume1');
        });
    }
}
