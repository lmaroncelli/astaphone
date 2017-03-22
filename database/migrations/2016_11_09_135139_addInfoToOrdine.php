<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToOrdine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblOrdini', function (Blueprint $table) {
            $table->string('indirizzo_fatturazione')->nullable()->default('')->after('totale');
            $table->string('citta_fatturazione')->nullable()->default('')->after('indirizzo_fatturazione');
            $table->string('cap_fatturazione')->nullable()->default('')->after('citta_fatturazione');
            $table->string('provincia_fatturazione')->nullable()->default('')->after('cap_fatturazione');
            $table->string('indirizzo_spedizione')->nullable()->default('')->after('provincia_fatturazione');
            $table->string('citta_spedizione')->nullable()->default('')->after('indirizzo_spedizione');
            $table->string('cap_spedizione')->nullable()->default('')->after('citta_spedizione');
            $table->string('provincia_spedizione')->nullable()->default('')->after('cap_spedizione');
            $table->string('stripe_payment_id')->nullable()->default(null)->after('note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblOrdini', function (Blueprint $table) {
            $table->dropColumn(['indirizzo_fatturazione', 'citta_fatturazione', 'cap_fatturazione', 'provincia_fatturazione']);
            $table->dropColumn(['indirizzo_spedizione', 'citta_spedizione', 'cap_spedizione', 'provincia_spedizione','stripe_payment_id']);
        });
    }
}
