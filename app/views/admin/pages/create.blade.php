@extends('admin._layouts.default')

@section('main')
	<h2>Create Page</h2>
	@include('admin._partials.notifications')
	{{ Form::open(array('route' => 'admin.pages.store', 'class' => 'form-control'))}}
		<div class="control-group">
			{{Form::label('title', 'Title : ')}}
			<div class="controls">
				{{ Form::text('title')}}
			</div>
		</div>
		<div class="control-group">
			{{Form::label('body', 'Content : ')}}
			<div class="controls">
				{{ Form::textarea('body')}}
			</div>
		</div>
		
		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-primary btn-save'))}}
			{{ HTML::linkRoute('admin.pages.index', 'Cancel', array(), array('class' => 'btn'))}}
		</div>
	{{ Form::close() }}
@endsection