<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('freelancer_comment', function (Blueprint $table) {
            $table->unsignedBigInteger('job_title_id')->nullable()->after('status');
            $table->foreign('job_title_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('freelancer_comment', function (Blueprint $table) {
            //
        });
    }
};
