<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNullableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('athletes', function (Blueprint $table) {
            //
            $table->string('address_3')->nullable()->change();
            $table->string('address_4')->nullable()->change();
            $table->string('parent_2_firstname')->nullable()->change();
            $table->string('parent_2_surname')->nullable()->change();
            $table->string('parent_2_email_address')->nullable()->change();
            $table->string('telephone_number_2')->nullable()->change();
            $table->string('telephone_number_3')->nullable()->change();
            $table->string('telephone_number_4')->nullable()->change();
            $table->boolean('fees_paid')->nullable()->change();
            $table->boolean('photo_consent')->nullable()->change();
            $table->boolean('medical_consent_1')->nullable()->change();
            $table->boolean('medical_consent_2')->nullable()->change();
            $table->boolean('signed')->nullable()->change();
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
            //
        });
    }
}
