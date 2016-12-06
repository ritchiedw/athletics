@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-6"><h1>{{ $athlete->firstname }} {{ $athlete->surname }} <small>{{ $athlete->dob }}</small></h1></div>
</div>

<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Gender:</div>
    <div class="col-md-2">{{ $athlete->gender }}</div>
    <div class="col-md-2">Date Of Birth:</div>
    <div class="col-md-2">{{ $athlete->dob }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Address 1:</div>
    <div class="col-md-2">{{ $athlete->address_1 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Address 2:</div>
    <div class="col-md-2">{{ $athlete->address_2 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Address 3:</div>
    <div class="col-md-2">{{ $athlete->address_3 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Address 4:</div>
    <div class="col-md-2">{{ $athlete->address_4 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Postcode:</div>
    <div class="col-md-2">{{ $athlete->postcode }}</div>
</div>

<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">First Parent Firstname:</div>
    <div class="col-md-2">{{ $athlete->parent_1_firstname }}</div>
    <div class="col-md-2">Second Parent Firstname:</div>
    <div class="col-md-2">{{ $athlete->parent_2_firstname }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">First Parent Surname:</div>
    <div class="col-md-2">{{ $athlete->parent_1_surname }}</div>
    <div class="col-md-2">Second Parent Surname:</div>
    <div class="col-md-2">{{ $athlete->parent_2_surname }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">First Parent Email Address:</div>
    <div class="col-md-2">{{ $athlete->parent_1_email_address }}</div>
    <div class="col-md-2">Second Parent Email Address:</div>
    <div class="col-md-2">{{ $athlete->parent_2_email_address }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Telephone Number 1:</div>
    <div class="col-md-2">{{ $athlete->telephone_number_1 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Emergency Contact Firstname:</div>
    <div class="col-md-2">{{ $athlete->emergency_contact_firstname }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Emergency Contact Surname:</div>
    <div class="col-md-2">{{ $athlete->emergency_contact_surname }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Emergency Contact Relationship:</div>
    <div class="col-md-2">{{ $athlete->emergency_contact_relationship }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Membership Type:</div>
    <div class="col-md-2">{{ $athlete->membership_type }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Created At:</div>
    <div class="col-md-2">{{ $athlete->created_at }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Updated At:</div>
    <div class="col-md-2">{{ $athlete->updated_at }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Medical Info:</div>
    <div class="col-md-2">{{ $athlete->medical_info }}</div>
</div>


<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Telephone Number 2:</div>
    <div class="col-md-2">{{ $athlete->telephone_number_2 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Telephone Number 3:</div>
    <div class="col-md-2">{{ $athlete->telephone_number_3 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Telepbhone Number 4:</div>
    <div class="col-md-2">{{ $athlete->telephone_number_4 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Fees Paid:</div>
    <div class="col-md-2">{{ $athlete->fees_paid }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Photo Consent:</div>
    <div class="col-md-2">{{ $athlete->photo_consent }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Medical Consent 1:</div>
    <div class="col-md-2">{{ $athlete->medical_consent_1 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Medical Consent 2:</div>
    <div class="col-md-2">{{ $athlete->medical_consent_2 }}</div>
</div>
<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-2">Parent Signed:</div>
    <div class="col-md-2">{{ $athlete->signed }}</div>
</div>
<hr>

<a href="{{ route('athletes.index') }}" class="btn btn-info">Back to all athletes</a>
<a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-primary">Edit athlete</a>

<div class="pull-right">
    <a href="#" class="btn btn-danger">Delete this athlete</a>
</div>

@stop
