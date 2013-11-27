@extends('admin._layouts.default')

@section('main')
	<h2>Create Article</h2>
	@include('admin._partials.notifications')
	
	{{ Form::open(array('route' => 'admin.articles.store', 'role' =>'form')) }}
		<div class="form-group">
			{{Form::label('title', 'Title : ')}}
			{{ Form::text('title','' , array('class'=>'form-control'))}}
		</div>
		<div class="form-group">
			{{Form::label('Body', 'Body : ')}}
			{{ Form::textarea('body','' , array('class'=>'form-control'))}}
		</div>
		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-primary btn-save'))}}
			{{ HTML::linkRoute('admin.articles.index', 'Cancel', array(), array('class' => 'btn'))}}
		</div>
	{{ Form::close()}}
	
@endsection