<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('Raiyz10')) {
    $componentId = $_instance->getRenderedChildComponentId('Raiyz10');
    $componentTag = $_instance->getRenderedChildComponentTagName('Raiyz10');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Raiyz10');
} else {
    $response = \Livewire\Livewire::mount('peminjam.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('Raiyz10', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/peminjam/buku/index.blade.php ENDPATH**/ ?>