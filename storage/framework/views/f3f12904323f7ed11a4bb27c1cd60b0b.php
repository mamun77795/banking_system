

<?php $__env->startSection('page'); ?>

<div class="container mt-4">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->account_type); ?></td>
                    <td style="display: flex;">
                        <a href="<?php echo e(route('users.edit',$user->id)); ?>" class="btn btn-secondary">Edit</a>
                        <form action="<?php echo e(route('users.destroy',$user->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>                          
                            <?php echo method_field('delete'); ?>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- Add more rows here -->
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.erp.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\banking_system\resources\views/pages/erp/user/index.blade.php ENDPATH**/ ?>