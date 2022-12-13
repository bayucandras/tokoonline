<h1>Hallo</h1>
<h3><?php echo e($subjudul); ?></h3>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td>
                    <a href="/products/<?php echo e($product->id); ?>/edit">Edit</a>

                    <form action="/products/<?php echo e($product->id); ?>" method="POST">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

    <a href="/products/create">Create</a>
</table>
<?php /**PATH D:\BAYU\project\laravel\tokoonline\resources\views/products/index.blade.php ENDPATH**/ ?>