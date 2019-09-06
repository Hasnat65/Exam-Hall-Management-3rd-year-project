
 
 

 <?php echo $__env->make('blade.bndate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $x=1; ?>

 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="bootstrap/3.3.7/js/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <title>Print Doc</title>
     <style>
         table{
             border-collapse: collapse;

         }
     </style>
 </head>
 <body>
 <a href="/home"><button class="btn btn-primary" style="position:fixed;text-align:right" >  <span class="glyphicon glyphicon-arrow-left"></span> </button></a>
<div class="container contain" >
   
 <script  src="ckeditor/ckeditor.js"> </script>
 <div class="container contain">
     <div class="row">
         <u> 	<h2 class="demo-text text-center "> 	</h2></u>


         <div class=" ">
             <div class=" ">
                 <div class=" ">
                    <textarea name='notice' class="ckeditor">
                         <p style=" "><?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php echo $result->notice; ?>


                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
                        <table style="border-collapse: collapse;border:1px;width: 100%">
    <tr>
        <th >ক্রমিক নং</th>
        <th>পরিদর্শকের  নাম</th>
        <th>মোট ডিউটি</th>
        <th>ডিউটি</th>
        <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th> <?php echo e(bangla($date->date)); ?></th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>

                            <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <tr>
        <td style="text-align: center"><?php echo e(bangla($x++)); ?></td>

        <td style="font-size:9px;padding :2px"> <?php echo   "\t ". $name->t_name.",";?>  <?php echo e($name->dept_name); ?></td>
        <td style="text-align: center"><?php echo e(bangla($name->total_duty)); ?></td>

      <td style="text-align: center"><?php echo e(bangla($name->exam_duty)); ?> </td>
                                <td style="text-align: center">
                                <?php if($name->designation=="h" ): ?>
                                <?php echo e(" বিঃপ্রঃ"); ?>

                                <?php endif; ?> </td>

                 <td style="text-align: center">
                 <?php if($name->designation=="h" ): ?>
                                <?php echo e(" বিঃপ্রঃ"); ?>

                <?php endif; ?> </td>
                                

                   <td style="text-align: center">
                   <?php if($name->designation=="h" ): ?>
                   <?php echo e(" বিঃপ্রঃ"); ?>

                    <?php endif; ?> </td>

                      
                                 <td style="text-align: center">
                                 <?php if($name->designation=="h" ): ?>
                                <?php echo e(" বিঃপ্রঃ"); ?>

                                <?php endif; ?> </td>

                      
                        <td style="text-align: center">
                        <?php if($name->designation=="h" ): ?>
                                <?php echo e(" বিঃপ্রঃ"); ?>

                                <?php endif; ?> </td>

    </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </table> <p style="text-align:right;font-size: 13px;"><?php
     echo " <br>" ;include('raw.php'); echo "তারিখঃ ".bn_date(date('d-M-Y'));?></p>
<pre style="font-size: 12px;">স্বাক্ষরিত/
    (প্রফেসর ড. এস এম আব্দুর রাজ্জাক)
    ডিন,ত ও ক অনুষদ,রুয়েট।
    স্মারক নংঃতওক/৪৯৬
    অবগতির ও প্রয়োজনীয় ব্যবস্থা গ্রহনের জন্য প্রেরণ করা হলঃ
    ১।মাননীয় ভাইস-চ্যান্সেলর,অত্র বিশ্ববিদ্যালয়।
    ২।পরীক্ষা নিয়ন্ত্রক,অত্র বিশ্ববিদ্যালয়
    ৩।বিভাগীয় প্রধান,ইইই/সিএসই/ইসিই/ইটিই/গনিত/পদার্থবিদ্যা বিভাগ,রুয়েট।বিভাগের শিক্ষকের কাছে প্রচারের অনুরোধসহ।

</pre>
<p style="float: right;font-size: 13px;">
 (প্রফেসর ড. এস এম আব্দুর রাজ্জাক)<br>
    ডিন,ত ও ক অনুষদ,রুয়েট।</p><br><br><br>
<p style="margin-top: 0px;font-size:13px">বিঃদ্রঃ উল্লেখিত তালিকায় কোন ভুল ভ্রান্তি পরিলক্ষিত হলে তা সংশোধনযোগ্য</p> </textarea> <br>
                  </div></div></div></div></div>
 </body>
 </html>