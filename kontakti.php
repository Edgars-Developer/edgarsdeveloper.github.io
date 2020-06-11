<?php
include ("./classes/Template_class.php");
$template = new Template_class();
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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

</body>
</html>