<?php echo e(View:: make('title')); ?>


<body style="background-color:F9EBC8">
    <div class="row g-3 align-items-center border" style="background-color: FEFBE7; margin: 25px; padding: 25px; border-radius: 25px; width:fit-content;margin-left: auto;margin-right: auto ;">
        <img src="/image/radio-waves.png" class="col-fluid align-items-left" style="height:50px; width:50px;">
        <span class="col-sm-3 align-items-right">Radio Wave</span>
        <form action="register" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Fullname</label>
                <input class="form-control" type="text" name="fullname" id="exampleInputName1">
                <div id="emailHelp" class="" form-text>We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: A0BCC2; border-color: A0BCC2; color:white;">Register</button>
            <button type="button" onclick="javascript:history.back()" class="btn btn-secondary">Cancel</button>
        </form>

    </div>

</body>
<?php echo e(View:: make('footer')); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/register.blade.php ENDPATH**/ ?>