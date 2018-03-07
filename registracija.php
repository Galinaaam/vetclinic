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
                <div class="col-sm-2"></div>
                <div class="col-sm-8"> <h1>Dogs VET</h1>
                <div class="col-sm-2"></div>
                        <h1>Reģistrācija:</h1>
                    <form action="registracija.php" method="post">
                        <div class="form-group">
                            <label for="5">Epasts:</label>
                            <input id="5" type="text" class="form-control"   name="epasts">
                        </div>
                        <div class="form-group">
                            <label for="6">Parole:</label>
                            <input id="6" type="text" class="form-control"  name="parole">
                        </div>
                        <div class="form-group">
                            <label for="7">Vārds:</label>
                            <input id="7" type="text" class="form-control"  name="vards">
                        </div>
                        <div class="form-group">
                            <label for="7">Uzvārds:</label>
                            <input id="7" type="text" class="form-control"  name="uzvards">

                        </div>
                        <div class="form-group">
                            <label for="8">Telefons:</label>
                            <input id="8" type="text" class="form-control"  name="telefons">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="sutit">Nosūtīt</button>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['sutit'])) {
                        $validate->isEmpty($_POST['epasts'],"Lūdzu ierakstiet Epastu<br>");
                        $validate->isEmpty($_POST['parole'],"Lūdzu ierakstiet paroli<br>");
                        $validate->isEmpty($_POST['vards'],"Lūdzu ierakstiet vārdu<br>");
                        $validate->isEmpty($_POST['uzvards'],"Lūdzu ierakstiet uzvārdu<br>");
                        $validate->isEmpty($_POST['telefons'],"Lūdzu ierakstiet telefonu<br>");

                        if($validate->getErrorStatus ()==0){

                            echo 'Dati saglabāti';

                            $db->saveform($_POST['epasts'],$_POST['parole'],$_POST['vards'],$_POST['uzvards'],$_POST['telefons']);
                        }

                        else{
                            // echo 'Lūdzu aizpildiet visus laukus!';
                        }
                    }

                    ?>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>