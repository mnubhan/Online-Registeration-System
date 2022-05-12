<?php $__env->startSection('login'); ?>

<body style="background-color:F9EBC8">
    <form action="login" method="post" style="margin-left: auto;margin-right: auto ;">
        <?php echo csrf_field(); ?>
        <div class="row g-3 align-items-center border" style="width:fit-content;background-color: FEFBE7; margin: 25px; padding: 25px; border-radius: 25px;">

            <body>
                <img src="/image/radio-waves.png" class="col-fluid align-items-left" style="height:50px; width:50px;">
                <span class="col-sm-3 align-items-right" >Radio Wave</span>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <label for="exampleInputEmail" class="form-label" >Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail">
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <label for="exampleInputPassword" class="col-form-label" >Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword">
                </div>
                <div class="col-md align-items-left">
                    <button type="submit" class="btn btn-primary" style="background-color: A0BCC2; border-color: A0BCC2; color:white;">Login</button>
                    <?php if(!session()->has('user')): ?>
                    <button type='button' class="btn btn-secondry" onclick="window.location='/register'">Register new Account</button>
                </div>
            </body>
        </div>
        <?php endif; ?>
    </form>
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/login.blade.php ENDPATH**/ ?>