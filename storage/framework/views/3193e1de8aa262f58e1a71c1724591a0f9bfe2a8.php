<div class="container contain" >
    <?php
    echo 'কক্ষ নং নির্বাচন করুনঃ';
    ?>
    <br>
    <form method="post" action="/new">
        <p><input type="checkbox" name="room[]" value="101">101</p>
        <p><input type="checkbox" name="room[]" value="102">102</p>
        <p><input type="checkbox" name="room[]" value="103">103</p>
       <p> <input   type="submit" name='submit' value="Submit " > </p>
    </form>
    <?php
    if(isset($_POST['submit']))
    {if (!empty($_POST['room']))
    {
        foreach ($_POST['room'] as $room_no[])
        {
            echo "<h2>"."your selected room : ".$room_no[0]."</h2>";
        }
    }
    else echo "You selected nothing";
    }
    ?>