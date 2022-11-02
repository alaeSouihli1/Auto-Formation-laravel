<?php $__env->startSection('title','Computers'); ?>

<?php $__env->startSection('content'); ?>
    <div>
        <div >
            <h1>Computers </h1>
        </div>


        <div >
            <?php if(count($computers)>0): ?>
                <ul>
                    <?php $__currentLoopData = $computers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $computer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('computers.show',['computer' =>$computer['id']])); ?>">
                            <li><?php echo e($computer['name']); ?> is from <b><?php echo e($computer['origin']); ?></b><?php echo e($computer['price']); ?></li>
                        </a>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php else: ?>
                <p>there are no computers to display</p>
            <?php endif; ?>

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\autoFormation1\resources\views/computers/index.blade.php ENDPATH**/ ?>