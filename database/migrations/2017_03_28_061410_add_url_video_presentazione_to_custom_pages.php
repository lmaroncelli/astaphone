<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlVideoPresentazioneToCustomPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tblCustomPages', function (Blueprint $table) {
            $table->string('url_video_presentazione')->after('video_presentazione_slide_id')->default('');
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
            $table->dropColumn('url_video_presentazione');
        });
    }
}
