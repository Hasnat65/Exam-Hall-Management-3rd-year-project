<head>  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Departments</title>
    <link rel="shortcut icon" type="image/icon" href="ruet.ico">
</head>
<body>
<div class='container ' style="margin-top: 48px;">
<form class="form-group" action="<?php echo e(action('teachercontroller@update',$edit->id)); ?> " method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

    পদবী:  <select class="form-control" name="designation" id="">
        <option  value=> -------------পদবী--------------</option>
        <option value="ps">প্রফেসর</option>
        <option value="ap">এসিস্টান্ট প্রফেসর</option>
        <option value="lc">লেকচারার</option>  </select>
    নাম:  <input type="text"  class="form-control" value="<?php echo e($edit->t_name); ?>" name="t_name" required>
    <label>  বিভাগঃ</label>
    <input class="form-control" type="text" name="dept_name" value="<?php echo e($edit->dept_name); ?>">
        
            
        

    <label for=""> Total Duty:</label>
    <input class="form-control" value="<?php echo e($edit->total_duty); ?>" type="number" placeholder="(in English)" name="total_duty" required><br>
    <button   type="submit" class=" btn btn-danger">OK</button>

</form> <a href="/name"><button class="btn btn-default">cancel</button></a></div>
</body>