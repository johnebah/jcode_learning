<?php
    $con = mysqli_connect("remotemysql.com:3306", "4KhahQocon", "7xFcs5hKF3", "4KhahQocon");
    if ($con) {
        echo "<script>alert('No database found')</script>";
    }
?>
