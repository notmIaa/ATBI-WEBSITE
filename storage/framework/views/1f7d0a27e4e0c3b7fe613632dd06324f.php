

<?php $__env->startSection('page_title', $incubatee->incubatee_name); ?>

<?php $__env->startSection('content'); ?>
    <div class="row mt-4">
        <div class="col-md-12 text-center">
        <img src="<?php echo e($incubatee->image ? asset('storage/' . $incubatee->image) : asset('storage/default_image.png')); ?>" 
        class="card-img-top" alt="<?php echo e($incubatee->incubatee_name); ?>" style="height: 200px; object-fit: cover; border-radius: 8px 8px 0 0;">
            <h1><?php echo e($incubatee->incubatee_name); ?></h1>
            <h3>Business Name: <?php echo e($incubatee->business_name); ?></h3>
        </div>
    </div>

    <div class="row mt-4">
        <h2 class="col-12">Products:</h2>
        <?php $__currentLoopData = $incubatee->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 mb-4">
            <a href="<?php echo e(route('admin.product_show', $product->id)); ?>" style="text-decoration: none; color: inherit;">
                <div class="card" style="border: 1px solid #ddd; border-radius: 8px;">
                <img src="<?php echo e($product->product_image ? asset('storage/' . $product->product_image) : asset('storage/default_image.png')); ?>" 
                         class="card-img-top" alt="<?php echo e($product->product_name); ?>" style="height: 200px; object-fit: cover; border-radius: 8px 8px 0 0;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo e($product->product_name); ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\miala\Jesus\resources\views/admin/incubatees_show.blade.php ENDPATH**/ ?>