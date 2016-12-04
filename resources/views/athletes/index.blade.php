@extends('layouts.master')

@section('content')
<h1>Athletes List</h1>
<p class="lead">Here's a list of all the athletes. <a href="{{ route('athletes.create') }}">Add a new one?</a></p>
<hr>
@foreach($athletes as $athlete)
    <h3>{{ $athlete->firstname }} {{ $athlete->surname }}</h3>
    <p>
        <a href="{{ route('athletes.show', $athlete->id) }}" class="btn btn-info">View Athlete</a>
        <a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-primary">Edit Athlete</a>
    </p>
    <hr>
@endforeach



@endsection