@extends('admin._layouts.default')

@section('main')
	<h2>Edit Page</h2>
	@include('admin._partials.notifications')
	{{ Form::model($page, array('method'=>'put', 'route' => array('admin.pages.update', $page->id)))}}
		<div class="control-group">
			{{Form::label('title', 'Title : ')}}
			<div class="controls">
				{{ Form::text('title', $page->title)}}
			</div>
		</div>
		<div class="control-group">
			{{Form::label('body', 'Content : ')}}
			<div class="controls">
				{{ Form::textarea('body', $page->body)}}
			</div>
		</div>
		
		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-primary btn-save'))}}
			{{ HTML::linkRoute('admin.pages.index', 'Cancel', array(), array('class' => 'btn'))}}
		</div>
	{{ Form::close() }}
@endsection