<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kullanıcı Bilgileri</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="">
                      <div class="row">
                        <label class="col-md-3">Kullanıcı Adı:</label>
                        <?php echo e(auth()->user()->username); ?>

                      </div>
                      <div class="row">
                        <label class="col-md-3">Adı:</label>
                        <?php echo e(auth()->user()->name); ?>

                      </div>
                      <div class="row">
                        <label class="col-md-3">Soyadı:</label>
                        <?php echo e(auth()->user()->surname); ?>

                      </div>
                      <div class="row">
                        <label class="col-md-3">Adresi:</label>
                        <?php echo e(auth()->user()->adress); ?>

                      </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>