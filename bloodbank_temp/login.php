<?php session_start();

include('includes/dbcon.php');

$user_unsafe=$_POST['email'];
$pass_unsafe=$_POST['password'];

$email = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$query=mysqli_query($con,"select * from donor where donor_email='$email' and donor_password='$pass'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           
           $counter=mysqli_num_rows($query);
		  	if ($counter == 0) 
			  {	
			 	 echo "<script type='text/javascript'>alert('Invalid Email or Password!');
			 	 document.location='index.php';window.history.back();</script>";
			  } 
			  elseif ($counter > 0)
			  {
				$id=$row['donor_id'];
				$first=$row['donor_first'];
				$last=$row['donor_last'];
				$pic=$row['donor_pic'];
			  	$_SESSION['id']=$id;	
				$_SESSION['pic']=$pic;
				$_SESSION['name']=$first." ".$last;
				  

			  		echo "<script type='text/javascript'>document.location='donor/queing.php'</script>";
			  	
				  
  
	  }

?>
	
