<?php $__env->startSection('title', 'Kategori'); ?>
<?php $__env->startSection('active-kategori', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.kategori', [])->html();
} elseif ($_instance->childHasBeenRendered('R7NQV1F')) {
    $componentId = $_instance->getRenderedChildComponentId('R7NQV1F');
    $componentTag = $_instance->getRenderedChildComponentTagName('R7NQV1F');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('R7NQV1F');
} else {
    $response = \Livewire\Livewire::mount('petugas.kategori', []);
    $html = $response->html();
    $_instance->logRenderedChild('R7NQV1F', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.kategori>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/kategori/index.blade.php ENDPATH**/ ?>