<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
<style>
     *{
    margin:0;
    padding:0;
    font-family: 'Josefin Sans', sans-serif;
    box-sizing: border-box;
    /* background-image: url(image5.png); */
  }
  nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 45px;
    padding-left: 8%;
    padding-right: 8%;
    padding-bottom: 50px;
   

}

  nav{
    width: 100%;
    height: 50px;
    background-color: black;
    line-height: 50px;
  }
  nav ul{
    float: right;
    margin-right: 30px;
  }
  nav ul li{
    list-style-type: none;
    display: inline-block;
    transition: 0.7s all;
  }
  
  nav ul li a{
    text-decoration: none;
    color: #fff;
    padding: 30px;
  }
  nav ul li:hover{
    background-color:#088;
  }

  .logo{
    color: white;
    font-size: 35px;
    letter-spacing: 1px;
    cursor: pointer;
}


nav ul li a:hover{
    color: #f9004d;
    transition: .4s;
    transform: scale(1.1);
}
.btn{
    background-color: #f9004d;
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 10px 25px;
    border-radius: 30px;
    transition: transform .4s;

}
.btn:hover{
    transform:  scale(1.1);
}

@media(max-width: 1180px){
    .hero{
        width: 100%;
        height:auto;
        padding:70px 0px;
    }
}
@media (max-width: 650px){
    .hero .logo img{
        margin-bottom :35px;
    }
    .content .newslatter{
        font-size: 60px;
        margin-bottom: 25px;
    }
}



    </style>

<div class="hero">
<nav>
            <h2 class="logo"><img src="aa.png" width="150px"></h2>
            <ul>
                
            <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="service.php">Services</a></li>
                
                <li><a href="contact.php">Contact Us</a></li>
                
            </ul>
            <a href="login.php" class="btn">Admin Login</a>
            
        </nav>
</div>