@extends('layout')
@section('header')

<ol class="breadcrumb">
	<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
    <li><a href="{{ route('projects.index') }}">Project</a></li>
    <li class="active">{{ $project->name }}</li>
</ol>

<div class="page-header">
        <h1>Project / Show #{{$project->id}}

            {!! Form::model($project, array('route' => array('projects.destroy', $project->id),'method' => 'delete', 'style' => 'display: inline;', 'onsubmit'=> "if(confirm('Delete? Are you sure?')) { return true } else {return false };")) !!}
                <div class="btn-group pull-right" role="group" aria-label="...">
                    <a class="btn btn-primary btn-group" role="group" href="{{ route('projects.duplicate', $project->id) }}"><i class="glyphicon glyphicon-duplicate"></i> Duplicate</a>
                    <a class="btn btn-warning btn-group" role="group" href="{{ route('projects.edit', $project->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
                </div>
            {!! Form::close() !!}

        </h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$project->id}}</p>
                </div>
                <div class="form-group">
                     <label for="parent_id">PARENT_ID</label>
                     <p class="form-control-static">{{$project->parent_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$project->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$project->description}}</p>
                </div>
            </form>

            <a class="btn btn-link" href="{{ route('projects.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection