
<?php echo $__env->make("blade.bndate", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Home</title>
    <link rel="shortcut icon" type="image/icon" href="ruet.ico">
</head>
<body style="background:url('<?php echo e(asset("/images/mainbg.jpg")); ?>');background-size:auto"> <div class="container contain" style=" margin-bottom: 60px;">
<div class=" " style="margin-top: 110px">
    <div class="row">
        <div class="col col-lg-6">
            <div class="jumbotron">
                <h3 class="text-center">Devoloper</h3>
                <div class="panel-body"><p>
 Name:Hasnat Kabir <br>
 Department of CSE <br> Rajshahi University of Engineering and Technology <br>
  Email:<a href="hasnatkabir16@gmail.com ">hasnatkabir16@gmail.com </a><br>
                     <span class="glyphicon glyphicon-phone-alt"></span> 01762889862 <br>
                   </p>
                </div>
            </div>

        </div>
        <div class="col col-lg-6">
            <div class="jumbotron ">
                <h3 class="text-center">Advisor</h3>
                <div class="panel-body">
 <p>Dr. Mir Md.Jahangir Kabir <br>
  Professor of Department of CSE <br>
     Rajshahi University of Engineering and Technology
     <br>
     Email :<a href="mmjahangir.kabir@gmail.com">mmjahangir.kabir@gmail.com</a> <br>
     <!-- <span class="glyphicon glyphicon-phone-alt"></span> 017xxxxxxx <br> -->
 </p>    </div>
            </div>

        </div>

</div></div>
 
</body>

<?php echo $__env->make('blade.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>