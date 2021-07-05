

<html>
	<head>
		<title>Address | Online Grocery</title>
		
                                       <link rel="stylesheet" href="logincss.css">
                                     
         
   
	</head>

	<body>
	 <div class= "log">
     <div class ="page-title"> ONLINE GROCERIES</div>
	 
     
       
    </div>
	 	
			                <div class="container">
			                 <h3  style="color:red;">Please fill your address here</h3>
                             <style>
                           h2{text-align: center;
		                    
                           }			   
                            </style>        
							<form method="post" action="addressp.php">
								
									<label>House Number:</label>
                                    <input type="text" name="housenumber" required /></br></br>
								
								
									<label>Locality:</label>
                                    <input type="text" name="locality" required /></br></br>
									
									<label for="city">City:</label>
                                    <input type="text" id="city" name="city" required></br></br>
									
									<label>pincode:</label>
                                    <input type="text" name="pincode" required  maxlength="5" /></br></br>
									
									<label>Email ID:</label>
                                    <input type="text" name="email" required /></br></br>
									
									<label>Phone Number:</label>
                                     <input type="text" name="phoneno"  required maxlength="10" /></br></br>
									
								   <div class="btn">
									<button class="btn" name="submit">Done!</button>
								</div>
								</br></br>
								
							</form>
						
                                            </div>
                                    </div>
		
		
	</body>
</html>