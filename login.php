<?php
	require('database.php');
	session_start();
	if(isset($_SESSION["email"]))
	{
		session_destroy();
	}
	
	$ref=@$_GET['q'];		
	if(isset($_POST['submit']))
	{	
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$email = stripslashes($email);
		$email = addslashes($email);
		$pass = stripslashes($pass); 
		$pass = addslashes($pass);
		$email = mysqli_real_escape_string($con,$email);
		$pass = mysqli_real_escape_string($con,$pass);					
		$str = "SELECT * FROM grocery_users WHERE email='$email' and password='$pass'";
		$result = mysqli_query($con,$str);
		if((mysqli_num_rows($result))!=1) 
		{
			echo "<center><h3><script>alert('Sorry.. Wrong Username (or) Password');</script></h3></center>";
			header("refresh:0;url=login.php");
		}
		else
		{
			$_SESSION['logged']=$email;
			$row=mysqli_fetch_array($result);
			$_SESSION['name']=$row[1];
			$_SESSION['id']=$row[0];
			$_SESSION['email']=$row[2];
			$_SESSION['password']=$row[3];
			header('location: grocery.html?q=1'); 					
		}
	}
?>

<html>
	<head>
		<title>Login | Online Grocery</title>
		
                                       <link rel="stylesheet" href="logincss.css">
                     
         
   
	</head>

	<body>
	 <div class= "log">
     <div class ="page-title"> ONLINE GROCERIES</div>
	 
     
       
    </div>
	 	
			                <div class="container">
			                 <h2 style="color:red;">Login here</h2>
                             <style>
                           h2{text-align: center;

		                    
                           }			   
                            </style>        
							<form   method="post" action="login.php">
								
									<label>Email Id:</label>
									<input type="email" name="email" ></br></br>
								
								
									<label>Password:</label>
									<input type="password" name="password"></br></br>
								   <div class="btn">
									<button  class="btn"name="submit">Login</button>
								</div>
								</br>
								<p>Don't have an account? <a href="register.php">SignUp Now</a>.</p>
							</form>
						
                                            </div>
                                    </div>
		
		
	</body>
</html>