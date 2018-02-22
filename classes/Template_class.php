<?php
class Template_class{
    var $author = "abc";
    static function getLibs(){
        echo '<meta charset="UTF-8">
	<!--js files-->
	<script src="./libs/bootstrap3/js/jquery-3.2.1.min.js"></script>
	<script src="./libs/bootstrap3/js/bootstrap.min.js"></script>
	<!--css files-->
	<link rel="stylesheet" href="./libs/bootstrap3/css/bootstrap.css"/>
	<link rel="stylesheet" href="./css/main.css"/>
    <link href="./libs/lightbox/css/lightbox.css" rel="stylesheet">';
    }
    static function getNav(){
        echo '<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="logo">
      <img src="img/doglogo.jpg">
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="index.php">Sākums</a></li>
          <li><a href="galerija.php">Galerija</a></li>
          <li><a href="pakalpojumi.php">Pakalpojumi</a></li>
          <li><a href="kontakti.php">Kontakti</a></li>
          <li><a href="lietotaji.php">Lietotāji</a></li>
      </ul>
    </div>
  </div>
</nav>';
    }
}
