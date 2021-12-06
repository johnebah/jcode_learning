<?php
    $con = mysqli_connect("remotemysql.com", "4KhahQocon", "okt0XnjH84", "4KhahQocon");
    if ($con) {
        echo "<script>alert('No database found')</script>";
    }
?>
