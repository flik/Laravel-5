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

           {!! Form::open(array('route' => 'test.store', 'class' => 'form')) !!}

    <div class="has-error" >
                      <div class="has-error">
                       <label for="description-field">Find Name </label>
                       <input type="search" name="myInputTextField" id="myInputTextField" class="form-control">
                                              
                </div>
                       
                       <?php 
                       //print_r($tasksx);
                       ?>
                    </div>
                    
    <div class="row" id="myTablex">
        <div class="col-md-12"> 
            @if(!empty($tasksx)) 
                <table class="table table-condensed table-striped" id="myTable">
                    <thead>
                        <tr>
                        <th>title</th> 
                        <th>projects.name</th>
                        <th>name</th>
                        <th>description</th>
                        <th class="text-right">OPTIONS</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($tasksx as $task)
                            <tr id='tr{{$task->id}}'>
                                <td><a href="{{ route('tasks.show', $task->id) }}">{{$task->id}}</a></td>
                                
                    <td>{{$task->project_id}}</td>
                    <td>{{$task->name}}</td>
                    <td>{{$task->description}}</td>
                                <td class="text-right">
                                  <a href="#" onclick="sel({{$task->id}});">sel</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                 
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>
    

                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
