<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMedicalInfoToAthlete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('athletes', function (Blueprint $table) {
            
            //$table->string('surname');
            $table->date('dob')->nullable()->after('surname');
            
            //$table->boolean('medical_consent_2');
            $table->text('medical_info')->nullable()->after('medical_consent_2');
            //$table->boolean('signed');
            $table->softDeletes()->after('signed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('athletes', function (Blueprint $table) {
            $table->dropColumn('dob');
            $table->dropColumn('medical_info');
            $table->dropColumn('deleted_at');
        });
    }
}
