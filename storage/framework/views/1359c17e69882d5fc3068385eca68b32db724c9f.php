<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <input wire:model="bulan_tahun" type="month" class="form-control" max="<?php echo e(date('Y-m')); ?>">
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <canvas id="myChart" height="125"></canvas>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/livewire/petugas/chart.blade.php ENDPATH**/ ?>