<?php require_once ("./classes/autoload.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dogsvet</title>
    <?php Template_class::getLibs(); ?>
</head>
<body>
  <?php Template_class::getNav(); ?>

    <div class="container-fluid main-container">
        <div class="row">
            <div class="main">
                <div  align="center">
                    <div class="row">
                        <div class="col-sm-7"> <h1>Dogs VET</h1>
                            <p> Veterinārā klīnika </p>
                            <p> Adrese: Sergeja Eizenšteina iela 45,</p> <p> Rīga, LV-1079, Latvija</p>

                            <p>Tālrunis +371 67530359</p>
                            <p>Mob. tālrunis +371 26499690</p>

                            <p>Mob. tālrunis +371 22418182</p>


                            <p>Darba laiks</p>

                            <p>P., O., T., C., P.</p>
                            <p>10.00–20.00</p>


                            <p>Sestdien</p>
                            <p>10.00–17.00</p>

                            <p>Svētdien</p>
                            <p>Brīvs</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2175.0061591262515!2d24.233173816086204!3d56.96582698089521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecc2cabeef1fb%3A0x154986df7849f488!2sSergeja+Eizen%C5%A1teina+iela+45%2C+Vidzemes+priek%C5%A1pils%C4%93ta%2C+R%C4%ABga%2C+LV-1079!5e0!3m2!1sru!2slv!4v1513792194947" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-sm-3">
                            <div class="container-fluid">
                                <div class="row">
                                    <form action="kontakti.php" method="post">
                                        <div class="form-group"><br><br><br>
                                            <p>Jautājumu gadījumā nosūtiet mums ziņu, aizpildot kontaktformu:</p><br><br>
                                            <label for="1">Vārds:</label>
                                            <input id="1" type="text" class="form-control"  placeholder="Vārds" name="vards">
                                        </div>
                                        <div class="form-group">
                                            <label for="2">E-pasts:</label>
                                            <input id="2" type="text" class="form-control" placeholder="E-pasts" name="epasts">
                                        </div>
                                        <div class="form-group">
                                            <label for="3">Tālrunis:</label>
                                            <input id="3" type="text" class="form-control" placeholder="Tālrunis" name="telefons">
                                        </div>
                                        <div class="form-group">
                                            <label for="4">Ziņa:</label><br>
                                            <textarea id="4" name="zina"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="sutit">Nosūtīt</button>
                                    </form>
                                    <?php
                                        if(isset($_POST['sutit'])) {
                                            $validate->isEmpty($_POST['vards'],"Lūdzu ierakstiet vārdu<br>");
                                            $validate->isEmpty($_POST['epasts'],"Lūdzu ierakstiet e-pastu<br>");
                                            $validate->isEmpty($_POST['telefons'],"Lūdzu ierakstiet telefonu<br>");
                                            $validate->isEmpty($_POST['zina'],"Lūdzu ierakstiet ziņu<br>");

                                            if($validate->getErrorStatus ()==0){
                                                echo 'Dati saglabāti';

                                                $db->saveMessge($_POST['vards'],$_POST['epasts'],$_POST['telefons'],$_POST['zina']);
                                            }
                                            else{
                                               echo 'Lūdzu aizpildiet visus laukus!';
                                            }

                                        }

                                    ?>
                                </div>
                                <div class="leftaside col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>
</html>