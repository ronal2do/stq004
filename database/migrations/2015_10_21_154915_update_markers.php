<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMarkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('markers', function (Blueprint $table) {
           
            $table->string('photo')->default('default.png');
            
            $table->string('alert_type');

            $table->smallInteger('status')->default(0);

            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('markers');
    }
}
