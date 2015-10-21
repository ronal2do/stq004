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
         Schema::table('markers', function ($table) {
           
            $table->string('photo')->default('default.png');
            
            $table->string('alert_type');

            $table->smallInteger('status')->default(0);

            $table->foreign('user_id')
                  ->references('id')->on('contributors')
                  ->onDelete('cascade');
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
