 
 <?php echo $__env->make(' blade.bndate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $count=1; ?>
<head>
<title>Teachers List</title>
<link rel="shortcut icon" type="image/icon" href="ruet.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css.css">
<style>
table,tfoot,tbody , tr,td , th ,thead{
    left:12px;
    border-collapse: collapse;
             border: 0.5px solid #000000;
           }.table-bordered td, .table-bordered th{
              border-color: black !important;
            }
            .table-size{width: 99%;
            }
             tr:hover {
background-color:#c0380f ;
color:white;
            }       
.table> thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
table > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 0.5px solid #000000;
  padding: 0;
}
dt{height: 5px;}
.font_size{
             font-size: 10px;
  font-weight:bold;
           }
  .font_size_header{
    font-size: 12px;
  }
</style></head>
 <body>
 <script language="JavaScript" type="text/javascript">
     function checkDelete(){
         return confirm('Want to delete !! ');
     }
 </script>


<div class="container-fluid contain" >
  <h2></h2>
  <p class="text-center text-info  " style="font-weight: bolder"> কক্ষ পরিদর্শকের তালিকাঃ</p>

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
            <form class="form-inline" action="<?php echo e(route('name.store')); ?> " method="post">
              <?php echo e(csrf_field()); ?>

              পদবীঃ<select class="form-control" name="designation" id="">
                <option value="ps">প্রফেসর</option>
                <option value="ap">এসিস্ট্যাণ্ট প্রফেসর</option>
                <option value="lc">লেকচারার</option>  </select>
              নাম: <input type="text"  class="form-control" placeholder=" নাম" name="t_name" required><br>
            <label>  বিভাগঃ</label> <select  class="form-control" name="dept_name" >
                    <?php $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="  <?php echo e($dept->dept_name); ?>">  <?php echo e($dept->dept_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select><br>
              <label for=""> মোট ডিউটি</label>
              <input  class="form-control" type="number" placeholder="(in English)" name="total_duty" required><br>
              <label for="">   ডিউটি</label>
              <input  class="form-control" type="number" placeholder=" (in English)" name="exam_duty" required><br>
              <button type="submit" class=" btn btn-danger">OK</button>
            </form>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>

      </div>
    </div>

    <!--  End Modal -->
    <table style="  border-color: black; margin-left:10px;" class=" table-size ">
    <thead class="text-center">
      <tr  class="font_size_header ">
        <th class=" text-center">ক্রমিক</th>
        <th class="text-center ">  পরিদর্শকের নাম</th>
        <th class="text-center ">মোট ডিউটি</th>
        <th class="text-center ">এডিট</th>

          <th class="text-center">ডিলিট</th>
      </tr>
    </thead>
    <tbody  class="table-bordered">
    <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="font_size">
        <td class="text-center"><?php echo bangla($count++);?></td>
        <td style="margin-left:9px" ><?php echo e($name->t_name); ?>,<?php echo e($name->dept_name); ?></td>
        <td class="text-center"><?php echo e(bangla($name->total_duty)); ?></td>

        <td class="text-center">
          <a href="<?php echo e(route("name.edit",$name->id)); ?>"  class="btn btn-success btn-sm" >  <span class="glyphicon glyphicon-edit"></span></a>
        </td><td class="text-center">
          <form class=" " action="<?php echo e(route('name.destroy',$name->id)); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field("DELETE")); ?>

            <button type="submit" class=' btn btn-warning btn-sm' onclick="return checkDelete()" ><span class="glyphicon glyphicon-trash"></span>  </button>
          </form></td>
      </tr>














<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </tbody>
  </table>

</div>
 
</body>
</html>
 ;
<?php echo $__env->make("blade.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('blade.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>