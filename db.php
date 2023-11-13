<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php 
        $conn = mysqli_connect("localhost","root","","WebProgramming");

        if (mysqli_connect_errno()) {
            printf("connection failed", mysqli_connect_error());
        }
        ?>
    </body>
</html>
