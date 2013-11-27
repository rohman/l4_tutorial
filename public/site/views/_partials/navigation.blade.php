<nav id="nav">
	<ul>
		<li class="{{ (Request::is('/')) ? 'active' : null }}">
			<a href="{{ URL::Route('home', 'Home')}}">
				Home
			</a>
		</li>
		<li class="{{ (Request::is('about-us') and Request::segment(1) == 'about-us') ? 'active' : null }}">
			<a href="{{ URL::Route('page', 'about-us')}}">About us </a>
		</li>
		<li class="{{ (Request::is('blog/*') or Request::is('blog')) ? 'active' : null }}">
			<a href="{{ URL::Route('article.list')}}">Blog</a>
		</li>
		
	</ul>
</nav>
