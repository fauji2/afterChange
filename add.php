<!DOCTYPE html>

<head>
     <?php 
     include "index.php"
     ?>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <form method= "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
       Name: <input type="text" id="Fname" name="fname" class="form-control"><br>
        Email: <input type="text" id="Email" name="email" class="form-control"><br>
        Gender: <select name="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
           </select>
           <input type="submit" value ="save" class = "btn btn-primary form-control">

        </form>
    </div>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];

        $sql = "INSERT INTO student (name, email, gender) VALUES ('$name','$email',' $gender')";
        if(mysqli_query($conn,$sql)){
            echo "Data Added";
            header("Location: index.php");
        }else{
            echo "Error: ".$sql. "<br>".mysqli_error($conn);
        }
    }

    ?>
    
</body>
</html>