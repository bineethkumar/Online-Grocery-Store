<html>
<head>
<title>Address</title>


<?php include 'database_ads.php';
   $housenumber=$_POST['housenumber'];
   $locality=$_POST['locality'];
   $city=$_POST['city'];
   $pincode=$_POST['pincode'];
   $email=$_POST['email'];
   $phoneno=$_POST['phoneno'];
   mysqli_query($link,"INSERT INTO address (housenumber,locality,city,pincode,email,phoneno) VALUES('$housenumber','$locality','$city','$pincode','$email','$phoneno')"); 
?>
</head>
<body>
<br/>
<br/>
<br/>
<div class="body">
   <h1 style="text-align:center;">Your order was recieved and will be delivered soon. Thank You</h1>
   <br/>
   <br/>
   <br/>
   <a href="address.php" style="float:left;">Back</a>
   <a href="grocery.html" style="float:right;">Home</a>
</div>
</body>
</html>
