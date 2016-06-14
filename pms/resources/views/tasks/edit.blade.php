@extends('layout')

@section('header')

	<ol class="breadcrumb">
	    <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('tasks.index') }}">Task</a></li>
	    <li><a href="{{ route('tasks.show', $task->id) }}">{{ $task->name }}</a></li>
	    <li class="active"></li>
	</ol>

    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Task / Edit #{{$task->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($task, array('route' => array('tasks.update', $task->id),'method' => 'put')) !!}

@include('tasks._form')

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
