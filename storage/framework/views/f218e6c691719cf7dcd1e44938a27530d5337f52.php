<?php echo e(View:: make('title')); ?>


<body style="background-color:F9EBC8">


    <div class='container' style=" background-color: FEFBE7; margin-left: auto;margin-right: auto ;margin: 25px; padding: 25px; border-radius: 25px;width:fit-content;height:fit-content;">

        <form action="useredit?rid=<?php echo e($users->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <img src="/image/radio-waves.png" class="col-fluid align-items-left" style="height:50px; width:50px;">
            <span class="col-sm-3 align-items-right">Radio Wave</span>
            <div>
                <label for="exampleInputName1">Fullname</label>
                <input maxlength="100" value="<?php echo e($users->name); ?>" type="text" name="fullname" id="exampleInputName1">
            </div>

            <div>
                <label for="exampleInputEmail1">Email</label>
                <input maxlength="100" value="<?php echo e($users->email); ?>" type="email" name="email" id="exampleInputEmail1">
            </div>

            <div>
                <label for="exampleInputPassword1">Password</label>
                <input maxlength="50" value="<?php echo e($users->password); ?>" type="password" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" style="background-color: A0BCC2; border-color: A0BCC2; color:white;">Update</button>
            <button type="button" onclick="javascript:history.back()" style="background-color: A0BCC2; border-color: A0BCC2; color:white;">Cancel</button>
        </form>

    </div>

</body>

<?php echo e(View:: make('footer')); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/edituser.blade.php ENDPATH**/ ?>