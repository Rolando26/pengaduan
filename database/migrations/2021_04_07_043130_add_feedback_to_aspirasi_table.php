<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeedbackToAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aspirasi', function (Blueprint $table) {
            $table->enum('feedback',['puas','tidakpuas'])->nullable()->after('aspirasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aspirasi', function (Blueprint $table) {
            Schema::dropIfExists('aspirasi');
        });
    }
}
