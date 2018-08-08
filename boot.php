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
		<a href="/project/index.php" class="navbar-brand" id="text">INFINITY SHOP</a>
    <a href="/project/boot.php" class="navbar-brand" id="text">BOOTS</a>
		<ul class="nav navbar-nav">
		</ul>
	</div>
 </nav>
 <!--INSERTING IMAGE-->
  <div id="background-image"></div>
 <!--REMOVING SPACE AND CENTERING IMAGES-->
  <div class="col-md-2"></div>

  <!--INSERTING FEATURED PRODUCT-->
  <div class="col-md-8">
    <div class="row">
      <div class="modal-header">
              <h4 class="modal-title text-center"><b>BOOTS</b></h4>
            </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="center-block">
                      <img src="images/boot.jpg" alt="BOOTS" id="imagess" class="details img-responsive"/>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <h4><b>DETAILS:</b></h4>
                    <p>These boots are amazing and very comfortable.Stock is limited.So get them while they last</p>
                    <hr />
                    <p><b>PRICE:</b> $27.90</p>
                    <p><b>BRAND:</b> ADDIDAS</p>
                    <form action="add_cart.php" method="post">
                      <div class="form-group">
                        <div class="col-xs-3">
                          <label for="quantity" id="quantity-label">QUANTITY:</label>
                          <input type="text" class="form-control" id="quantity"name="quantity" />
                        </div><br /><br /><br />
                        <div class="form-group">
                          <label for="size">SIZE:</label>
                     <select name="size" id="size" class="form-control">
                          <option value=""></option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                     </select>
                   </div>
                 </div>
               </form>
                  </div>
                </div>
            <div class="modal-footer">
              <button class="btn btn-default" data-dismiss="modal">CLOSE</button>
              <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>ADD TO CART</button>
            </div>



</div>
<footer class="text-center" id="footer">&copy;copyright 2018-2019 INFINITY SHOP</footer>
</div>

</body>
</html>
