@extends('admin._layouts.default')

@section('main')
	<h1>List Page</h1>
	{{HTML::linkRoute('admin.pages.create', 'Add Page', array() ,array('class' => 'btn btn-primary'))}}
	
	@include('admin._partials.notifications')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>title</th>
				<th>creator</th>
				<th>when</th>
				<th><i class="icon-cog"></i></th>
			</tr>
		</thead>
		<tbody>
			@foreach($pages as $page)
				<tr>
					<td>{{$page->id}}</td>
					<td>{{ HTML::linkRoute('admin.pages.show',$page->title, array($page->id)) }}</td>
					<td>{{$page->first_name}}</td>
					<td>{{$page->created_at}}</td>
					<td>
						{{ HTML::linkRoute('admin.pages.edit','Edit', array($page->id), array('class' => 'btn btn-success btn-mini')) }}
						
						{{ Form::open(array('route' => array('admin.pages.destroy',$page->id), 'method'=>'DELETE'))}}						
							{{ Form::submit('Delete', array('class' => 'btn btn-danger btn-mini', 'onclick' => 'return confirm("Are You Sure?")'))}}
						{{Form::close()}}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection