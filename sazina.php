<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include ("./classes/Template_class.php");
$template = new Template_class();
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    $template->getLibs();
    ?>
    <script>
        $("document").ready(function () {

        });
    </script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="" alt=""  ></a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
            <ul class="nav navbar-nav navbar-center">
                <li  class="active">
                <li><a href="index">Jaunumi</a></li>
                <li><a href="">Par mums</a></li>
                <li><a href="">Galerija</a></li>
                <li><a href="sazina">Saziņa</a></li>
                <li><a href="kontakti">Kontakti</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="contaier-fluid" id="">
    <div class="row">
        <div class = "col-md-2">
            <p></p>
        </div>
        <div    class="col-lg-8">
            <form action="sazina" method="post">
            <div class="form-group">
                <label for="name">Vārds:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="surname">Uzvārds:</label>
                <input type="text" class="form-control" id="surname" name="surname">
            </div>
            <div class="form-group">
                <label for="email">Epasts:</label>
                <input type="email" class="form-control" id="email" placeholder="Ievadiet savu epastu" name="email">
            </div>
        <div class="form-group">
            <label for="phone">Telefons:</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="question">Jūsu jautājums</label>
            <textarea class="form-control" id="question" name="question" rows="3"></textarea>
        </div>
                <button class="btn btn-success" type="submit" name="save">Nosūtīt </button>

            </form>
                <div class = "col-md-2">
                    <p></p>
                </div>
        </div>
    </div>
    <?php
    if(isset($_POST['save'])){
        echo "<b>Vārds: </b>{$_POST['name']}";
        echo "<b>Uzvārds: </b>{$_POST['surname']}<br/>";
        echo "<b>epasts: </b>{$_POST['email']} <br/>";
        echo "<b>Telefons: </b>{$_POST['phone']} <br/>";
        echo "<b>Jūsu jautājums: </b>{$_POST['question']}";
    }

    ?>
</body>
</html>



