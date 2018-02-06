@extends('frontend.master')
@section('content')
<div class="my-accountPage">
	<div class="container">
		<div class="my-account">
			<div class="account-tab">
				<ul>
					<li class="active">
						<a href="javascript:void(0);" id="profile">Profile</a>
					</li>
					<li>
						<a href="javascript:void(0);" id="order">Order</a>
					</li>
					<li>
						<a href="javascript:void(0);" id="changePassword">Change Password</a>
					</li>
				</ul>
			</div>
			<div class="tab-content profile-con open">
				<form class="form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-2">Name:</label>
							<div class="col-sm-10">
								<input type="text" value="{{$user['name']}}" class="form-control" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Birthday:</label>
							<div class="col-sm-10">
								<input type="date" value="{{$user['birthday'] ?? ''}}" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="pwd">Gender:</label>
							<div class="col-sm-10">
								<label class="label_radio {{$user['sex'] ? 'r_on' : ''}}">
									<input type="radio" name="sex" {{$user['sex'] ? 'checked' : ''}} value="1"> Male
								</label>
								<label class="label_radio {{$user['sex'] ? '' : 'r_on'}}">
									<input type="radio" name="sex" {{$user['sex'] ? '' : 'checked'}} value="0"> Female
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Email:</label>
							<div class="col-sm-10">
								<input type="email" value="{{$user['email']}}" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Phone:</label>
							<div class="col-sm-10">
								<input type="text" value="{{$user['phone']}}" class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Address:</label>
							<div class="col-sm-10">
								<input type="text" value="{{$user['address']}}" class="form-control" placeholder="Address">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2">Info:</label>
							<div class="col-sm-10">
								<textarea style="resize: vertical;display: inline-block;width: 99%;overflow-x: hidden" class="form-control" rows="5">{{$user['info'] ?? ''}}</textarea>
							</div>
						</div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button class="btn">Update profile</button>
                            </div>
                        </div>
					</form>
			</div>
			<div class="tab-content order-con">
				<table class="booking-viewTable">
					<tr>
						<th>Courses ID</th>
						<th class="detail"> Courses Details</th>
						<th>Purchase Date</th>
						<th>Amount</th>
					</tr>
					<tr>
						<td>
							<span class="small-heading">Courses ID</span>258452112500</td>
						<td class="detail">
							<span class="small-heading">Courses Details</span>
							<div class="detailTd">
								<label>Hiraba Farm</label>
								<p>Behind Shalby Hospital, Garden Road, Prahlad Nagar , Ahmedabad-380015</p>
							</div>
						</td>
						<td>
							<span class="small-heading">Purchase Date</span>25
							<sup>th</sup> Aug 2015</td>
						<td>
							<span class="small-heading">Amount</span>Rs. 42,710</td>
					</tr>
				</table>
			</div>
			<div class="tab-content changePassword-con">
				<div class="change-password ">
					<div class="input-box">
						<input type="text" placeholder="Current Password">
					</div>
					<div class="input-box">
						<input type="text" placeholder="New Password">
					</div>
					<div class="input-box">
						<input type="text" placeholder="Confirm Password">
					</div>
					<div class="submit-box">
						<input type="submit" value="Save" class="btn">
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="our-advantages">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="advantages-box">
						<div class="img">
							<img src="images/learn-icon.png" alt="">
						</div>
						<h3>Learn at your own place</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stanypesetting,
							</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="advantages-box">
						<div class="img">
							<img src="images/save-timeIcon.png" alt="">
						</div>
						<h3>Save time and money</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
							dummy </p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="advantages-box">
						<div class="img">
							<img src="images/online-learningIcon.png" alt="">
						</div>
						<h3>100% Online learning</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
							dummy </p>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection