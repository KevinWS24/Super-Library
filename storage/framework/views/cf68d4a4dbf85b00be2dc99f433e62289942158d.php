<?php $__env->startSection('title', 'Chart'); ?>
<?php $__env->startSection('active-chart', 'active'); ?>

<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart', [])->html();
} elseif ($_instance->childHasBeenRendered('1BfSfC9')) {
    $componentId = $_instance->getRenderedChildComponentId('1BfSfC9');
    $componentTag = $_instance->getRenderedChildComponentTagName('1BfSfC9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1BfSfC9');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart', []);
    $html = $response->html();
    $_instance->logRenderedChild('1BfSfC9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin-lte/script/chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('chart-script'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart-script', [])->html();
} elseif ($_instance->childHasBeenRendered('jqWJI7T')) {
    $componentId = $_instance->getRenderedChildComponentId('jqWJI7T');
    $componentTag = $_instance->getRenderedChildComponentTagName('jqWJI7T');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jqWJI7T');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart-script', []);
    $html = $response->html();
    $_instance->logRenderedChild('jqWJI7T', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart-script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/chart/index.blade.php ENDPATH**/ ?>