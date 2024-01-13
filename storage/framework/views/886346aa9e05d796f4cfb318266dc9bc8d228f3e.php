<?php if(session('sukses')): ?>
    <div class="alert alert-success">
        <?php echo e(session('sukses')); ?>

    </div>
<?php endif; ?>
<?php if(session('gagal')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('gagal')); ?>

    </div>
<?php endif; ?><?php /**PATH C:\Users\kevin\Documents\Kuliah\Semester 4\Web Programming - LAB\Rancangan\8\laravel8_perpustakaan-master\resources\views/admin-lte/flash.blade.php ENDPATH**/ ?>