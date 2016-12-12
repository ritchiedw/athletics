@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-6"><h1>{{ $athlete->firstname }} {{ $athlete->surname }} <small>{{ $athlete->dob }}</small></h1></div>
    <div class="col-md-2"><a href="{{ route('athletes.index') }}" class="btn btn-info">Back to all athletes</a></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">

            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">Personal Details</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-2">Gender:</div>
                            <div class="col-md-2">{{ $athlete->gender }}</div>
                            <div class="col-md-2">Date Of Birth:</div>
                            <div class="col-md-2">{{ $athlete->dob }}</div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">Address</div>
                    <div class="panel-body">
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
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Parent Details</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            Parent 1
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3">Firstname:</div>
                                            <div class="col-md-3">{{ $athlete->parent_1_firstname }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">Surname:</div>
                                            <div class="col-md-3">{{ $athlete->parent_1_surname }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">Email:</div>
                                            <div class="col-md-3">{{ $athlete->parent_1_email_address }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">Tel:</div>
                                            <div class="col-md-3">{{ $athlete->telephone_number_1 }}</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Parent 2</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3">Firstname:</div>
                                            <div class="col-md-3">{{ $athlete->parent_2_firstname }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">Surname:</div>
                                            <div class="col-md-3">{{ $athlete->parent_2_surname }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">Email:</div>
                                            <div class="col-md-3">{{ $athlete->parent_2_email_address }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">Tel:</div>
                                            <div class="col-md-3">{{ $athlete->telephone_number_2 }}</div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Emergency Contact</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-2">Firstname:</div>
                                <div class="col-md-2">{{ $athlete->emergency_contact_firstname }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-2">Surname:</div>
                                <div class="col-md-2">{{ $athlete->emergency_contact_surname }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-2">Relationship:</div>
                                <div class="col-md-2">{{ $athlete->emergency_contact_relationship }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-3">Telephone Number 3:</div>
                                <div class="col-md-2">{{ $athlete->telephone_number_3 }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">&nbsp;</div>
                                <div class="col-md-3">Telephone Number 4:</div>
                                <div class="col-md-2">{{ $athlete->telephone_number_4 }}</div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Membership Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-2">Membership Type:</div>
                                    <div class="col-md-2">{{ $athlete->membership_type }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-2">Fees Paid:</div>
                                    @if ($athlete->fees_paid == 1)
                                    <div class="col-md-2">Yes -- {{$athlete->fees_paid}}</div>
                                    @else
                                    <div class="col-md-2">No</div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-2">Photo Consent:</div>
                                    @if ($athlete->photo_consent == 1)
                                    <div class="col-md-2">Yes -- {{$athlete->photo_consent}}</div>
                                    @else
                                    <div class="col-md-2">No</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Medical Consent and Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-2">Medical Info:</div>
                                    <div class="col-md-2">{{ $athlete->medical_info }}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-2">Medical Consent 1:</div>
                                    @if ($athlete->medical_consent_1 == 1)
                                    <div class="col-md-2">Yes -- {{ $athlete->medical_consent_1 }}</div>
                                    @else
                                    <div class="col-md-2">No</div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-2">&nbsp;</div>
                                    <div class="col-md-2">Medical Consent 2:</div>
                                    @if ($athlete->medical_consent_2 == 1)
                                    <div class="col-md-2">Yes -- {{$athlete->medical_consent_2}}</div>
                                    @else
                                    <div class="col-md-2">No</div>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-2">&nbsp;</div>
                            <div class="col-md-2">Parent Signed:</div>
                            @if ($athlete->parent_signed == 1)
                            <div class="col-md-2">Yes</div>
                            @else
                            <div class="col-md-2">No -- {{$athlete->parent_signed}}</div>
                            @endif
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('athletes.index') }}" class="btn btn-info">Back to all athletes</a>
<a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-primary">Edit athlete</a>

<div class="pull-right">
    <a href="#" class="btn btn-danger">Delete this athlete</a>
</div>

@stop
