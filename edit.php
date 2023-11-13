
			
<div class="container"> 
    <form method="post" action="edit.php<?php echo '?id='.$id;?>">
                Name: <input type="text" name="name" value="<?php echo $name_select;
                email: <input type="email" name="email" value="<?php echo $email_select>
                Gender: <input name="gender" class="form-control"
                <Option value ="male"
				<?php if ($gender_select =="Male")(?>
				selected
				<? } ?>
				>Male<?option>
				
				
				<?php 
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST['name'];
					$email = $_POST['email'];
					$gender = $_POST['gender'];
					$sql = "UPDATE student SET name='$name', email='$email', gender='$gender'";
					if(mysql_query($conn, $sql)){
						echo "data added";
						header("Location: index.php");
					}else{
						echo "Error: " .$sql. "<br>".mysqli_error($conn);
					}
				}
				?>