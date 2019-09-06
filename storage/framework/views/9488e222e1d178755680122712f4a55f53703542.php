 <?php echo $__env->make('blade.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php echo $__env->make(' blade.bndate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <?php    $count=1;
 ?>


 <head> <title> Exam Halls</title>
     <link rel="shortcut icon" type="image/icon" href="ruet.ico">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body style="background:url('<?php echo e(asset("/images/mainbg.jpg")); ?>');background-size: cover">

 <div class="container contain" >
     <?php if(count($errors)>0): ?>
         <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="alart alert-danger">
                 <?php echo e('Already Exists'); ?>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

         </div>
         <?php endif; ?>
     <?php if(session()->has('message')): ?>
         <p class="alert <?php echo e(session()->get('alert-class', 'alert-info')); ?>"><?php echo e(session()->get('message')); ?></p>
 <?php endif; ?>        <h4 style="color: blueviolet;font-weight: bold;" class="text-center "> পরিক্ষার কক্ষসমূহঃ</h4>

      <!-- Trigger the modal with a button -->
     <button type="button" class="btn btn-primary" data-toggle="modal"
             data-target="#myModal"> <span class="glyphicon glyphicon-plus"></span> Add New </button>

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
                     <form action="<?php echo e(route('hall.store')); ?>" method="post">
                         <?php echo e(csrf_field()); ?>

                         <input type="text" name="room_no" required>
                         <button type="submit" class=" btn btn-danger">OK</button>
                     </form>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 </div>

             </div>

         </div>
     </div>
     <div class="container col-col-9" >
         <table class="table table-bordered text-center">
              <thead >
             <tr >
                 <th class="text-center">ক্রমিক নং</th>
                 <th class="text-center"> রুম নম্বর</th>

                 <th class="text-center"> ডিলেট </th>
             </tr>
             </thead>
             <tbody>

              <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rooms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <tr>
                      <td> <?php echo e(bangla($count++)); ?> </td>
          <td>  <?php echo e(bangla($rooms->room_no)); ?></td>
         <td>
             <form action="<?php echo e("hall/".$rooms->id); ?>" method="post">
                 <?php echo e(method_field('DELETE')); ?>

                 <?php echo e(csrf_field()); ?>

<button type="submit" class="btn btn-danger"> <span style="border:none" class="glyphicon glyphicon-trash"></span></button>

                      </form>
         </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </tbody>
         </table>
     </div>
 </div>

 </body>
 </html>


<?php echo $__env->make('blade.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>