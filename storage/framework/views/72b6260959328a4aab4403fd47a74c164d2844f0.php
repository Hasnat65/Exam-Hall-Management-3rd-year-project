<?php echo $__env->make('blade.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $index=0;
        $exam=array("প্রথম"," দ্বিতীয়","তৃতীয়","চতুর্থ","পঞ্চম","অতিরিক্ত","অতিরিক্ত");

function bangla_date($str)
{
    date_default_timezone_set('Asia/Dhaka');
    $en = array(1,2,3,4,5,6,7,8,9,0);
    $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');

    $str = str_replace( $en, $bn, $str );
    return $str;
}


?>
<html lang="en">
<head> <title> Exam Date</title>
    <link rel="shortcut icon" type="image/icon" href="ruet.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<html>
<!DOCTYPE html>
<html>
<head><title> Exam Date</title>
    <link rel="shortcut icon" type="image/icon" href="ruet.ico">
    <style>
        a:hover{ }
        body  {
  background-image: url("/images/mainbg.jpg");
  background-size:auto;
}
    </style>
</head>

<body  > <div class="container contain" style=" margin-bottom: 60px;">
    <?php if(session()->has('message')): ?>
        <p class="alert <?php echo e(session()->get('alert-class', 'alert-info')); ?>"><?php echo e(session()->get('message')); ?></p>
   <?php endif; ?> <!-- Modal -->
        <h4 style="color: blueviolet;font-weight: bold;" class="text-center ">সেমিস্টার পরিক্ষার তারিখসমূহঃ</h4>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">  <span class="glyphicon glyphicon-calendar"></span></h4>
                </div>
                <div class="modal-body">
                    <!-- <form action="<?php echo e(route('store.store')); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <input type="text"   name="date" required><br>
                        <button type="submit" class=" btn btn-danger">OK</button>
                    </form> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </div>

</div>

    </div>  <!-- Modal -->
    <div style="width: 60%;margin-left: 20%" class="table-responsive">
        <table class="table  ">
            <thead class="text-center">
            <tr>
                <th>পরীক্ষা</th>
                    <th>  তারিখ
                    </th>

            </tr>
            </thead>
            <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
            <tr>
                <th><?php $count=0; if($index<=4) echo bangla_date($exam[$index]);
                    $count=$index ;
                $index=$index+1;
                ?></th>
                <td>
        <?php

                    $en_date=$date->date; bangla_date('d-m-y');
                    echo bangla_date($en_date) ;?>
                </td>
                <td colspan="">
                    <a href="<?php echo e(route("store.edit",$date->id)); ?>"  class="btn btn-success" > পরিবর্তন <span class="glyphicon glyphicon-edit"></span></a>
                    <!-- <form class="form-group pull-right" action="<?php echo e(route("store.destroy",$date->id)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>                    <?php echo e(method_field("DELETE")); ?>

                        <button  type="submit" class="btn btn-danger" > ডিলিট <span class="glyphicon glyphicon-trash"></span></button>
                    </form> -->
                </td>
            </tr>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php

// if ($count<=3)
// {
//     echo  '<button type="button" class=" btn btn-primary" data-toggle="modal"
//             data-target="#myModal"> <span class="disabled glyphicon glyphicon-plus"></span> Add New <span class="glyphicon glyphicon-calendar"></span></button>';}
//  if ($count>3)
//   { echo  '<button type="button" class="disabled btn btn-primary"> <span class=" glyphicon glyphicon-plus"></span> Add New <span class="glyphicon glyphicon-calendar"></span></button>';
// }
// ?>
        </table>
    </div></div>
</body>
</html>


<?php echo $__env->make('blade.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>