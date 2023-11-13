<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body> 

    <div class="container">
    <a href="add.php" class=" btn btn-danger">ADD </a>
     <table class="table">
        <thead>
           <th>ID</th>
           <th>Name</th>
           <th>Email</th>
           <th>Gender</th>
           <th>Action</th>
        </thead>
        <!-- <tfoot>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tfoot> -->
        <tbody>
        <?php  
    include("db.php");
    
         $sql1 = "SELECT * FROM student";
         $result= mysqli_query($conn,$sql1);
        while($row=mysqli_fetch_assoc($result)) {
         
    ?>
            <tr>
                <td> <?php echo $row["Id"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["Email"]; ?></td>
                <td><?php echo $row["Gender"]; ?></td>
                <td>
                 <a href="edit.php?=<?php echo $row["Id"]; ?>" class=" btn btn-success">Edit </a>
                 <a href="delete.php?=<?php echo $row["Id"]; ?>" class=" btn btn-danger">Delete </a>
               </td>
            </tr>
                
            <?php  }?>


        </tbody>
     </table>
    </div>
    
</body>
</html>