@extends('admin._layouts.default')

@section('main')
	<h1>{{e($article->title)}}</h1>
	<h5>{{'@'.$article->created_at}}</h5>
	<p>{{e($article->body)}}</p>
	<small>
		{{HTML::linkRoute('admin.articles.index', 'List Article')}} | {{HTML::linkRoute('admin.articles.edit', 'Edit', array($article->id), array('class' => 'btn btn-primary'))}}
	</small>
@endsection