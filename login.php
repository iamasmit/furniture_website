<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birat Kshitiz College</title>

<style>
	h1{
		color:red;
		text-align:center;
	}
.login{
width:360px;
margin:50px auto;
font:"Times New Roman";
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:70px; 
}
input[type=text], input[type=password]{
width:100%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
/* font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;  */
}
input[type=submit]{
width:100%;
background-color:#f9004d;
color:#fff;
border:2px solid #06F;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px; 
}

@media screen and (max-width: 600px) {
  .login,input[type=text], input[type=password] {
    width: 90%;
    padding-left:0px;
    padding-right:0px;
  }

}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


</style>
</head>


<body>
<h1>Admin Login</h1>
<div class="login" >
<img src="aa.png" width="150px" class="center">



<form action="" method="post" style="text-align:center;">

<input type="text" placeholder="Username" id="user" name="user">

<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<!-- <span><?php echo $error; ?></span> -->




<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
//  $error = "Username or Password is Invalid";
 echo'Please enter your username and password';
 } 
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "project");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM admin WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: contactlog.php"); // Redirecting to other page
 }
 else
 {
	echo'Username of Password is Invalid';
//  $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
</div>


</body>




</html>