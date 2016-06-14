@extends('layout')

@section('header')

	<ol class="breadcrumb">
		<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('apples.index') }}">Apple</a></li>
	    <li class="active">新規登録</li>
	</ol>

    <div class="page-header">
        <h1><i class="glyphicon glyphicon-duplicate"></i> Apple / Duplicate #{{$apple->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($apple, array('route' => array('apples.store'))) !!}

@include('apples._form')

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Duplicate</button>
                    <a class="btn btn-link pull-right" href="{{ route('apples.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection