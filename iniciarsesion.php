    <?php
    include_once("header.html");
    ?>
    <style type="text/css">
        .login-form {
            width: 400px;
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
    <script src="js/login.js"></script>
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
<br><br>
<div class="login-form">
    <form action="" id="formLg">
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required" name="na">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="pw">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" id="bt">Log in</button>
        </div>
    </form>
    <p class="text-center">
        <a href="registro.html">Crear cuenta </a>
    </p>
</div>
    <?php
    include_once("footer.html");
    ?>
</div>

