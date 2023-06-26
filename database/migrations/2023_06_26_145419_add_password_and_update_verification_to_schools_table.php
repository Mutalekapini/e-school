<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->renameColumn('verification_letter', 'verification_letter_url');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->renameColumn('verification_letter_url', 'verification_letter');
        });
    }

};
