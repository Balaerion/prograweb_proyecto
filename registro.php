<?php
include_once("header.html");
?>
    <style type="text/css">
        .login-form {
            width:600px;
            margin: 50px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>

<div id="page-top">

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
                        <a class="nav-link js-scroll-trigger" href="login.html">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<br><br>
<div class="login-form">
    <form action="controlador/Regristar_Usuario.php" method="post">
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" name="Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="First Last Name" name="FName" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Second Last Name" name="SName" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tel" name="Tel" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Address" name="Address" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Bank Account" name="Bank_Account" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="User" name="User" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Password" name="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
</div>
        <?php
        include_once("footer.html");
        ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/scrolling-nav.js"></script>

</div>

