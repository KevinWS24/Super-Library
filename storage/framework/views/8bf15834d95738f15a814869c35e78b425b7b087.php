<?php $__env->startSection('title', 'Penerbit'); ?>
<?php $__env->startSection('active-penerbit', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.penerbit', [])->html();
} elseif ($_instance->childHasBeenRendered('V99rsZi')) {
    $componentId = $_instance->getRenderedChildComponentId('V99rsZi');
    $componentTag = $_instance->getRenderedChildComponentTagName('V99rsZi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('V99rsZi');
} else {
    $response = \Livewire\Livewire::mount('petugas.penerbit', []);
    $html = $response->html();
    $_instance->logRenderedChild('V99rsZi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.penerbit>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/penerbit/index.blade.php ENDPATH**/ ?>