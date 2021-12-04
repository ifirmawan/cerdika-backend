<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObediencePointInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('obedience_point', 'users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->smallInteger('obedience_point')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('obedience_point', 'users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('obedience_point');
            });
        }
    }
}
