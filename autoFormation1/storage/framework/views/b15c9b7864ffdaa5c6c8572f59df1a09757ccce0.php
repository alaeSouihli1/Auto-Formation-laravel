<?php $__env->startSection('title',' Show Computer'); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 ">
            <h1>Computers </h1>
        </div>
        <div class="mt-8 ">
        <h3><?php echo e($computer['name']); ?> is from <b><?php echo e($computer['origin']); ?></b> <?php echo e($computer['price']); ?></h3>


        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\autoFormation1\resources\views/computers/show.blade.php ENDPATH**/ ?>