@if(Sentry::check())
	<ul class="nav navbar-nav">
		<li class="{{ Request::is('admin/pages*') ? 'active': null }}">
			<a href="{{ URL::Route('admin.pages.index', 'Pages')}}">
				<i class="fa fa-book"></i> Pages
			</a>
		</li>
		<li class="{{ Request::is('admin/articles*') ? 'active': null }}">
			<a href="{{ URL::Route('admin.articles.index', 'Articles')}}">
				<i class="fa fa-edit"></i> Articles
			</a>
		</li>
		<li>
			<a href="{{ URL::Route('admin.logout', 'Logout')}}">
				<i class="fa fa-lock"></i> Logout
			</a>
		</li><li>
			<a href="{{ URL::Route('admin.changePass', 'Change Password')}}">
				<i class="fa fa-lock"></i> Change Password
			</a>
		</li>
	</ul>
@endif