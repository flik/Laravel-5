@extends('layout')

@section('header')

	<ol class="breadcrumb">
	    <li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('projects.index') }}">Project</a></li>
	    <li><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></li>
	    <li class="active">編集</li>
	</ol>

    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Project / Edit #{{$project->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($project, array('route' => array('projects.update', $project->id),'method' => 'put')) !!}

@include('projects._form')

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('projects.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection