<!DOCTYPE html>
<html>
<head>
	<title>INFINITY SHOP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/main.css"/>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scaleable=no">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
	<div class="container">
		<a href="#" class="navbar-brand" id="text">INFINITY SHOP</a>
		<ul class="nav navbar-nav">
			<!--DROP DOWN MENU-->
		</ul>
	</div>
 </nav>
 <!--INSERTING IMAGES-->
  <div id="background-image">
  	<div id="image-1"></div>
  </div>
 <!--REMOVING SPACE AND CENTERING IMAGES-->
  <div class="col-md-2"></div>
  <!--INSERTING FEATURED PRODUCTS-->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center"><b>LOG IN</b></h2><br />
      <div class="col-md-3">
        <img src="images/login.jpg" alt="LOG IN" id="images"/>
        <form action="add_cart.php" method="post">
          <div class="form-group">
						<div class="form-group">
              <label for="size">EMAIL:</label>
              <input type="text" class="form-control" id="quantity"name="quantity" />
       </div><br />
            <div class="form-group">
              <label for="size">PASSWORD:</label>
              <input type="text" class="form-control" id="quantity"name="quantity" />
       </div>
      </div>
      </form>
          <a href="/project/index.php" <button type="button" class="btn btn-success">LOG IN</button></a>
      </div>
</div>
<footer class="text-center" id="footer">&copy;copyright 2018-2019 INFINITY SHOP</footer>
</div>
</body>
</html>
