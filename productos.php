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
<br><br>    
<div id="login-form">
    <form action="controlador/Regristar_Usuario.php" method="post">
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre" name="Name" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Precio" name="FName" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Tipo" name="SName" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Cantidad" name="Tel" required="required">
        </div>
    </form>
</div>