<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <div id="app">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('peminjam.kategori', [])->html();
} elseif ($_instance->childHasBeenRendered('oY6h8aX')) {
    $componentId = $_instance->getRenderedChildComponentId('oY6h8aX');
    $componentTag = $_instance->getRenderedChildComponentTagName('oY6h8aX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oY6h8aX');
} else {
    $response = \Livewire\Livewire::mount('peminjam.kategori', []);
    $html = $response->html();
    $_instance->logRenderedChild('oY6h8aX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:peminjam.kategori>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>