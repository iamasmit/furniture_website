<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color: blue;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
 
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
h2{
    text-align: center;
    color: red;
}
h4{
    text-align: center;
    color:blue;
}
</style>
</head>
<body>
<?php
include 'header.php';
?>

<h2>Our Services</h2>

<h4>Some of our Furniture design.</h4>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img.jpg">
      <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="img.jpg">
        <img src="img.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
  


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img.jpg">
      <img src="img.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img.jpg">
      <img src="img.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="aa.png">
      <img src="img.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>



</body>
</html>


