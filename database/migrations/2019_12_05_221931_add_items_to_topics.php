<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItemsToTopics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('topics', function (Blueprint $table) {
            $table->string('match_id')->nullable();
            $table->string('match_time')->nullable();
            $table->string('match_result')->nullable();
            $table->string('suggest_result')->nullable();
            $table->string('win')->nullable();
            $table->string('draw')->nullable();
            $table->string('lose')->nullable();
            $table->string('match_round')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('topics', function (Blueprint $table) {

            $table->dropColumn('match_id');
            $table->dropColumn('match_time');
            $table->dropColumn('match_result');
            $table->dropColumn('suggest_result');
            $table->dropColumn('win');
            $table->dropColumn('draw');
            $table->dropColumn('lose');
            $table->dropColumn('match_round');

        });
    }
}
