<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
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
.text{
    width: 550px;
    max-width: 100%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
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
.text h1{
    color: #f9004d;
    font-size: 65px;
    margin-bottom: 20px;
    text-transform: capitalize;
}
.text h5{
    color: white;
    font-size: 25px;
    text-transform: capitalize;
    letter-spacing: 2px;
}
.text p{
    color: blanchedalmond;
    font-size: 18px;
    line-height: 28px;
    letter-spacing: 1px;
    margin-bottom: 45px;

}
button{
    background-color: #f9004d;
    color: white;
    border: 2px solid transparent;
    text-decoration: none;
    border: 30px;
    font-size: 17px;
    font-weight: bold;
    padding: 10px 30px;
    border-radius: 30px;

}
button:hover{
    transform: scale(1.2);
    background-color: transparent;
    border: 2px solid;
    color: #f9004d;
    transform: .4s;
    cursor: pointer;

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
    .text h1{
        font-size: 60px;
        margin-bottom: 25px;
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
            <div class="text">
                <h1>About Us</h1>
                <h5>Aayush Saugat Furniture & Lifestyle</h5>
                <p>
                    This site is a great example of what we have said before: sometimes it’s enough to create an excellent “About me” page to promote your brand (which, actually, will work as a full-fledged website).
We like the sleek design and beautiful photos that complement it. You find it fascinating too? Here is proof that simple sites work efficiently! “All the great things are simple”, right?
As you can see, the simple and intuitive Weblium editor helps anyone create an attractive website in the shortest possible time, without having special knowledge of web development. Simplicity is the new ingenuity!
                </p>
                <button type="button">Hire me</button>

            </div>
        </div>

    </section>
    
</body>
</html>