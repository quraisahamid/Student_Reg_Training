<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLookupForReferences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //races
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        //religions
        Schema::create('religions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

         //genders
         Schema::create('genders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

         //statuses
         Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop races
        Schema::dropIfExists('races');

        //drop religions
        Schema::dropIfExists('religions');

        //drop genders
        Schema::dropIfExists('genders');

        //drop statuses
        Schema::dropIfExists('statuses');
    
    
    }
}
