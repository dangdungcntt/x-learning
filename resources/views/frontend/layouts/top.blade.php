<div class="quck-nav">
	<div class="container">
		<div class="contact-no">
			<a href="#">
				<i class="fa fa-map-marker"></i>Brooklyn, NY 10036, United States</a>
		</div>
		<div class="contact-no">
			<a href="#">
				<i class="fa fa-phone"></i>+299 97 39 82</a>
		</div>
		<div class="contact-no">
			<a href="#">
				<i class="fa fa-globe"></i>academy.com</a>
		</div>
		<div class="quck-right">
			
			<div class="right-link">
				@guest
                    <a href="{{ route('login') }}"><i class="fa  fa-sign-in"></i>Login </a> /
					<a href="{{ route('register') }}"> <i class="fa  fa-user-plus"></i>Register</a>
				@else
					<a href="/my-courses">
						<i class="fa fa-book"></i>My Courses
					</a> /
					<a href="/account">
						<i class="fa fa-user"></i>My Account
					</a> /
					<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
						<i class="fa fa-sign-out"></i>Logout
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</a>
				@endguest
			</div>
		</div>
	</div>
</div>