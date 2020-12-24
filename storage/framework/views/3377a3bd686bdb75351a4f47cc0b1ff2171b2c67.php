<h3>Hello <?php echo e($user->name); ?></h3>
<br><br>
Welcome To Consult!
<br>

<p>Your email has brrn registered, kindly click the link below to complete your registration</p>
<?php
	$email = session('email');
	$verification_code = session('verification_code');
?>
<p><a class="btn" href="<?php echo e(url('verify-email/'.$email.'/'.$verification_code)); ?>"> Click here
	
	
</a></p>
<br><br>

<br><br>
Thank You.<?php /**PATH C:\xampp\htdocs\consult\resources\views/mail/user-regmail.blade.php ENDPATH**/ ?>