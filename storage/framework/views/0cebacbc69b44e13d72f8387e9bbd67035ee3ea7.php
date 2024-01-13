<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.keranjang', [])->html();
} elseif ($_instance->childHasBeenRendered('rIKgZBC')) {
    $componentId = $_instance->getRenderedChildComponentId('rIKgZBC');
    $componentTag = $_instance->getRenderedChildComponentTagName('rIKgZBC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('rIKgZBC');
} else {
    $response = \Livewire\Livewire::mount('peminjam.keranjang', []);
    $html = $response->html();
    $_instance->logRenderedChild('rIKgZBC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.keranjang>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/peminjam/keranjang/index.blade.php ENDPATH**/ ?>