 

 <!DOCTYPE HTML>
<html>
	<head>
	 <title> Notices</title>
  <link rel="shortcut icon" type="image/icon" href="ruet.ico"> 
 
		  	</head  >
	<body style="background:url('<?php echo e(asset("/images/mainbg.jpg")); ?>');background-size: cover">
 
		<div class="container contain">
			<div class="row">
			<u> 	<h2 class="demo-text text-center "> 	</h2></u>

                
				<div class="container">
					<div class="row">
						<div class="col-lg-12 nopadding">
                            <form  method='post' action="<?php echo e(route('notices.update',$notice_id)); ?>">
                                <?php echo e(csrf_field()); ?>

								<?php echo e(method_field('PUT')); ?>


                            <textarea name='notice' class="ckeditor"><?php echo e($result); ?></textarea> <br>
                            <button class='btn btn-info' type='submit' >update</button>

                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>

        <script  src="ckeditor/ckeditor.js"> </script>

	</body>
</html>
 <div class="container-fluid" style="margin-top:95px;position: fixed">
     
 </div>
<?php echo $__env->make('blade.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make("blade.nav", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>