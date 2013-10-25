@extends('admin._layouts.default')

@section('main')
	<h2>Create Article</h2>
	@include('admin._partials.notifications')
	
	{{ Form::open(array('route' => 'admin.articles.store', 'class'=>"form-control")) }}
		<div class="control-group">
			{{Form::label('title', 'Title : ')}}
			<div class="controls">
				{{ Form::text('title')}}
			</div>
		</div>
		<div class="control-group">
			{{Form::label('Body', 'Body : ')}}
			<div class="controls">
				{{ Form::textarea('body')}}
			</div>
		</div>
		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-primary btn-save'))}}
			{{ HTML::linkRoute('admin.articles.index', 'Cancel', array(), array('class' => 'btn'))}}
		</div>
	{{ Form::close()}}
	
@endsection