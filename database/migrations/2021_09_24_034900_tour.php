<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tour extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function(Blueprint $table){
        $table->uuid("tour_id");
        $table->string("tour_name");
        $table->text("tour_desc");
        $table->float("longtitude");
        $table->float("latitude");
        $table->string("tour_location_name");
        $table->double("price_adult");
        $table->double("price_child");
        $table->string("tour_facility");
        $table->text("operational_hour");
        $table->text("tour_image_primary");    
        $table->timestamps();
        $table->softDeletes();   

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
