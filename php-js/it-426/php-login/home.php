<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/main.css" rel="stylesheet">
</head>
<body>
<section class="signup-form">
    <form action="home.php" method="POST" enctype="multipart/form-data">
		<h2>My Account</h2>
        <br>

            <?php
				session_start();
				include 'processing/inc_db.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($mysqli,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
        <img src="processing/upload/<?php echo $row['File'] ?>" style="display:block; width:50%; max-width:150px;" />
		<p class="hint-text"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p>
        <div class="text-center">Want to Leave the Page? <br><a href="processing/logout.php">Logout</a></div>
    </form>
	
</section>
</body>
</html>