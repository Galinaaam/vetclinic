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
                                            <label for="category_name">Vārds:</label>
                                            <input type="text" class="form-control"  placeholder="Vārds" name="vards">
                                        </div>
                                        <div class="form-group">
                                            <label for="category_name">E-pasts:</label>
                                            <input type="text" class="form-control" placeholder="E-pasts" name="epasts">
                                        </div>
                                        <div class="form-group">
                                            <label for="category_name">Tālrunis:</label>
                                            <input type="text" class="form-control" placeholder="Tālrunis" name="telefons">
                                        </div>

                                        <div class="form-group">
                                            <label for="category_name">Ziņa:</label><br>
                                            <textarea name="field_3" id="m2542_field_3" data-required="true" placeholder=""></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="sutit">Nosūtīt</button>
                                    </form>
                                    <?php
                                        if(isset($_POST['sutit'])){
                                            $db->saveMessge($_POST['fctg'],$_POST['xdffy']);
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