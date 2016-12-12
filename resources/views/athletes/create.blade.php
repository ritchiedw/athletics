@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-6">
            <h1>Add a New Athlete</h1>
        </div>
        <div class="col-md-2"><a href="{{ route('athletes.index') }}" class="btn btn-info">Back to all athletes</a></div>
    </div>
</div>

@include('partials.alerts.errors')
@include('partials.alerts.flash')

{!! Form::open([
'route' => 'athletes.store'
]) !!}

@include('forms.athlete')

<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">
            {!! Form::submit('Create New Athlete', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop