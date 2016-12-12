<?php

use Illuminate\Database\Seeder;

class AthletesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {


        for($i = 0;
        $i<100;
        $i++) {

            DB::table('athletes')->insert([
                'firstname' => str_random(10),
                'surname' => str_random(10),
                'gender' => str_random(10),
                'address_1' => str_random(10),
                'address_2' => str_random(10),
                'postcode' => str_random(10),
                'parent_1_firstname' => str_random(10),
                'parent_1_surname' => str_random(10),
                'parent_1_email_address' => str_random(10) . '@gmail.com',
                'telephone_number_1' => str_random(10),
                'emergency_contact_firstname' => str_random(10),
                'emergency_contact_surname' => str_random(10),
                'emergency_contact_relationship' => str_random(10),
                'membership_type' => str_random(10),
                'created_at' => str_random(10),
                'updated_at' => str_random(10),
                'dob' => str_random(10),
                'medical_info' => str_random(10),
                'deleted_at' => str_random(10),
                'address_3' => str_random(10),
                'address_4' => str_random(10),
                'parent_2_firstname' => str_random(10),
                'parent_2_surname' => str_random(10),
                'parent_2_email_address' => str_random(10) . '@gmail.com',
                'telephone_number_2' => str_random(10),
                'telephone_number_3' => str_random(10),
                'telephone_number_4' => str_random(10),
                'fees_paid' => 1,
                'photo_consent' => 1,
                'medical_consent_1' => 1,
                'medical_consent_2' => 1,
                'signed' => 1
            ]);
        }
    }

}
