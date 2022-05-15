<?php

if (isset($_POST['insert'])){

include("conn.php");

//$conn=new mysqli("localhost","root","","students_record");

$stname=$_POST['stname'];
$fname=$_POST['fname'];
$class=$_POST['class'];
$contact=$_POST['contact'];
$address=$_POST['address'];

$sql="INSERT INTO students_data (Student_Name,Father_Name,Class,Contact_No,Address) Value('$stname','$fname','$class','$contact','$address')";

$query=mysqli_query($conn,$sql);

if($query){
  header("Location:display_data.php");
}
else{
echo "Not Inserted Record";

  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-secondary">
    <div class="col-lg-6 m-auto">
        <form method='POST'>
            <br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Data</h1>
                </div>
                <b><label>Student Name</label></b>
                <input type='text' name='stname'  class="form-control" required><br>
                <b><label>Father Name</label></b>
                <input type='text' name='fname' class="form-control" required><br>
                <b><label>Class</label></b>
                <input type='text' name='class' class="form-control" required><br>
                <b><label>Contact No</label></b>
                <input type='text' name='contact' class="form-control" required><br>
                <b><label>Address</label></b>
                <input type='text' name='address' class="form-control" required><br>

                <button class="btn btn-success" type='submit' name='insert'>Insert</button><br>
           </div>   
      </form> 
    </div>
  </body>
</html>