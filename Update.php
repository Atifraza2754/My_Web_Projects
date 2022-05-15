<?php


include("conn.php");

$id=$_GET['id'];

$sname=$_POST['stname'];
$fname=$_POST['fname'];
$class=$_POST['class'];
$contact=$_POST['contact'];
$address=$_POST['address'];

$update="UPDATE students_data SET Student_Name='$sname' , Father_Name='$fname' , Class='$class' , Contact_No='$contact' , Address='$address' WHERE St_id='$id'";

$db=mysqli_query($conn,$update);

if($db){
    header("location:display_data.php");
}


?>