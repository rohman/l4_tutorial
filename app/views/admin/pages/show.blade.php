@extends('admin._layouts.default')

@section('main')
	<h1>{{e($page->title)}}</h1>
	<h5>{{'@'.$page->created_at}} </h5>
	<p>{{ e($page->body) }}</p>
	<small>{{HTML::linkRoute('admin.pages.index', 'List Pages')}} | {{HTML::linkRoute('admin.pages.edit', 'Edit', array($page->id))}}</small>
@endsection