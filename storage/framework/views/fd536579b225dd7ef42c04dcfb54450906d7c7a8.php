
<?php $__env->startSection('content'); ?>
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-7 col-auto">
								<h3 class="page-title">Supplier</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
									<li class="breadcrumb-item active">Supplier</li>
								</ul>
							</div>
							<div class="col-sm-5 col">
								<a href="add-supplier" class="btn btn-primary float-right mt-2">Add New</a>
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
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>ID</th>
													<th>Product</th>
													<th>Name</th>
													<th>Phone</th>
													<th>Email</th>
													<th>Address</th>
													<th>Company</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>25</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product.jpg" alt="product image"></span>
															Abilify
														</h2>
													</td>
													<td>Discarsa</td>
													<td>+51 1542565</td>
													<td>Discarsa@gmail.com</td>
													<td>Paseo Los Robles</td>
													<td>Discarsa Nicaragua</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-supplier">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>33</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product1.jpg" alt="product image"></span>
															Actamin
														</h2>
													</td>
													<td>Proveedor</td>
													<td>+51 23687541</td>
													<td>proveedor@gmail.com</td>
													<td>Av circunvalación # 234	</td>
													<td>mi farmacia</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-supplier">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a href="javascript:void(0);" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#deleteConfirmModal">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												<tr>
													<td>42</td>
													<td>
														<h2 class="table-avatar">
															<span class="avatar avatar-sm mr-2"><img class="avatar-img" src="../assets_pharmacy/img/product/product2.jpg" alt="product image"></span>
															Adderall 
														</h2>
													</td>
													<td>Discarsa</td>
													<td>+51 96588552</td>
													<td>Discarsa@gmail.com</td>
													<td>Paseo Los Robles</td>
													<td>Discarsa Nicaragua</td>
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light" href="edit-supplier">
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
		<div class="modal fade" id="deleteConfirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout_pharmacy_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doccure_laravel\template\resources\views/pharmacy-admin/supplier.blade.php ENDPATH**/ ?>