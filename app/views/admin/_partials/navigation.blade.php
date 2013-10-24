@if(Sentry::check())
	<ul class="nav">
		<li class="{{ Request::is('admin/pages*') ? 'active': null }}">
			<a href="{{ URL::Route('admin.pages.index', 'Pages')}}">
				<i class="icon-book"></i> Pages
			</a>
		</li>
		<li class="{{ Request::is('admin/articles*') ? 'active': null }}">
			<a href="{{ URL::Route('admin.articles.index', 'Articles')}}">
				<i class="icon-edit"></i> Articles
			</a>
		</li>
		<li>
			<a href="{{ URL::Route('admin.logout', 'Logout')}}">
				<i class="icon-lock"></i> Logout
			</a>
		</li>
	</ul>
@endif