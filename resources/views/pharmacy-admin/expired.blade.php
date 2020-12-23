@extends('layout.mainlayout_pharmacy_admin')
@section('content')
	<!-- Page Wrapper -->
    <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Expired</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Medicine</a></li>
									<li class="breadcrumb-item active">Expired</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-md-12">
						
							<!-- Recent Orders -->
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Brand Name</th>
													<th>Genetic Name</th>
													<th>Category</th>
													<th>Price</th>
													<th>Quantity</th>
													<th>Discount</th>
													<th>Expire</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>6</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Aripiprazole</td>
													<td>Phytopathology‎</td>
													<td>$22</td>
													<td>213</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-medicine">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product2.jpg" alt="product image"></span>
															Adderall
														</h2>
													</td>
													<td>Amphetamine</td>
													<td>Phytopathology‎</td>
													<td>$10</td>
													<td>22</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-medicine">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product1.jpg" alt="product image"></span>
															Actamin
														</h2>
													</td>
													<td>Amphetamine</td>
													<td>Phytopathology‎</td>
													<td>$22</td>
													<td><span class="btn btn-sm bg-danger-light">THERE ONLY 5</span></td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-medicine">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Aripiprazole</td>
													<td>Phytopathology‎</td>
													<td>$22</td>
													<td>120</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-medicine">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Aripiprazole</td>
													<td>Phytopathology‎</td>
													<td>$22</td>
													<td>50</td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-medicine">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>1</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Aripiprazole</td>
													<td>Phytopathology‎</td>
													<td>$22</td>
													<td><span class="btn btn-sm bg-danger-light">THERE ONLY 2</span></td>
													<td>0%</td>
													<td><span class="btn btn-sm bg-danger-light">THE PRODUCT IS EXPIRED</span></td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-medicine">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		<!-- Model -->
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="acc_title">Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<p id="acc_msg">are you sure you want to delete?</p>
					</div>
					<div class="modal-footer">
						<a href="javascript:;" class="btn btn-success si_accept_confirm">Yes</a>
						<button type="button" class="btn btn-danger si_accept_cancel" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modele -->
@endsection