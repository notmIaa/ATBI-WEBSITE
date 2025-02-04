
<?php $__env->startSection('page_title', 'Incubatee'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mt-4">
        <?php $__currentLoopData = $incubatees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $incubatee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
                <a href="<?php echo e(route('admin.incubatee_show', $incubatee->id)); ?>" style="text-decoration: none; color: inherit;">
                    <div class="card" style="border: 1px solid #ddd; border-radius: 8px;">
                        <img src="<?php echo e($incubatee->image ? asset('storage/' . $incubatee->image) : asset('storage/default_image.png')); ?>" 
                             class="card-img-top" alt="<?php echo e($incubatee->incubatee_name); ?>" style="height: 200px; object-fit: cover; border-radius: 8px 8px 0 0;">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo e($incubatee->incubatee_name); ?></h5>
                            <p class="card-text"><?php echo e($incubatee->business_name); ?></p>
                        </div>
                    </div>
                </a>
                <div class="d-flex justify-content-center">
                            <a class="btn btn-warning btn-sm mr-2" href="<?php echo e(route('incubatee.edit', $incubatee->id)); ?>">Edit</a>
                            <form method="post" action="<?php echo e(route('incubatee.destroy', $incubatee->id)); ?>" style="display: inline;">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            </form>
                        </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miala\Jesus\resources\views/admin/incubatee.blade.php ENDPATH**/ ?>