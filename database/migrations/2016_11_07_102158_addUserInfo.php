<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('indirizzo')->nullable()->default('')->after('password');
            $table->string('citta')->nullable()->default('')->after('indirizzo');
            $table->string('cap')->nullable()->default('')->after('citta');
            $table->string('provincia')->nullable()->default('')->after('cap');
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
            $table->dropColumn(['indirizzo', 'citta', 'cap', 'provincia']);
        });
    }
}
