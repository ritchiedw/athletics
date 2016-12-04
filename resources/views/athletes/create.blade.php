@extends('layouts.master')

@section('content')

<h1>Add a New Athlete</h1>
<p class="lead">Add to the athlete list below.</p>
<hr>

@include('partials.alerts.errors')
@include('partials.alerts.flash')

{!! Form::open([
    'route' => 'athletes.store'
]) !!}

@include('partials.forms.athlete')

{!! Form::submit('Create New Athlete', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop