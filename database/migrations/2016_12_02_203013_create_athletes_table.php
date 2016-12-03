<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('surname');
            $table->enum('gender', ['Female', 'Male']);
            $table->string('address_1');
            $table->string('address_2');
            $table->string('address_3');
            $table->string('address_4');
            $table->string('postcode');
            $table->string('parent_1_firstname');
            $table->string('parent_1_surname');
            $table->string('parent_1_email_address');
            $table->string('parent_2_firstname');
            $table->string('parent_2_surname');
            $table->string('parent_2_email_address');
            $table->string('telephone_number_1');
            $table->string('telephone_number_2');
            $table->string('telephone_number_3');
            $table->string('telephone_number_4');
            $table->string('emergency_contact_firstname');
            $table->string('emergency_contact_surname');
            $table->string('emergency_contact_relationship');
            $table->enum('membership_type', ['Junior', 'Ordinary', 'Family']);
            $table->boolean('fees_paid');
            $table->boolean('photo_consent');
            $table->boolean('medical_consent_1');
            $table->boolean('medical_consent_2');
            $table->boolean('signed');
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
        Schema::dropIfExists('athletes');
    }
}
