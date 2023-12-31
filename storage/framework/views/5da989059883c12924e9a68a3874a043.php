

<?php $__env->startSection('page'); ?>

<div class="container mt-4">
    <div class="container m-4" style="font-size: 0.9rem;">
        <div class="row">
            <div class="col-md-6 d-flex m-auto bg-light p-5" style="border-radius: 10px; border:2px solid orange;">
                <div style="font-size: 1.5rem; position: absolute;  top: 20px; background-color: #fff; padding: 0 5px; font-weight: bold;" class="text-center">
                    Make Transaction
                </div>
                <form class="form col-md-12" action="<?php echo e(route('deposit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('post'); ?>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input class="form-control" type="number" id="amount" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label for="transaction_type">Transaction Type</label>
                        <select name="transaction_type" class="form-control" id="account_type" required>
                            <option>Select</option>
                            <option value="deposited">Deposit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fee">Fee</label>
                        <input class="form-control" type="number" id="fee" name="fee" required>
                    </div>
                    <div class="d-flex justify-content-end">
                        <input type="submit" class="btn btn-secondary mt-2" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    document.getElementById('account_type').addEventListener('change', function() {
        var amount = document.getElementById('amount').value;
        var type = this.value; 
        var fee = document.getElementById('fee');

        if (type === "deposited") {
            fee.value = "0";
        } else {
            fee.value = "0";
        }

    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.erp.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\banking_system\resources\views/transaction/create_trx.blade.php ENDPATH**/ ?>