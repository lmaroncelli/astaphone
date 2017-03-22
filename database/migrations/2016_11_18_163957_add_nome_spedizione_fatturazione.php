<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNomeSpedizioneFatturazione extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nome_fatturazione')->nullable()->default('')->after('cap');
            $table->string('nome_spedizione')->nullable()->default('')->after('provincia_fatturazione');
        });

        Schema::table('tblOrdini', function (Blueprint $table) {
            $table->string('nome_fatturazione')->nullable()->default('')->after('totale');
            $table->string('nome_spedizione')->nullable()->default('')->after('provincia_fatturazione');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['nome_fatturazione', 'nome_spedizione']);
        });

        Schema::table('tblOrdini', function (Blueprint $table) {
            $table->dropColumn(['nome_fatturazione', 'nome_spedizione']);
        });
    }
}
