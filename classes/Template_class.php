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

    static function getmenu()
    {
        if(!isset($_SESSION['nick'])){
            echo '<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profils<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="./registracija.php">Reģistrēties</a></li>  
                </ul>
                </li>';
        }
        else{
            echo '<li><a href="./registracija.php">'.$_SESSION['username'].'</a></li>
             <li><form method="post"><button class="btn btn-primary" name="i">Iziet</button></form></li>';
            if(isset($_POST['i'])){
                session_destroy();
                header('location:index.php');
            }
            if($_SESSION['role']==4){
                echo '<li><a href="./Lietotaji.php">Lietotāji</a></li>';
            }
        }
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
                       <li><a href="Lietotaji.php">Lietotaji</a></li>
                  </ul> 
                  
                </div>
               </div>
               <div>
                 <form action="index.php" method="post" class="navbar-form navbar-right">
                        <div class="form-group aut">
                            <label for="6">Epasts:</label>
                            <input id="6" type="text" class="form-control"  name="epasts">
                        </div>
                        <div class="form-group aut"> 
                            <label for="5">Parole:</label>
                            <input id="5" type="text" class="form-control"   name="parole">
                        </div>
                        <div>
                            <button type="submit" class="btn" name="sutit">Ienākt</button>
                        </div>
                         <div class="reg">
                             <a href="">Azmirsi paroli?</a>
                         </div>
                         <div class="reg">
                             <a href="./registracija.php">Reģistrēties</a>
                         </div>
                 </form> 
              </div>
            </nav>';
    }
}
?>