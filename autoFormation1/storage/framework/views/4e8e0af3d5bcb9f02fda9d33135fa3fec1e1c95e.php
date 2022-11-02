<?php $__env->startSection('title','Create computer'); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 ">
            <h1>Create a new computer </h1>
        </div>

        <div class="mt-8 ">
            <form action="<?php echo e(route('computers.store')); ?>" method="post" class="form bg-whit p-6 border-1 ">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="computer-name" class="text-sm">Computer Name</label>
                    <input id="computer-name"  name="computer-name" type="text" value="<?php echo e(old('computer-name')); ?>">
                </div>
                <?php $__errorArgs = ['computer-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="form-error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div>
                    <label for="computer-origin" class="text-sm">Computer Origin</label>
                    <input id="computer-origin"  name="computer-origin" type="text"  value="<?php echo e(old('computer-origin')); ?>">
                </div>
                <?php $__errorArgs = ['computer-origin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="form-error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div>
                    <label for="computer-price" class="text-sm">Computer Price</label>
                    <input id="computer-price"  name="computer-price" type="text"  value="<?php echo e(old('computer-price')); ?>">
                </div>
                <?php $__errorArgs = ['computer-price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="form-error">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\autoFormation1\resources\views/computers/create.blade.php ENDPATH**/ ?>