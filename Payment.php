<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','payment');

// get the post records
$address = $_POST['address'];
$Email = $_POST['Email'];
$Pincode = $_POST['Pincode'];
$CVV = $_POST['CVV'];
$name = $_POST['name']

// database insert SQL code
$sql = "INSERT INTO `payment`.`payment` (`address`, `name`, `mail`, `CVV`, `Pincode`) VALUES ('$address', '$name' , '$Email' , '$CVV', '$Pincode')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

       
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style.css">
</head>

    


   
<body style="background-color:teal;">
<form action="Payment.php">
<h1>Payment Form</h1>
<h3>Contact Information</h3>
<p>Name: <input type="text" name="name" required></p>

<legend><u>Gender</u></legend>

<p> Male <input type="radio" name="gender" id ="gender"> Female <input type = "radio" name = "gender" id="gender"></p>
<p>Address:<textarea name ="address" id ="address" placeholder="Enter your address" cols="100" rows="5"></textarea></p>
<p>Email:<input type="email" name="email" id="email" placeholder="Enter your email"></p>
<p>Pincode: <input type="number" name="Pincocde" id="Pincode" required></p>



<h2>Card Type</h2>
<select name = "cardtype" id="cardtype">
<option value="">--Select a Card Type--</option>
<option value="Visa">Visa</option>
<option value="Master Card">Master Card</option>
<option value="Rupay">Rupay</option></select>

<p>Card Number: <input type="number" name="CardNumber" id="CardNumber"></p>

<p>Expiration Date: <input type="date" name="ExpirationDate" id="ExpirationDate"></p>
<p>Name of the Card Holder: <input type="text" name="Name of the Card Holder" id="Name of the Card Holder"></p>
<p>CVV: <input type="number" name="CVV" id="CVV"></p>
<input type= "submit" value = "Pay Now" id ="sub">
</form>	
</body>
</html>
