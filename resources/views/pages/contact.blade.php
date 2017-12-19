@extends('master') 
@section('content')
<section class="contact-detail">
	<div class="container">
		<div class="section-title">

			<h2>Get in Touch</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius consequat magna, id molestie ipsum volutpat quis.
				Suspendisse consectetur fringilla suctus.</p>
		</div>
		<div class="contact-boxView">
			<div class="row">
				<div class="col-sm-4">
					<div class="contact-box yello">
						<div class="icon-box">
							<i class="fa fa-map-marker"></i>
						</div>
						<h4>location</h4>
						<p>249 Ung Van Khiem Street, Binh Thanh Dist, HCM City</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-box green">
						<div class="icon-box">
							<i class="fa fa-phone"></i>
						</div>
						<h4>phone number</h4>
						<p>(02)121 321 322</p>
						<p>(02)121 321 322</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-box red">
						<div class="icon-box">
							<i class="fa fa-envelope"></i>
						</div>
						<h4>email address</h4>
						<p>
							<a href="mailTo:hello@gmail.com">hello@gmail.com</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-message">
	<div class="container">
		<div class="section-title">
			<h2>SENT A MESSAGE</h2>
		</div>
		<div class="form-filde">
			<form action="thank-you.html" method="post">
				<div class="row">
					<div class="col-sm-6">
						<div class="input-box">
							<input type="text" placeholder="Name" data-validation="required" name="name">
						</div>
						<div class="input-box">
							<input type="text" placeholder="Email" data-validation="required" name="email">
						</div>
						<div class="input-box">
							<input type="text" placeholder="Subject" data-validation="required" name="subject">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="input-box">
							<textarea placeholder="Message" data-validation="required" name="message"></textarea>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="submit-box">
							<input type="submit" value="SEND" class="btn">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection