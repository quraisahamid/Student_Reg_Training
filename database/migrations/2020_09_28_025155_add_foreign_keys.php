<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('students', function(Blueprint $table){
            $table->foreign('race_id')->on('races')->references('id');
            $table->foreign('religion_id')->on('religions')->references('id');
            $table->foreign('gender_id')->on('genders')->references('id');         
        });

        Schema::table('registrations', function(Blueprint $table){
            $table->foreign('school_id')->on('schools')->references('id');
            $table->foreign('student_id')->on('students')->references('id');
            $table->foreign('status_id')->on('statuses')->references('id');
           
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
         Schema::table('students', function(Blueprint $table) {
            $table->dropForeign (['gender_id','race_id','religion_id']);    
        });

        Schema::table('registrations', function(Blueprint $table) {
            $table->dropForeign (['school_id','student_id','status_id']);
           
        });
    }
}
