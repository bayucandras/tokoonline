<h1><?php echo e($subjudul); ?></h1>

<form action="/products" method="POST">
    <?php echo csrf_field(); ?>
    Name        :<input type="text" name="name"><br>
    Description :<input type="text" name="description"><br>
    Price       :<input type="number" name="price"><br>
    Image URL   :<input type="text" name="image_url"><br>



    <input type="submit" value="Save">
</form>
<?php /**PATH D:\BAYU\less\laravel\tokoonline\resources\views/products/create.blade.php ENDPATH**/ ?>