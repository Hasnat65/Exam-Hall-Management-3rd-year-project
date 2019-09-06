 
  
<!DOCTYPE html>
<html lang="en">
<head> <link rel="stylesheet" type="text/css" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="bootstrap/3.3.7/js/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
         .bg-color{
         font-size:17px;
         color:white;
         font-weight:bold;
         
          } .custom{

                color:  #000F23;
             font-weight: bolder;

                font-family: "Agency FB";
            }
          .t-color{color:rgb(100, 75, 74);}

          a:hover{

          }
          body{  margin-bottom: auto;}

  </style>
</head>
<body>   
  <script src="bootstrap/3.3.7/js/jquery.min.js"></script>
  <script src="bootstrap/3.3.7/js/bootstrap.min.js"></script>
<nav  class="custom navbar navbar-default bg-color navbar-fixed-top navColor " style="margin-top:-2px">

   <div class="container-fluit">


       <ul class="nav navbar-nav">
       <li><img  style='width:99px ;height:79px' src="dd.png" alt=""></li>
      <li class=" .t-color <?php echo e(Request::is('home')? 'active': ''); ?>"><a href="/home"><span  class="glyphicon glyphicon-home"></span> Home</a></li>
           <div class="dropdown" >
               <button class="dropbtn"> <span class="glyphicon glyphicon-wrench"></span>Customize <span class="caret"></span></button>
               <div class="dropdown-content link" style="left:6px;">
                 <a style="text-decoration:none"  href="/name" ><span class="glyphicon glyphicon-list"></span>Teachers List</a>
                   <a style="text-decoration:none" href="<?php echo e(route('store.index')); ?>"><span class="glyphicon glyphicon-calendar"></span>Exam Dates</a>
                   <a style="text-decoration:none" href="dept"> </span>Customize Department</a>
                   <a style="text-decoration:none"   href="/hall">Exam Halls</a>
               </div>
           </div>
           <!-- <li class= "<?php echo e(Request::is('notice')? 'active': ''); ?>"><a href="/notice"><span class="glyphicon glyphicon-bell"></span> Notices<span class="caret"></span></a></li> -->
           <div class="dropdown" >
               <button class="dropbtn"> <span class="glyphicon glyphicon-bell"></span>Notices <span class="caret"></span></button>
               <div class="dropdown-content link" style="left:6px;">
               <a style="text-decoration:none"  href="/print" ><span class="glyphicon glyphicon-print"></span>Print Notice</a>
                 <a style="text-decoration:none"  href="/notice" ><span class="glyphicon glyphicon-bell"></span>Update Notice</a>
               
                   <a style="text-decoration:none"   href="/notices">Preview <span class="glyphicon glyphicon-eye-open"></span></a>
               </div>
           </div>
           <li><a href="manage"><span class="glyphicon  "></span> Manage Duty </a></li>
           <li><a href="about"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
           <li><a href="contact"><span class="glyphicon glyphicon-phone-alt"></span>Contact</a></li>


    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="  date">  রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়  <?php echo " <br>" ;include('raw.php'); echo bn_date(date('d-m-Y'));?></li>
     
    </ul>
       </div>

</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
