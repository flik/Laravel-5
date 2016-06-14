@extends('layout')

@section('header')

	<ol class="breadcrumb">
		<li><a href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
	    <li><a href="{{ route('appleTypes.index') }}">AppleType</a></li>
	    <li class="active">新規登録</li>
	</ol>

    <div class="page-header">
        <h1><i class="glyphicon glyphicon-duplicate"></i> AppleType / Duplicate #{{$appleType->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            {!! Form::model($appleType, array('route' => array('appleTypes.store'))) !!}

@include('appleTypes._form')

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Duplicate</button>
                    <a class="btn btn-link pull-right" href="{{ route('appleTypes.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection