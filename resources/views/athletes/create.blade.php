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

{!! Form::submit('Create New Athlete', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop