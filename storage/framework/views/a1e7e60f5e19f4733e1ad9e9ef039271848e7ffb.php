<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('active-dashboard', 'active'); ?>


<?php $__env->startSection('content'); ?>
    <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($count_buku); ?></h3>

                <p>Buku</p>
              </div>
              <div class="icon">
                <i class="fas fa-book"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($count_user); ?></h3>

                <p>Peminjam</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e($count_selesai_dipinjam); ?></h3>

                <p>Selesai Dipinjam</p>
              </div>
              <div class="icon">
                 <i class="far fa-check-circle"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($count_sedang_dipinjam); ?></h3>

                <p>Sedang Dipinjam</p>
              </div>
              <div class="icon">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      
        <div class="row my-4">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                 <canvas id="myChart" height="125"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Buku Terbaru</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Judul</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->judul); ?></td>
                        <td><?php echo e($item->created_at->diffForHumans()); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>User Terbaru</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->created_at->diffForHumans()); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Selesai Dipinjam</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode Pinjam</th>
                      <th>Tanggal Pengembalian</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $selesai_dipinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->kode_pinjam); ?></td>
                        <td><?php echo e($item->tanggal_pengembalian); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5>Sedang Dipinjam</h5>
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Kode Pinjam</th>
                      <th>Tanggal Pinjam</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $sedang_dipinjam; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->kode_pinjam); ?></td>
                        <td><?php echo e($item->tanggal_pinjam); ?></td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('admin-lte/script/chart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('chart-script'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('petugas.chart-script', [])->html();
} elseif ($_instance->childHasBeenRendered('auLSEb6')) {
    $componentId = $_instance->getRenderedChildComponentId('auLSEb6');
    $componentTag = $_instance->getRenderedChildComponentTagName('auLSEb6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('auLSEb6');
} else {
    $response = \Livewire\Livewire::mount('petugas.chart-script', []);
    $html = $response->html();
    $_instance->logRenderedChild('auLSEb6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:petugas.chart-script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin-lte/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/dashboard/index.blade.php ENDPATH**/ ?>