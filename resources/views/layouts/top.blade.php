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
				<a href="#">
					<i class="fa fa-handshake-o"></i>Help Center</a>
			</div>
			<div class="right-link">
				<a href="#">
					<i class="fa fa-headphones"></i>Online Support</a>
			</div>
			<div class="right-link language-select">
				<a href="javascript:void(0);">
					<i class="fa fa-language"></i>English</a>
				<ul class="language-list">
					<li>
						<a href="#">Viet Nam</a>
					</li>
				</ul>
			</div>
			
			<div class="right-link">
				@guest
                    <a href="{{ route('login') }}"><i class="fa  fa-user"></i>Login</a>
                    <!-- <a href="{{ route('register') }}"><i class="fa  fa-user"></i>Register</a> -->
				@else
					<a href="/account">
					<i class="fa  fa-user"></i>My Account</a>

						<!-- <ul class="dropdown-menu">
							<li>
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li> -->
				@endguest
			</div>
		</div>
	</div>
</div>