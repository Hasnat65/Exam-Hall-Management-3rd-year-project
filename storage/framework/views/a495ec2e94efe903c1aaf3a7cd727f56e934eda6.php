
<head>
    <title>Teachers List</title>
    <link rel="shortcut icon" type="image/icon" href="ruet.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head><body>
    <div class="container">
    <h4>তারিখ পরিবর্তন</h4>
    <br><br>
    <form  method="post" action="<?php echo e(action('storecontroller@update',$edit->id)); ?>">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <textarea type="text"  name="date" role="" rows="1" cols="50"  > <?php echo e($edit->date); ?> </textarea><br>
        <input class="btn btn-success" type="submit" value="পরিবর্তন" >
        <a href="/store"> <button class="btn btn-default">cancel</button></a>
    </form>
</div>

</body>