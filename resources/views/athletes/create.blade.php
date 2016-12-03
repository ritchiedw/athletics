@extends('layouts.master')

@section('content')

<h1>Add a New Athlete</h1>
<p class="lead">Add to the athlete list below.</p>
<hr>

@include('partials.alerts.errors')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif

{!! Form::open([
    'route' => 'athletes.store'
]) !!}

<div class="form-group">
    {!! Form::label('firstname', 'Firstname:', ['class' => 'control-label']) !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('surname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('gender', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('dob', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_1', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_2', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_3', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_4', 'Firstname:', ['class' => 'control-label']) !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('postcode', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_1_firstname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_1_surname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_1_email_address', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_2_firstname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_2_surname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_2_email_address', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_1', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_2', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_3', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_4', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emergency_contact_firstname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emergency_contact_surname', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emergency_contact_relationship', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('membership_type', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fees_paid', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('photo_consent', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('medical_consent_1', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('medical_consent_2', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('signed', 'Surname:', ['class' => 'control-label']) !!}
    {!! Form::textarea('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('medical_info', 'Medical Information:', ['class' => 'control-label']) !!}
    {!! Form::textarea('medical_info', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Athlete', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop