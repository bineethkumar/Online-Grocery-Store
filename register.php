<?php
	include("database.php");
	session_start();
	
	if(isset($_POST['submit']))
	{	
		$name = $_POST['name'];
		$name = stripslashes($name);
		$name = addslashes($name);

		$email = $_POST['email'];
		$email = stripslashes($email);
		$email = addslashes($email);

		$password = $_POST['password'];
		$password = stripslashes($password);
		$password = addslashes($password);

		$city = $_POST['city'];
		$city = stripslashes($city);
		$city = addslashes($city);
		$str="SELECT email from grocery_users WHERE email='$email'";
		$result=mysqli_query($con,$str);
		
		if((mysqli_num_rows($result))>0)	
		{
            echo "<center><h3><script>alert('Sorry.. This email is already registered !!');</script></h3></center>";
            header("refresh:0;url=login.php");
        }
		else
		{
            $str="insert into grocery_users set name='$name',email='$email',password='$password',city='$city'";
			if((mysqli_query($con,$str)))	
			echo "<center><h3><script>alert('Congrats.. You have successfully registered !!');</script></h3></center>";
			header('location: login.php?q=1');
		}
    }
?>

<html>
	<head>
		<title>Signup | Online Grocery</title>
		
                                       <link rel="stylesheet" href="logincss.css">
                                     
            </head>

	<body>
	 <div class= "log">
     <div class ="page-title"> ONLINE GROCERIES</div>
	 
     </div>
       
 
	 	
			                <div class="container">
			                 <h2 style="color:red;">Signup here</h2>
                             <style>
                           h2{text-align: center;
		                    
                           }			   
                            </style>        
							<form method="post" action="register.php">
								
									<label>Username:</label>
									<input type="text" name="name" class="form-control" required /></br></br>
								   
								     <label>Email Id:</label>
									<input type="email" name="email" class="form-control" required /></br></br>
								
									<label>Password:</label>
									<input type="password" name="password" class="form-control" required /></br></br>
									
									<label>City:</label>
									<input type="text" name="city" class="form-control" required /></br></br>
									
									
								    <div class="btn">
									<button  class="btn"name="submit">SignUp</button>
								</div>
								</br>
								<p>Already have an account? <a href="login.php">Login Now</a>.</p>
							</form>
						
                                            </div>
                                    </div>
		
		
	</body>
</html>