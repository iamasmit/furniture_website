<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
 
}

h3{
    text-align: center;
    color: #f9004d;
}
.container{
    width: 55%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #f9004d;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Josefin Sans', sans-serif;

}
.about{
    width: 100%;
    height: 100vh;
    background-color:black;
    display: flex;
    justify-content: center;
    align-items: center;

}
.about .content img{
    height: auto;
    width: 500px;
    max-width: 100%;
    margin-bottom: -2%;
}

.content{
    width: 1280px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
}




@media  and (max-width: 1180px) {
    .about{
        width: 100%;
        height:auto;
        padding:70px 0px;
    }
    
}
@media  and (max-width: 650px){
    .about .content img{
        margin-bottom 35px;
    }
    
}
</style>
</head>
<body>
<?php
include 'header.php';
?>

<section class="about">
  
    <div class="content">
        <img src="img.jpg" width="100px">
        <div class="container">
          <h3>Contact Us</h3>
            <form action="contact.php" method="post">
              <label for="fname">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Your name..">
          
              <label for="lname">Email</label>
              <input type="text" id="email" name="email" placeholder="Your email address..">

              <label for="lname">Phone</label>
              <input type="text" id="phone" name="phone" placeholder="Your phone number..">
          
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="australia">Nepal</option>
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
              </select>
          
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:150px"></textarea>
          
              <input type="submit" name="submit" value="Submit">
            </form>
          </div>
          
    </div>

</section>
<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="aayush";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit'])){
    if(!empty($_POST['name'])  && !empty($_POST['phone']) 
    && !empty($_POST['email'])  && !empty($_POST['subject'])  && !empty($_POST['country'])
    ){
       $name = $_POST['name']; 
       $email = $_POST['email'];  
       $phone = $_POST['phone']; 
       $subject = $_POST['subject'];
       $country = $_POST['country'];
    
       $query =" insert into contact (name,phone,email,subject,country) 
       values('$name','$phone','$email','$country',' $subject')";
       if ($query_run=mysqli_query($conn,$query)) {
        echo'<script>alert("Form submitted successfully")</script>';
    }
    else
    {
        echo'<script>alert("form not submitted")</script>';
    }
  
    
  }
  else{
    echo'<script>alert("All fields are required")</script>';
    
      } 
}
    

?>



</body>
</html>
