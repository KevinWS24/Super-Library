<?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
<?php endif; ?>
<?php if(session('gagal')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('gagal')); ?>

    </div>
<?php endif; ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/admin-lte/flash.blade.php ENDPATH**/ ?>