<?php if(!is_null(session('msg'))): ?>
  <?php
    $message=session('msg');
    $myalert=session('alert');
  ?>
  
  <div class="alert text-center alert-<?php echo e(session('alert')); ?> alert-dismissible fade show mt-3" role="alert">
    <strong>Alert!</strong> <?php echo e(session('msg')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
    session()->forget('msg');
    session()->forget('alert');
    ?>
<?php endif; ?> <?php /**PATH C:\xampp\htdocs\consult\resources\views/layout/shared/alert.blade.php ENDPATH**/ ?>