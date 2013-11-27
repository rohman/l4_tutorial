@extends('admin._layouts.default')

@section('main')
	<div id="login" class="login" style="margin-top:10px;width:30%" role="form">
		{{ Form::open() }}
			@if ($errors->has('login'))
                <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
            @endif
 
			<div class="form-group">
				{{Form::label('email', 'Email :')}}
				{{ Form::text('email','' , array('class'=>'form-control')) }}
			</div>
			<div class="form-group">
				{{Form::label('password', 'Password :')}}
				{{ Form::password('password', array('class'=>'form-control')) }}
			</div>
			<div class="form-actions">
				{{Form::submit('login', array('class' => 'btn btn-primary btn-default'))}}
			</div>
		{{ Form::close() }}
	</div>
@endsection