<?php $page="create_password";?>

<?php $__env->startSection('content'); ?>
<!-- Page Content -->
<div class="content" style="min-height:205px;"> 
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">

							
							
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
										<form action="<?php echo e(route('complete-signup')); ?>" method="post">
											<?php echo csrf_field(); ?>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="firstname" value="<?php echo e(old('firstname')); ?>">
												<label class="focus-label">First Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="lastname" value="<?php echo e(old('lastname')); ?>">
												<label class="focus-label">Last Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="phone" class="form-control floating" name="phone" value="<?php echo e(old('phone')); ?>">
												<label class="focus-label">Mobile Number</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password"> 
												<label class="focus-label">Create Password</label>
												<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($message); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="c_password">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="text-right">
												<a class="forgot-link" href="login">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
											
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\consult\resources\views/auth/complete_registration.blade.php ENDPATH**/ ?>