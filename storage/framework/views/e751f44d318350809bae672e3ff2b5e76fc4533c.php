 
<body style="background-color:F9EBC8">
    <div class="row g-2 align-items-center border" style="background-color: FEFBE7; margin: 25px; padding: 25px; border-radius: 25px">
        <img src="/image/radio-waves.png" class="col-fluid align-items-left" style="height:50px; width:50px;">
        <span class="col-sm-3 align-items-right" >Radio Wave</span>
        <br>
        <div>
            Logged in as <?php echo e(session()->get('user')->name); ?>

        </div>
        <div class="col mx-1">
            <button type='button' class="btn btn-primary" onclick="window.location='/logout'" style="background-color: A0BCC2; border-color: A0BCC2; color:white;">Log out</button>
            <button type='button' class="btn btn-secondry" onclick="window.location='/editmyuser?rid=<?php echo e(session()->get('user')->id); ?>'" style="background-color: A0BCC2; color:white;">Edit</button>
            <button type='button' class="btn btn-secondry" onclick="window.location='/userlist'" style="background-color: A0BCC2; color:white;">List of user</button>
        </div>
    </div>
</body><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/user.blade.php ENDPATH**/ ?>