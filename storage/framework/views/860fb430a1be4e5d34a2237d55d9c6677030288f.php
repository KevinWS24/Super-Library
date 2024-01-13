<?php $__env->startSection('title', 'Rak'); ?>
<?php $__env->startSection('active-rak', 'active'); ?>
<?php $__env->startSection('active-data-master', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.rak', [])->html();
} elseif ($_instance->childHasBeenRendered('4ccZFsR')) {
    $componentId = $_instance->getRenderedChildComponentId('4ccZFsR');
    $componentTag = $_instance->getRenderedChildComponentTagName('4ccZFsR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4ccZFsR');
} else {
    $response = \Livewire\Livewire::mount('petugas.rak', []);
    $html = $response->html();
    $_instance->logRenderedChild('4ccZFsR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.rak>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/rak/index.blade.php ENDPATH**/ ?>