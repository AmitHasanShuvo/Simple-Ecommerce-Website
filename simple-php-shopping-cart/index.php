<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
    case "add":
        if (!empty($_POST["quantity"])) {
            $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
            $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));

            if (!empty($_SESSION["cart_item"])) {
                if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                    foreach ($_SESSION["cart_item"] as $k => $v) {
                        if ($productByCode[0]["code"] == $k) {
                            if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                $_SESSION["cart_item"][$k]["quantity"] = 0;
                            }
                            $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                        }
                    }
                } else {
                    $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                }
            } else {
                $_SESSION["cart_item"] = $itemArray;
            }
        }
    break;
    case "remove":
        if (!empty($_SESSION["cart_item"])) {
            foreach ($_SESSION["cart_item"] as $k => $v) {
                if ($_GET["code"] == $k) {
                    unset($_SESSION["cart_item"][$k]);
                }
                if (empty($_SESSION["cart_item"])) {
                    unset($_SESSION["cart_item"]);
                }
            }
        }
    break;
    case "empty":
        unset($_SESSION["cart_item"]);
    break;
}
}
?>
<HTML>
<HEAD>
<TITLE>Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY  >
	<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
	 <div class="container">
		 <ul class="nav navbar-nav  " style="list-style-type:none" >
			 <!--DROP DOWN MEliNU-->





	 <li><a  href="/project/index.php">Home</a></li>
	 <li><a class="active" href="#">Products</a></li>
	 <li><a href="/project/contact.html">Contact</a></li>
	 <li><a href="/project/registration/index1.php">Sign up</a></li>
		 <li><a href="/project/registration/login.php">Log in</a></li>


		 </ul>
	 </div>
	</nav>

	<div class="container">


<h1 style="text-align:right">Welcome to INFINITY SHOP</h1>
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div>
<?php
if (isset($_SESSION["cart_item"])) {
    $item_total = 0; ?>
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;"><strong>Name</strong></th>
<th style="text-align:left;"><strong>Code</strong></th>
<th style="text-align:right;"><strong>Quantity</strong></th>
<th style="text-align:right;"><strong>Price</strong></th>
<th style="text-align:center;"><strong>Action</strong></th>
</tr>
<?php
    foreach ($_SESSION["cart_item"] as $item) {
        ?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["name"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "$".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
    } ?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>
</tbody>
</table>
  <?php
}
?>
</div>

<div class="checkout"><a href="/project/checkout.html">Check out</a></div>

<div id="product-grid">
	<div class="txt-heading">Our  Products</div>
	<?php
    $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
    if (!empty($product_array)) {
        foreach ($product_array as $key=>$value) {
            ?>
		<div class="product-item">
			<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
			<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
			</form>
		</div>
	<?php
        }
    }
    ?>
</div>
	</div>
</BODY>
</HTML>
