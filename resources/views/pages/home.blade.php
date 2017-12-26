<!DOCTYPE html>
<html lang="en">

<link href="{{ asset('css/loader.css') }}" rel="stylesheet">
	<!--  loader css -->
@include('layouts.head')

<body>
	<div class="wapper">
		<div id="loader-wrapper">
			<div id="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		@include('layouts.top')
        @include('layouts.header')
		
		<section class="banner">
			<div class="banner-img">
				<img src="images/banner/banner-img1.jpg" alt="">
			</div>
			<div class="banner-text">
				<div class="container">
					<h1>Prepare for exams the smart way</h1>
					<p>Join us today to know how you can ace entrance exams </p>
					<div class="search-box">
						<input type="text" placeholder="Search here">
						<input type="submit" value="">
					</div>
					<div class="learning-btn">
						<a href="#" class="btn">Start learning now</a>
					</div>
				</div>
			</div>
		</section>
		<section class="our-course">
			<div class="container">
				<div class="section-title">
					<h2>Our Courses</h2>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="course-box">
							<div class="img">
								<img src="images/courses/courses-img1.jpg" alt="">
								<div class="course-info">
									<div class="date">
										<i class="fa fa-calendar"></i>16-09-2016</div>
									<div class="date">
										<i class="fa fa-clock-o"></i>2 Days </div>
									<div class="favorite">
										<a href="#">
											<i class="fa fa-heart-o"></i>
										</a>
									</div>
								</div>
								<div class="price">$100</div>
							</div>
							<div class="course-name">Management
								<span>
									<em>By </em>Sarah Johnson</span>
							</div>
							<div class="comment-row">
								<div class="rating">
									<div class="fill" style="width:45%"></div>
								</div>
								<div class="box">
									<i class="fa fa-users"></i>35 Student</div>
								<div class="enroll-btn">
									<a href="#" class="btn">Enroll</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="course-box">
							<div class="img">
								<img src="images/courses/courses-img2.jpg" alt="">
								<div class="course-info">
									<div class="date">
										<i class="fa fa-calendar"></i>17-09-2016</div>
									<div class="date">
										<i class="fa fa-clock-o"></i>1 Days </div>
									<div class="favorite">
										<a href="#">
											<i class="fa fa-heart"></i>
										</a>
									</div>
								</div>
								<div class="price free">free</div>
							</div>
							<div class="course-name">Banking
								<span>
									<em>By </em>Michael Windzor</span>
							</div>
							<div class="comment-row">
								<div class="rating">
									<div class="fill" style="width:45%"></div>
								</div>
								<div class="box">
									<i class="fa fa-users"></i>30 Student</div>
								<div class="enroll-btn">
									<a href="#" class="btn">Enroll</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="course-box">
							<div class="img">
								<img src="images/courses/courses-img3.jpg" alt="">
								<div class="course-info">
									<div class="date">
										<i class="fa fa-calendar"></i>17-09-2016</div>
									<div class="date">
										<i class="fa fa-clock-o"></i>1 Days </div>
									<div class="favorite">
										<a href="#">
											<i class="fa fa-heart-o"></i>
										</a>
									</div>
								</div>
								<div class="price">$276</div>
							</div>
							<div class="course-name">Government Recruitment
								<span>
									<em>By </em>Peter Parker</span>
							</div>
							<div class="comment-row">
								<div class="rating">
									<div class="fill" style="width:45%"></div>
								</div>
								<div class="box">
									<i class="fa fa-users"></i>30 Student</div>
								<div class="enroll-btn">
									<a href="#" class="btn">Enroll</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="preparation">
			<div class="container">
				<div class="section-title white">
					<h2>Maximize your preparation</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
				</div>
				<div class="preparation-view">
					<div class="item">
						<div class="icon">
							<img src="images/preparation-icon1.png" alt="">
						</div>
						<div class="course-name">Highest Quality Content by IIM Alumni
							<span>CONTENT</span>
						</div>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
					</div>
					<div class="item">
						<div class="icon">
							<img src="images/preparation-icon2.png" alt="">
						</div>
						<div class="course-name">Detailed Analysis with Performance Indicators
							<span>ANALYSIS</span>
						</div>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
					</div>
					<div class="item">
						<div class="icon">
							<img src="images/preparation-icon1.png" alt="">
						</div>
						<div class="course-name">Highest Quality Content by IIM Alumni
							<span>CONTENT</span>
						</div>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
					</div>
					<div class="item">
						<div class="icon">
							<img src="images/preparation-icon2.png" alt="">
						</div>
						<div class="course-name">Detailed Analysis with Performance Indicators
							<span>ANALYSIS</span>
						</div>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
							of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="student-feedback">
			<div class="container">
				<div class="section-title">
					<h2>What our students say</h2>
				</div>
				<div class="feedback-slider">
					<div class="item">
						<div class="student-img">
							<img src="images/user-img/student-img1.png" alt="">
						</div>
						<div class="student-name">Hardik Davaria</div>
						<div class="student-designation">software engineer</div>
						<p>
							<i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
							standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
							type specimen book. It has survived not only five centuries, but also the leap into electronic.
							<i class="fa fa-quote-right"></i>
						</p>
					</div>
					<div class="item">
						<div class="student-img">
							<img src="images/user-img/student-img1.png" alt="">
						</div>
						<div class="student-name">Hardik Davaria</div>
						<div class="student-designation">software engineer</div>
						<p>
							<i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
							standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
							type specimen book. It has survived not only five centuries, but also the leap into electronic.
							<i class="fa fa-quote-right"></i>
						</p>
					</div>
				</div>
				<div class="more-stories">
					<a href="#" class="btn">More Student Stories</a>
				</div>
			</div>
		</section>
		<section class="our-team">
			<div class="section-title">
				<h2>Our Team</h2>
			</div>
			<div class="member-slider">
				<div class="item">
					<div class="member-info">
						<div class="img">
							<img src="images/team-member/member-img1.png" alt="">
						</div>
						<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry it has survived not only five centuries,
							but also the leap into electronic typesetting, unchanged...</p>
						<p>It was popularised in the 1960s with the release of recently with desktop publishing software like Aldus PageMaker
							including versions of Lorem Ipsum.</p>
						<div class="member-name">-Hardik Chauhan
							<span>Strategizer</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="member-info">
						<div class="img">
							<img src="images/team-member/member-img2.png" alt="">
						</div>
						<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry it has survived not only five centuries,
							but also the leap into electronic typesetting, unchanged...</p>
						<p>It was popularised in the 1960s with the release of recently with desktop publishing software like Aldus PageMaker
							including versions of Lorem Ipsum.</p>
						<div class="member-name">-Dhruv Patel
							<span>Geek-in-charge, Coder extraordinaire</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="member-info">
						<div class="img">
							<img src="images/team-member/member-img3.png" alt="">
						</div>
						<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry it has survived not only five centuries,
							but also the leap into electronic typesetting, unchanged...</p>
						<p>It was popularised in the 1960s with the release of recently with desktop publishing software like Aldus PageMaker
							including versions of Lorem Ipsum.</p>
						<div class="member-name">-Ravi Chauhan
							<span>A.K.A Freshie </span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="member-info">
						<div class="img">
							<img src="images/team-member/member-img1.png" alt="">
						</div>
						<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry it has survived not only five centuries,
							but also the leap into electronic typesetting, unchanged...</p>
						<p>It was popularised in the 1960s with the release of recently with desktop publishing software like Aldus PageMaker
							including versions of Lorem Ipsum.</p>
						<div class="member-name">-Hardik Chauhan
							<span>Strategizer</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="member-info">
						<div class="img">
							<img src="images/team-member/member-img2.png" alt="">
						</div>
						<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry it has survived not only five centuries,
							but also the leap into electronic typesetting, unchanged...</p>
						<p>It was popularised in the 1960s with the release of recently with desktop publishing software like Aldus PageMaker
							including versions of Lorem Ipsum.</p>
						<div class="member-name">-Dhruv Patel
							<span>Geek-in-charge, Coder extraordinaire</span>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="member-info">
						<div class="img">
							<img src="images/team-member/member-img3.png" alt="">
						</div>
						<p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry it has survived not only five centuries,
							but also the leap into electronic typesetting, unchanged...</p>
						<p>It was popularised in the 1960s with the release of recently with desktop publishing software like Aldus PageMaker
							including versions of Lorem Ipsum.</p>
						<div class="member-name">-Ravi Chauhan
							<span>A.K.A Freshie </span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="graph-view">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="graph-title">climbing the Percentile Ladder</div>
						<img src="images/graph-img.png" alt="">
					</div>
					<div class="col-sm-7">
						<div class="point-view">
							<div class="graph-point">
								<i class="fa fa-area-chart"></i>
								<h4>Lorem Ipsum is simply dummy text</h4>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
									It was popularised in the 1960s with the release of Letraset sheets containing.
								</p>
							</div>
							<div class="graph-point">
								<i class="fa fa-users"></i>
								<h4>Lorem Ipsum is simply dummy text</h4>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
									It was popularised in the 1960s with the release of Letraset sheets containing.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="start-learning">
			<div class="container">
				<p>I've read enough. Take me to Exam Formula</p>
				<a href="#" class="btn">Start learning now</a>
			</div>
		</section>

		@include('layouts.footer')

    </div>
		@include('layouts.core-scripts')
</body>
</html>

