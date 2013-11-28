@extends('admin._layouts.default')

@section('main')
	<h2>Change Password</h2>
	@include('admin._partials.notifications')
	<div id="login" class="login" style="margin-top:10px;width:30%" role="form">
		{{ Form::open() }}
			
			<div class="form-group">
				{{Form::label('password', 'Password :')}}
				{{ Form::password('password', array('class'=>'form-control')) }}
			</div>
			<div class="form-group">
				{{Form::label('password_confirm', 'Password Confirmation :')}}
				{{ Form::password('password_confirm', array('class'=>'form-control')) }}
			</div>
			<div class="form-actions">
				{{Form::submit('OK', array('class' => 'btn btn-primary btn-default'))}}
			</div>
		{{ Form::close() }}
	</div>
@endsection