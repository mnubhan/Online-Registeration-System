<?php echo e(View:: make('title')); ?>


<style>
    .h-5 {
        height: 1em;
    }

    .flex {
        text-align: center;
        width: 100%;
    }

    .leading-5 {
        padding: 0.7em;
    }
</style>

<body style="background-color:F9EBC8">
    
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: FEFBE7;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/image/radio-waves.png" style="height:40px; width:34px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Home</a>
                </li>
            </ul>
            <form class="d-flex">
                <?php echo e(View:: make('menu')); ?>

            </form>
        </div>
    </div>
</nav>



<div class="table-responsive-sm" style="background-color: FEFBE7; width:fit-content; margin-left: auto;margin-right: auto; margin-top:25px; ">
    <table class="table table-striped table-sm table-bordered" >
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email Address</th>
                <th scope="col">Password</th>
                <th scope="col">Created Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <?php $__currentLoopData = $listofuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->password); ?></td>
            <td><?php echo e(date('D,d F Y',strtotime($user->created_at))); ?></td>
            <td>
                <a href="/editmyuser?rid=<?php echo e($user->id); ?>" style="color:7FB5FF;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                    </svg>
                </a>
                <a href="/userdelete?rid=<?php echo e($user->id); ?>" style="color: E78EA9;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                    </svg>
                </a>
            </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</div>



<div class="pagination">
    <?php echo e($listofuser->appends(['search'=> Request::get('search')])->links()); ?>

</div>
</body>

<?php echo e(View:: make('footer')); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/miniproject/resources/views/listuser.blade.php ENDPATH**/ ?>