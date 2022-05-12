<form action="userlist" method="post">
    <?php echo csrf_field(); ?>
    <input  class="form-control me-2" value="<?php echo e(request()->input('search')); ?>" name="search" type="search" placeholder="Search..." type="submit">
    <button class="btn btn-outline-success" type="submit">Search</button>
    <!-- <input type="submit" value="search"> -->
</form>
<!-- <?php if(!session()->has('user')): ?>
<p><a href="/register">Register New Account</a></p>
<button onclick="window.location='/register'">Register new Account</button>
<?php endif; ?> --><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/menu.blade.php ENDPATH**/ ?>