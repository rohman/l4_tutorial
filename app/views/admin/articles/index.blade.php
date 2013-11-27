@extends('admin._layouts.default')

@section('main')
	<h1>List Articles</h1>
	
	{{HTML::linkRoute('admin.articles.create', 'Add Article', array(), array('class' => 'btn btn-primary btn-xs'))}}
	@include('admin._partials.notifications')
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Title</th>
			<th>Creator</th>
			<th>When</th>
			<th><i class="fa fa-cog"></i></th>
		</thead>
		<tbody>
			@foreach($articles as $article)
			<tr>
				<td>{{$article->id}}</td>
				<td>{{HTML::linkRoute('admin.articles.show', $article->title, array($article->id))}}</td>
				<td>{{$article->first_name}}</td>
				<td>{{$article->created_at}}</td>
				<td>
					{{HTML::linkRoute('admin.articles.edit', 'Edit', array($article->id), array('class' => 'btn btn-success btn-xs'))}}
					
					{{ Form::open(array('route' => array('admin.articles.destroy', $article->id), 'method'=>'DELETE')) }}
						{{ Form::submit('Delete', array('class'=>'btn btn-danger btn-xs', 'onclick'=>'return confirm("Are You Sure?")' ) ) }}
					{{ Form::close()}}				
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection