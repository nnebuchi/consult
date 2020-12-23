<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <?php if(!Route::is(['product-list','invoice','edit-supplier','edit-product','customer-orders','settings','profile','invoice-report','transactions-list','add-supplier','products','add-product','outstock','expired','categories','purchase','add-purchase','order','sales','supplier','edit-purchase'])): ?>
        <title>Doccure -Pharmacy Dashboard</title>
        <?php endif; ?>
        <?php if(Route::is(['products'])): ?>
        <title>Doccure - Products Page</title>
        <?php endif; ?>
        <?php if(Route::is(['add-product'])): ?>
        <title>Doccure - Add Product Page</title>
        <?php endif; ?>
        <?php if(Route::is(['outstock'])): ?>
        <title>Doccure - Outstock Page</title>
        <?php endif; ?>
        <?php if(Route::is(['expired'])): ?>
        <title>Doccure - Expired Page</title>
        <?php endif; ?>
        <?php if(Route::is(['categories'])): ?>
        <title>Doccure - Categories Page</title>
        <?php endif; ?>
        <?php if(Route::is(['purchase'])): ?>
        <title>Doccure - Purchase Page</title>
        <?php endif; ?>
        <?php if(Route::is(['add-purchase'])): ?>
        <title>Doccure - Add Purchase Page</title>
        <?php endif; ?>
        <?php if(Route::is(['order'])): ?>
        <title>Doccure - Order Page</title>
        <?php endif; ?>
        <?php if(Route::is(['sales'])): ?>
        <title>Doccure - Sales Page</title>
        <?php endif; ?>
        <?php if(Route::is(['supplier'])): ?>
        <title>Doccure - Supplier Page</title>
        <?php endif; ?>
        <?php if(Route::is(['add-supplier'])): ?>
        <title>Doccure - Add Supplier Page</title>
        <?php endif; ?>
        <?php if(Route::is(['transactions-list'])): ?>
        <title>Doccure - Transactions List Page</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice-report'])): ?>
        <title>Doccure - Invoice Report Page</title>
        <?php endif; ?>
        <?php if(Route::is(['profile'])): ?>
        <title>Doccure - Profile</title>
        <?php endif; ?>
        <?php if(Route::is(['settings'])): ?>
        <title>Doccure - Settings Page</title>
        <?php endif; ?>
        <?php if(Route::is(['customer-orders'])): ?>
        <title>Doccure - Customer Order Page</title>
        <?php endif; ?>
        <?php if(Route::is(['edit-product'])): ?>
        <title>Doccure - Edit Product Page</title>
        <?php endif; ?>
        <?php if(Route::is(['edit-purchase'])): ?>
        <title>Doccure - Edit Purchase Page</title>
        <?php endif; ?>
        <?php if(Route::is(['edit-supplier'])): ?>
        <title>Doccure - Edit Supplier Page</title>
        <?php endif; ?>
        <?php if(Route::is(['invoice'])): ?>
        <title>Doccure - Invoice</title>
        <?php endif; ?>
        <?php if(Route::is(['product-list'])): ?>
        <title>Doccure - Product List Page</title>
		<?php endif; ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets_pharmacy/img/favicon.png')); ?>">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/css/bootstrap.min.css')); ?>">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/css/font-awesome.min.css')); ?>">
        <!-- <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/plugins/fontawesome/css/font-awesome.min.css')); ?>"> -->
        
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/plugins/fontawesome/css/all.min.css')); ?>">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/css/feathericon.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/plugins/morris/morris.css')); ?>">
        <!-- Select2 CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/css/select2.min.css')); ?>">
        	<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/css/bootstrap-datetimepicker.min.css')); ?>">
		
		<!-- Full Calander CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/plugins/fullcalendar/fullcalendar.min.css')); ?>">
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/plugins/datatables/datatables.min.css')); ?>">
		
		<!-- <link rel="stylesheet" href="assets/plugins/morris/morris.css"> -->
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="<?php echo e(asset('assets_pharmacy/css/style.css')); ?>"><?php /**PATH C:\xampp\htdocs\doccure_laravel\template\resources\views/layout/partials/head_pharmacy_admin.blade.php ENDPATH**/ ?>