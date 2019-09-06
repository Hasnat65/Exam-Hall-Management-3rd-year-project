<head>
    <title> Manage</title>
    <link rel="shortcut icon" type="image/icon" href="ruet.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
 <body style="background:url('<?php echo e(asset("/images/mainbg.jpg")); ?>');background-size: cover">
<div class="container contain" >
    <p>কক্ষ নং নির্বাচন করুনঃ</p>
<p><input type="checkbox" name="room[]" value="১০১">১০১</p>
        <p><input type="checkbox" name="room[]" value="১০২">১০২</p>
        <p><input type="checkbox" name="room[]" value="১০৩">১০৩</p>
        <p><input type="checkbox" name="room[]" value="104">২০১</p>
    
    <?php
    echo '';
    ?><br>
    <form   method="post" action="<?php echo e(route('room.store')); ?>">
    <?php echo e(csrf_field()); ?>

  <!-- <textarea name="room" id="" cols="30" rows="10"></textarea> -->

       <p> <input   value="ok" type="submit" name="submit">   </p>
    </form>
    <?php
    if(isset($_POST['submit']))
    {if (!empty($_POST['room']))
    {
        foreach ($_POST['room'] as $room_no)
        {
            echo "<h2>"."your selected room : ".$room_no."</h2>";
        }
    }
    else echo "You selected nothing";
    }
    ?>
</div>
 

</body>
</html>

<?php echo $__env->make('blade.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>