<?php
		$email=$_POST['email'];
		echo $email;
		include 'Db.php';
		$email=$_POST['email'];
		echo $sql="insert into Visitors(email)values('$email')";
		$result=mysqli_query($link,$sql);
         if(!$result)
		{
			mysqli_close($link);
            return false;
        }
		else
		{
			mysqli_close($link);
			header("Location:index.php");
		}
?>