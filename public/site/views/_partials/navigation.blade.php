<nav id="nav">
	<ul>
		<li class="{{ (Request::is('home')) ? 'active' : null }}">
			<a href="{{ URL::Route('home', 'Home')}}">
				Home
			</a>
		</li>
		
	</ul>
</nav>
