@extends('layouts.master')

@section('content')

<h1>Edit Task - Task Name </h1>
<p class="lead">Edit this task below. <a href="{{ route('athletes.index') }}">Go back to all tasks.</a></p>
<hr>

{!! Form::model($athlete, [
    'method' => 'PATCH',
    'route' => ['athletes.update', $athlete->id]
]) !!}

@include('forms.athlete')

{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@stop