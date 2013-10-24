@if(Session::has('message'))
	<div class="alert alert-success">
		{{ Session::get('message' )}}
	</div>
@endif

@if ($errors->any())
        <div class="alert alert-error">
                {{ implode('<br>', $errors->all()) }}
        </div>
@endif