<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleUriToCustomPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblCustomPages', function (Blueprint $table) {
            $table->string('title')->after('id')->default('');
            $table->string('uri')->unique()->after('title')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblCustomPages', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('uri');
        });
    }
}
