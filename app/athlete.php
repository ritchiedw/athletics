<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class athlete extends Model
{
     /**
     * Fillable fields
     * 
     * @var array
     */
    protected $fillable = [
        'firstname',
        'surname',
        'gender',
        'address_1',
        'address_2',
        'address_3',
        'address_4',
        'postcode',
        'parent_1_firstname',
        'parent_1_surname',
        'parent_1_email_address',
        'parent_2_firstname',
        'parent_2_surname',
        'parent_2_email_address',
        'telephone_number_1',
        'telephone_number_2',
        'telephone_number_3',
        'telephone_number_4',
        'emergency_contact_firstname',
        'emergency_contact_surname',
        'emergency_contact_relationship',
        'membership_type',
        'fees_paid',
        'photo_consent',
        'medical_consent_1',
        'medical_consent_2',
        'signed',
        'dob',
        'medical_info'
    ];
}
