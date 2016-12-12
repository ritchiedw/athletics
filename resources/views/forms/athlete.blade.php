<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">

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
                {!! Form::select('gender', ['Female' => 'Female', 'Male' => 'Male'], ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('dob', 'Athlete Date Of Birth:', ['class' => 'control-label']) !!}
                {!! Form::date('dob', null, ['class' => 'form-control']) !!}
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Address</div>
                <div class="panel-body">
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
                </div>
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
                {!! Form::select('membership_type', ['Junior' => 'Junior', 'Ordinary' => 'Ordinary', 'Family' => 'Family'], ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('fees_paid', 'Fees Paid:', ['class' => 'control-label']) !!}
                @if ($athlete->fees_paid == 1)
                    {!! Form::checkbox('fees_paid', true, true) !!}
                @else
                    {!! Form::checkbox('fees_paid', true, null) !!}
                 @endif
            </div>

            <div class="form-group">
                {!! Form::label('photo_consent', 'Photo Consent:', ['class' => 'control-label']) !!}
                @if ($athlete->photo_consent == 1)
                    {!! Form::checkbox('photo_consent', true, true) !!}
                @else
                    {!! Form::checkbox('photo_consent', true, null) !!}
                 @endif
            </div>

            <div class="form-group">
                {!! Form::label('medical_consent_1', 'Medical Consent 1:', ['class' => 'control-label']) !!}
                @if ($athlete->medical_consent_1 == 1)
                    {!! Form::checkbox('medical_consent_1', true, true) !!}
                @else
                    {!! Form::checkbox('medical_consent_1', true, null) !!}
                 @endif

            </div>

            <div class="form-group">
                {!! Form::label('medical_consent_2', 'Medical Consent 2:', ['class' => 'control-label']) !!}
                @if ($athlete->medical_consent_2 == 1)
                    {!! Form::checkbox('medical_consent_2', true, true) !!}
                @else
                    {!! Form::checkbox('medical_consent_2', true, null) !!}
                 @endif
            </div>

            <div class="form-group">
                {!! Form::label('signed', 'Signed:', ['class' => 'control-label']) !!}
                @if ($athlete->signed == 1)
                    {!! Form::checkbox('signed', true, true) !!}
                @else
                    {!! Form::checkbox('signed', true, null) !!}
                 @endif
            </div>

            <div class="form-group">
                {!! Form::label('medical_info', 'Medical Information:', ['class' => 'control-label']) !!}
                {!! Form::textarea('medical_info', null, ['class' => 'form-control']) !!}
            </div>

        </div>
    </div>
</div>