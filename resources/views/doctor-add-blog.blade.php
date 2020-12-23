<?php $page="doctor-add-blog";?>
@extends('layout.mainlayout')
@section('content')
	
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Blog</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Add Blog</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>Dr. Darren Elder</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li>
												<a href="doctor-dashboard">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="appointments">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="my-patients">
													<i class="fas fa-user-injured"></i>
													<span>My Patients</span>
												</a>
											</li>
											<li>
												<a href="schedule-timings">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											<li>
												<a href="invoices">
													<i class="fas fa-file-invoice"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
												<a href="reviews">
													<i class="fas fa-star"></i>
													<span>Reviews</span>
												</a>
											</li>
											<li>
												<a href="chat-doctor">
													<i class="fas fa-comments"></i>
													<span>Message</span>
													<small class="unread-msg">23</small>
												</a>
											</li>
											<li>
												<a href="doctor-profile-settings">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="social-media">
													<i class="fas fa-share-alt"></i>
													<span>Social Media</span>
												</a>
											</li>
											<li>
												<a href="doctor-change-password">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="index">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="doc-review review-listing custom-edit-service">

								<div class="row mb-5">
                                    <div class="col">
                                        <ul class="nav nav-tabs nav-tabs-solid">
                                            <li class="nav-item">
                                                <a class="nav-link" href="doctor-blog">Acitive Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="doctor-pending-blog">Pending Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-primary btn-sm" href="doctor-add-blog"><i class="fas fa-plus mr-1"></i> Add Blog</a>
                                    </div>
                                </div>
							
								<!-- Add Blog -->
								<div class="card">
									<div class="card-body">	
										<h3 class="pb-3">Add Blog</h3>
						
										<form method="post" enctype="multipart/form-data" autocomplete="off" id="update_service" action="doctor-blog">
											<input type="hidden" name="csrf_token_name" value="0146f123a4c7ae94253b39bca6bd5a5e">

											<div class="service-fields mb-3">
												<div class="row">
													<div class="col-lg-12">
														<div class="form-group">
															<label>Blog Title <span class="text-danger">*</span></label>
															<input type="hidden" name="service_id" id="service_id" value="18">
															<input class="form-control" type="text" name="service_title" id="service_title" value="Doccure – Making your clinic painless visit?" required="">
														</div>
													</div>
												</div>
											</div>
											
											<div class="service-fields mb-3">
												<div class="row">
													<div class="col-lg-6">
														<div class="form-group">
															<label>Category <span class="text-danger">*</span></label>
															<select class="form-control select" name="category" required=""> 
																<option value="1">Automobile</option>
																<option value="2" selected="selected">Construction</option>
																<option value="3">Interior</option>
																<option value="4">Cleaning</option>
																<option value="5">Electrical</option>
																<option value="6">Carpentry</option>
																<option value="7">Computer</option>
																<option value="8">Painting</option>
																<option value="9">Car Wash</option>
																<option value="10">Category Test</option>
																<option value="11">dfdf</option>
																<option value="12">Equipment</option>
																<option value="13">Test category1</option>
																<option value="14">Farming</option>
																<option value="15">Test Category02</option>
																<option value="16">Laundry</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label>Sub Category <span class="text-danger">*</span></label>
															<select class="form-control select" name="subcategory"> 
															<option value="5">Others</option>
															<option value="6">Others</option>
															<option value="7">Others</option>
															<option value="8">House cleaning</option>
															<option value="9">Others</option>
															<option value="10">Others</option>
															<option value="11">Others</option>
															<option value="12">Others</option>
															<option value="13">Full Car Wash</option>
															<option value="14" selected="selected">Testing category</option>
															<option value="15">Test Sub category</option>
															<option value="16">Harvesting pine</option>
															<option value="17">Test Sub category name</option>
															<option value="18">Test Sub category name</option>
														</select>
														</div>
													</div>
												</div>
											</div>
											
											<div class="service-fields mb-3">
												<div class="row">
													<div class="col-lg-12">
														<div class="form-group">
															<label>Descriptions <span class="text-danger">*</span></label>
															<textarea id="about" class="form-control service-desc" name="about">note.</textarea>
														</div>
													</div>
												</div>
											</div>
											
											<div class="service-fields mb-3">
												<div class="row">
													<div class="col-lg-12">
														<div class="service-upload">
															<i class="fas fa-cloud-upload-alt"></i>
															<span>Upload Blog Images *</span>
															<input type="file" name="images[]" id="images" multiple="" accept="image/jpeg, image/png, image/gif,">
														
														</div>	
														<div id="uploadPreview">
															<ul class="upload-wrap">
																<li>
																	<div class=" upload-images">
																		<img alt="Blog Image" src="assets/img/img-01.jpg">
																	</div>
																</li>
																<li>
																	<div class=" upload-images">
																		<img alt="Blog Image" src="assets/img/img-02.jpg">
																	</div>
																</li>
																<li>
																	<div class=" upload-images">
																		<img alt="Blog Image" src="assets/img/img-03.jpg">
																	</div>
																</li>
															</ul>
														</div>
														
													</div>
												</div>
											</div>
											<div class="service-fields mb-3">
												<div class="row">
													<div class="col-lg-12">
														<div class="form-group">
															<label>Video id <span class="text-danger">*</span></label>
															<input type="hidden" name="video_id" id="video_id" value="18">
															<input class="form-control" type="text" name="video_id" id="video_id" value="Rf34rhkWW1" required="">
														</div>
													</div>
												</div>
											</div>
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
											</div>
										</form>

									</div>
								</div>
								<!-- /Add Blog -->

							</div>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
            </div>
            <!-- Model -->
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title"></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<p id="acc_msg"></p>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="deleteNotConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Active Service?</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<p id="acc_msg">Service is Booked and Inprogress..</p>
					</div>
					<div class="modal-footer">
						
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">OK</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Model -->
@endsection