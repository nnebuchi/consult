<?php $page="create_password";?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Content -->
<div class="content" style="min-height:205px;"> 
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">

							{{-- @if ($errors->any())
								@php
									dd();
								@endphp
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif --}}
							
							<h1 class="text-center">Complete your registration</h1>
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Enter your email to get started </h3>
										</div>
										
										<!-- Register Form -->
										<form action="{{ route('complete-signup') }}" method="post">
											@csrf
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="firstname" value="{{ old('firstname') }}">
												<label class="focus-label">First Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="lastname" value="{{ old('lastname') }}">
												<label class="focus-label">Last Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="phone" class="form-control floating" name="phone" value="{{ old('phone') }}">
												<label class="focus-label">Mobile Number</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password"> 
												<label class="focus-label">Create Password</label>
												@error('password')
													<p class="text-danger">{{ $message }}</p>
												@enderror
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="c_password">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="login">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
											{{-- <div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div> --}}
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
            </div>
@endsection