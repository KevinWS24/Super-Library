<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.buku', [])->html();
} elseif ($_instance->childHasBeenRendered('4GvxOhK')) {
    $componentId = $_instance->getRenderedChildComponentId('4GvxOhK');
    $componentTag = $_instance->getRenderedChildComponentTagName('4GvxOhK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('4GvxOhK');
} else {
    $response = \Livewire\Livewire::mount('peminjam.buku', []);
    $html = $response->html();
    $_instance->logRenderedChild('4GvxOhK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.buku>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\kevin\Documents\Kuliah\Semester 4\Web Programming - LAB\Rancangan\8\laravel8_perpustakaan-master\resources\views/peminjam/buku/index.blade.php ENDPATH**/ ?>