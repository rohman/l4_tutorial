@extends('admin._layouts.default')

@section('main')
	<h2>Edit Page</h2>
	@include('admin._partials.notifications')
	{{ Form::model($article, array('method'=>'put', 'route' => array('admin.articles.update', $article->id) ) )}}
		<div class="control-group">
			{{Form::label('title', 'Title : ')}}
			<div class="controls">
				{{ Form::text('title', $article->title)}}
			</div>
		</div>
		<div class="control-group">
			{{Form::label('body', 'Content : ')}}
			<div class="controls">
				{{ Form::textarea('body', $article->body)}}
			</div>
		</div>
		
		<div class="form-actions">
			{{ Form::submit('Update', array('class' => 'btn btn-primary btn-save'))}}
			{{ HTML::linkRoute('admin.articles.index', 'Cancel', array(), array('class' => 'btn'))}}
		</div>
	{{ Form::close() }}

@endsection