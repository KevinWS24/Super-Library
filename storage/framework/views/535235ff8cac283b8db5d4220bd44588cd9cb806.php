 <?php if($edit): ?>
        <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Edit Penerbit</h4>
                <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input wire:model="nama" type="text" class="form-control" id="penerbit" min="1">
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                <span type="button" wire:click="update(<?php echo e($penerbit_id); ?>)" class="btn btn-success">Update</span>
                </div>
            </div>
            </div>
        </div>
    <?php endif; ?><?php /**PATH C:\Users\User\UAS\laravel8_perpustakaan-master\resources\views/petugas/penerbit/edit.blade.php ENDPATH**/ ?>