@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">
            <h1>Edit Athlete {{ $athlete->firstname }} {{ $athlete->surname }}</h1>
        </div>
        <div class="col-md-2"><a href="{{ route('athletes.index') }}" class="btn btn-info">Back to all athletes</a></div>
    </div>
</div>

        {!! Form::model($athlete, [
        'method' => 'PATCH',
        'route' => ['athletes.update', $athlete->id]
        ]) !!}

        @include('forms.athlete')

        {!! Form::submit('Update Athlete', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}


        @stop