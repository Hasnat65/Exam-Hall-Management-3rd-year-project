 <?php echo $__env->make('blade.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make(' blade.bndate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php    $count=1;
 ?>

 <head>  <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Departments</title>
        <link rel="shortcut icon" type="image/icon" href="ruet.ico">
   </head>
<body style="background:url('<?php echo e(asset("/images/mainbg.jpg")); ?>');background-size: cover">

<div class="container col-col-9 contain" >
  <h3>  <?php if(session()->has('message')): ?>
          <p class="alert <?php echo e(session()->get('alert-class', 'alert-info')); ?>"><?php echo e(session()->get('message')); ?></p>
      <?php endif; ?></h3>
    <h4 style="color: blueviolet;font-weight: bold;" class="text-center ">বিভাগ সমূহ</h4>
    <table style="width: 80% ;margin-left: 10%" class="table table-bordered text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#myModal"> <span class="glyphicon glyphicon-plus"></span>যুক্ত করুন </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">+ Add New </h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route('dept.store')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <input type="text" name="dept_name"><br>
      <button type="submit" class="btn btn-warning">OK </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>

                </div>

            </div>
        </div>


        <thead >
        <tr >
            <th class="text-center">ক্রমিক নং</th>
            <th class="text-center">বিভাগ</th>
            <th class="text-center"> ডিলেট </th>
        </tr>
        </thead>
        <?php $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
        <tr>
            <td>
            <?php echo e(bangla($count++)); ?>

            </td>
            <td><?php echo e($dept->dept_name); ?></td>
            <td>
                <form action="<?php echo e(route('dept.destroy',$dept->id)); ?>" method="post">
                    <?php echo e(method_field("DELETE")); ?>

                    <?php echo e(csrf_field()); ?>

                  <button type="submit" class=" btn btn-danger"> <span    class=" glyphicon glyphicon-trash"></span>
                  </button>
                </form></td>
        </tr>

        </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

</body>
</html>
;
<?php echo $__env->make("blade.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>