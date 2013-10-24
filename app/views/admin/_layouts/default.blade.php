<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>L4 Site</title>
   @include('admin._partials.assets') 
</head>
<body>
<div>
	@include('admin._partials.header')
    <div class="container">
	
    @yield('main')
	</div>
</div>
</body>
</html>