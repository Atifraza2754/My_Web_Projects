<?php
include("conn.php");

$id=$_GET['id'];

$view="Select * from students_data WHERE St_id='$id'";
$db=mysqli_query($conn,$view);

$row=$db->fetch_assoc();

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
  <body>
    <div class="col-lg-6 m-auto">
        <form method='POST' action='Update.php?id=<?php echo $id; ?>'>
            <br><div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Data</h1>
                </div>
                <label>Student Name</label>
                <input type='text' name='stname' class="form-control" value=<?php echo $row['Student_Name'];?>><br>
                <label>Father Name</label>
                <input type='text' name='fname' class="form-control" value=<?php echo $row['Father_Name']; ?>><br>
                <label>Class</label>
                <input type='text' name='class' class="form-control" value=<?php echo $row['Class'];?>><br>
                <label>Contact No</label>
                <input type='text' name='contact' class="form-control" value=<?php echo $row['Contact_No'];?>><br>
                <label>Address</label>
                <input type='text' name='address' class="form-control" value=<?php echo $row['Address'];?>><br>

                <button class="btn btn-success" type='submit' name='Update'>Update</button><br>
           </div>   
      </form> 
    </div>
  </body>
</html>