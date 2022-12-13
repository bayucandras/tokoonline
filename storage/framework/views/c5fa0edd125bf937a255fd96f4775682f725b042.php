<h1><?php echo e($subjudul); ?></h1>

<form action="/products/<?php echo e($product->id); ?>" method="POST">
    <?php echo method_field('PUT'); ?>
    <?php echo csrf_field(); ?>
    Name        :<input type="text" name="name" value="<?php echo e($product->name); ?>"><br>
    Description :<input type="text" name="description" value="<?php echo e($product->description); ?>"><br>
    Price       :<input type="number" name="price" value="<?php echo e($product->price); ?>"><br>
    Image URL   :<input type="text" name="image_url" value="<?php echo e($product->image_url); ?>"><br>



    <input type="submit" value="Save">
</form>
<?php /**PATH D:\BAYU\project\laravel\tokoonline\resources\views/products/edit.blade.php ENDPATH**/ ?>