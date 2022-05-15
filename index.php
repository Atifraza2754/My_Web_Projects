<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-10">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud</title>
  </head>
<body class="bg-info">
<div class="container">
    <div class="table  table-stripped table-hover table-bordered ">
<div class="col-lg-12"><br>
    <h1 class="text text-white text-center bg-success">Students Record CRUD App</h1>
    <button class="btn-warning btn"><a href='insert_data.php' class="text-white">Add Data</a></button>

<table class="table table-stripped table-hover table-bordered">
    <tr class="bg-dark text-white text-center">
        <th>St_Id</th>
        <th>Student_Name</th>
        <th>Father_Name</th>
        <th>Class</th>
        <th>Contact_No</th>
        <th>Address</th>
        <th>UPDATE</th>
        <th>DELETE</th>
   </tr>
   
   <?php

include("conn.php");

$sql="SELECT * FROM students_data";

$query=mysqli_query($conn,$sql);

while($row=$query->fetch_assoc()){

?>
   

   <tr class="text-center">
        <td><?php echo $row['St_id']; ?></td>
        <td><?php echo $row['Student_Name']; ?></td>
        <td><?php echo $row['Father_Name'];?></td>
        <td><?php echo $row['Class']; ?></td>
        <td><?php echo $row['Contact_No']; ?></td>
        <td><?php echo $row['Address']; ?></td>
        <td> <button class="btn-success btn"> <a href='Edit_data.php?id=<?php echo $row['St_id']; ?>' class="text-white ">UPDATE</a></button></td>
        <td><button class="btn-danger btn"><a href='delete_record.php?id=<?php echo $row['St_id']; ?>' class="text-white">DELETE</a></button></td>
   </tr>

<?php
}
?>
</table>    
</div>
</div>
</div>
</body>
</html>