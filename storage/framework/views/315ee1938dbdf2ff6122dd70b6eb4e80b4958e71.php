<?php $__env->startSection('title', 'Transaksi'); ?>
<?php $__env->startSection('active-transaksi', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.transaksi', [])->html();
} elseif ($_instance->childHasBeenRendered('OrQ4dKM')) {
    $componentId = $_instance->getRenderedChildComponentId('OrQ4dKM');
    $componentTag = $_instance->getRenderedChildComponentTagName('OrQ4dKM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('OrQ4dKM');
} else {
    $response = \Livewire\Livewire::mount('petugas.transaksi', []);
    $html = $response->html();
    $_instance->logRenderedChild('OrQ4dKM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.transaksi>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/transaksi/index.blade.php ENDPATH**/ ?>