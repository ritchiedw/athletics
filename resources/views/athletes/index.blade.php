@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">
            <h1>Athletes List</h1>
            <p class="lead">Here's a list of all the athletes. <a href="{{ route('athletes.create') }}" class="btn btn-success">Add a new one?</a></p>
            <hr>
            @foreach($athletes as $athlete)
            <h3>{{ $athlete->firstname }} {{ $athlete->surname }}</h3>
            <p>
            <div class="container">
                <div class="row">

                    <div class="col-md-1"><a href="{{ route('athletes.show', $athlete->id) }}" class="btn btn-info">View Athlete</a></div>
                    <div class="col-md-1"><a href="{{ route('athletes.edit', $athlete->id) }}" class="btn btn-primary">Edit Athlete</a></div>
                    <div class="col-md-1">{!! Form::open(
                        [
                        'method' => 'DELETE',
                        'route' => ['athletes.destroy', $athlete->id],
                        ]
                        ) !!}
                        {!! Form::submit('Delete this Athlete?', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                    <!--
                    <button 
                        type="button" 
                        class="btn btn-primary btn-lg" 
                        data-toggle="modal"
                        data-athid="{{  $athlete->id }}"
                        data-title="{{ $athlete->firstname }}"
                        data-rand='DWR'
                        data-target="#myModal">
                        Add to Favorites
                    </button>
                    -->
                </div>
            </div>
            </p>
            <hr>
            @endforeach

        </div>
    </div>
</div>


@endsection