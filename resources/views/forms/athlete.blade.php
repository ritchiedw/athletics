<div class="form-group">
    {!! Form::label('firstname', 'Athlete Firstname:', ['class' => 'control-label']) !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('surname', 'Athlete Surname:', ['class' => 'control-label']) !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('gender', 'Athlete Gender:', ['class' => 'control-label']) !!}
    {!! Form::select('gender', [0 => 'Female', 1 => 'Male'], ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('dob', 'Athlete Date Of Birth:', ['class' => 'control-label']) !!}
    {!! Form::date('dob', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_1', 'Athlete Address 1:', ['class' => 'control-label']) !!}
    {!! Form::text('address_1', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_2', 'Athlete Address 2:', ['class' => 'control-label']) !!}
    {!! Form::text('address_2', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_3', 'Athlete Address 3:', ['class' => 'control-label']) !!}
    {!! Form::text('address_3', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address_4', 'Athlete Address 4:', ['class' => 'control-label']) !!}
    {!! Form::text('address_4', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('postcode', 'Athlete Postcode:', ['class' => 'control-label']) !!}
    {!! Form::text('postcode', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_1_firstname', 'First Parent Firstname:', ['class' => 'control-label']) !!}
    {!! Form::text('parent_1_firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_1_surname', 'First Parent Surname:', ['class' => 'control-label']) !!}
    {!! Form::text('parent_1_surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_1_email_address', 'First Parent Email Address:', ['class' => 'control-label']) !!}
    {!! Form::text('parent_1_email_address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_2_firstname', 'Second Parent Firstname:', ['class' => 'control-label']) !!}
    {!! Form::text('parent_2_firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_2_surname', 'Second Parent Surname:', ['class' => 'control-label']) !!}
    {!! Form::text('parent_2_surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('parent_2_email_address', 'SEcond Parent Email Address:', ['class' => 'control-label']) !!}
    {!! Form::text('parent_2_email_address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_1', 'Telephone Number 1:', ['class' => 'control-label']) !!}
    {!! Form::text('telephone_number_1', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_2', 'Telephone Number 2:', ['class' => 'control-label']) !!}
    {!! Form::text('telephone_number_2', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_3', 'Telephone Number 3:', ['class' => 'control-label']) !!}
    {!! Form::text('telephone_number_3', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telephone_number_4', 'Telephone Number 4:', ['class' => 'control-label']) !!}
    {!! Form::text('telephone_number_4', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emergency_contact_firstname', 'Emergency Contact Firstname:', ['class' => 'control-label']) !!}
    {!! Form::text('emergency_contact_firstname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emergency_contact_surname', 'Emergency Contact Surname:', ['class' => 'control-label']) !!}
    {!! Form::text('emergency_contact_surname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('emergency_contact_relationship', 'Emergency Contact Relationship:', ['class' => 'control-label']) !!}
    {!! Form::text('emergency_contact_relationship', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('membership_type', 'Membership Type:', ['class' => 'control-label']) !!}
    {!! Form::select('membership_type', [0 => 'Junior', 1 => 'Ordinary', 2 => 'Family'], ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fees_paid', 'Fees Paid:', ['class' => 'control-label']) !!}
    {!! Form::checkbox('fees_paid', false, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('photo_consent', 'Photo Consent:', ['class' => 'control-label']) !!}
    {!! Form::checkbox('photo_consent', 1, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('medical_consent_1', 'Medical Consent 1:', ['class' => 'control-label']) !!}
    {!! Form::checkbox('medical_consent_1', 1, ['class' => 'form-control']) !!}
    
</div>

<div class="form-group">
    {!! Form::label('medical_consent_2', 'Medical Consent 2:', ['class' => 'control-label']) !!}
    {!! Form::checkbox('medical_consent_2', 1, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('signed', 'Signed:', ['class' => 'control-label']) !!}
    {!! Form::checkbox('signed', 1, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('medical_info', 'Medical Information:', ['class' => 'control-label']) !!}
    {!! Form::textarea('medical_info', null, ['class' => 'form-control']) !!}
</div>