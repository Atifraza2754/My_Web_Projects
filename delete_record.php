<?php

include("conn.php");

$id=$_GET['id'];

$delete="DELETE From students_data WHERE St_id='$id'";

mysqli_query($conn,$delete); 

header("location:display_data.php");



?>