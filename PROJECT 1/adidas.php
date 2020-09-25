<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPORTO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <style>
img { 
    width: 100%;
    height: max;
    opacity: 100;
}  
.button {
  padding: 5px 15px;
  font-size: 10px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #red;
  background-color: #black;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  </style>
</head>
<header>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}
</style>
</header>
<body>
  <div>
	<ul>
    <li style="float:right"><a class="active" href="login.php">Login</a></li>
    <li style="float:right"><a class="active" href="register.php">Register</a></li>
	</ul>
  </div>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="nike.php" class="dropbtn">Nike</a></li>
  <li><a href="adidas.php" class="dropbtn">Adidas</a></li>
  <li><a href="puma.php" class="dropbtn">Puma</a></li>
  <li><a href="reebok.php" class="dropbtn">Reebok</a></li> 
  </ul>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="item active">
        <img src="a.jpg" alt="a" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="d.jpg" alt="d" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
	  <div class="item">
        <img src="red.jpg" alt="red" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>
	<div class="container">
	

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <div class="container">
	<h1>SHOES</h1>
<div class="container">
<div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="predator.jpg" target="_blank">
          <img src="predator.jpg" alt="predator" style="width:100%">
          <div class="caption">
		  <h3>Predator 18.1 Firm Ground</h3>
		  <h4>Men's Football Shoes</h4>
	      <h5>Rp3.000.000</h5>
           <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="bounce.jpg" target="_blank">
          <img src="bounce.jpg" alt="bounce" style="width:100%">
          <div class="caption">
		  <h3>Mad Bounce 2018</h3>
		  <h4>Men's Basketball Shoe</h4>
		  <h5>Rp1.600.000</h5>
		  <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="harden.jpg" target="_eblank">
          <img src="harden.jpg" alt="harden" style="width:100%">
          <div class="caption">
		  <h3>Harden B/E X</h3>
		  <h4>Men's Basketball Shoes</h4>
		  <h5>Rp1.800.000</h5>
           <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
	<div class="col-md-3">
      <div class="thumbnail">
        <a href="dame.jpg" target="_eblank">
		  <img src="dame.jpg" alt="dame" style="width:100%">
          <div class="caption">
		  <h3>Dame D.O.L.L.A. </h3>
		  <h4>Men's Basketball Shoes</h4>
		  <h5>Rp1.300.000</h5>
            <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
 <div class="container">
<div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="alpha.jpg" target="_blank">
          <img src="alpha.jpg" alt="alpha" style="width:100%">
          <div class="caption">
		  <h3>Alphabounce Beyond</h3>
		  <h4>Men's Running Shoe</h4>
	      <h5>Rp1.900.000</h5>
           <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="ultra.jpg" target="_blank">
          <img src="ultra.jpg" alt="ultra" style="width:100%">
          <div class="caption">
		  <h3>Ultraboost All Terrain Shoes</h3>
		  <h4>Men's Running Shoes</h4>
		  <h5>Rp3.200.000</h5>
		  <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="edge.jpg" target="_eblank">
          <img src="edge.jpg" alt="edge" style="width:100%">
          <div class="caption">
		  <h3>Edge Lux 2</h3>
		  <h4>Women's Shoes</h4>
		  <h5>Rp1.300.000</h5>
           <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
	<div class="col-md-3">
      <div class="thumbnail">
        <a href="pure.jpg" target="_eblank">
		  <img src="pure.jpg" alt="pure" style="width:100%">
          <div class="caption">
		  <h3>Pureboost X</h3>
		  <h4>Women's Running Shoes</h4>
		  <h5>Rp2.200.000</h5>
            <p><button class="button">SHOP NOW!</button></p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<footer class="page-footer font-small mdb-color pt-4">
<div class="container text-center text-md-left">
<div class="row text-center text-md-left mt-3 pb-3">
<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      
	  <hr class="w-100 clearfix d-md-none">
	  <br><h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6></br>
          <p>SPORTO</p>
        </div>
		<hr class="w-100 clearfix d-md-none">
		<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <br><h6 class="text-uppercase mb-4 font-weight-bold">Products</h6></br>
          <p>
            <a href="nike.php">Nike</a>
          </p>
          <p>
            <a href="adidas.php">Adidas</a>
          </p>
          <p>
            <a href="reebok.php">Reebok</a>
          </p>
          <p>
            <a href="puma.php">Puma</a>
          </p>
        </div>
		<hr class="w-100 clearfix d-md-none">
		<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
         <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fa fa-home mr-3"></i> Semarang, SRG 50134, IDN</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> kensanarendra@gmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> +6285883566729</p>
          <p>
            <i class="fa fa-print mr-3"></i> +6281239392058</p>
        </div>
		<div class="col-md-5 col-lg-4 ml-lg-0">

          <div class="text-center text-md-right">
            <div class="container">
  
		</div>
	</div>  
</body>
</html>
