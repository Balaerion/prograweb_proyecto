<?php
require_once("header.html");
require('modelo/aDatos.php');
$productos=$mysqli->query("Select *
                        FROM producto
                        INNER JOIN imagen ON producto.idproducto = imagen.producto_idproducto");
$dynamicList = "";
$productCount = mysqli_num_rows($productos); // count the output amount
if ($productCount > 0) {
	while($row = mysqli_fetch_array($productos)){ 
        $src=$row["ruta"];
        $dynamicList .= ' <div class="col-lg-3 col-md-4 col-xs-6">
            <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="'.$src.'" alt="">
            </a></div>';
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
?>

  <div>
          <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">BEZA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="floral.html">Floral Ties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="bow.html">Bow Ties</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="cart.html">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="login.php">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="container">
      <h1 class="my-4 text-center text-lg-left">Floral Ties</h1>
      <div class="row text-center text-lg-left">
          <?php echo $dynamicList; ?>
      </div>

    </div>

    <?php
    include_once("footer.html");
    ?>
    </footer>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </div>

