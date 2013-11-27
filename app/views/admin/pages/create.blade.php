@extends('admin._layouts.default')

@section('main')
	<h2>Create Page</h2>
	@include('admin._partials.notifications')
	{{ Form::open(array('route' => 'admin.pages.store', 'role' =>'form'))}}
		<div class="form-group">
			{{Form::label('title', 'Title : ')}}
			{{ Form::text('title' ,'' , array('class'=>'form-control'))}}
		</div>
		<div class="form-group">
			{{Form::label('body', 'Content : ')}}
			{{ Form::textarea('body' ,'' , array('class'=>'form-control'))}}
		</div>
		
		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-primary btn-save'))}}
			{{ HTML::linkRoute('admin.pages.index', 'Cancel', array(), array('class' => 'btn'))}}
		</div>
	{{ Form::close() }}
@endsection