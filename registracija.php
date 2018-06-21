<?php
    require_once ("./classes/autoload.php");
   // require_once ("./classes/rb-mysql.php");
?>
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
                            <input id="5" type="email" class="form-control"   name="epasts" value="<?php echo @$_POST['epasts']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="6">Parole:</label>
                            <input id="6" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"  name="parole" value="<?php echo @$_POST['parole']; ?>" title="
Vismaz 8 rakstzīmes, kurās ir vismaz viens skaitlis un rakstzīmes no augšējā un apakšējā burta">
                        </div>
                        <div class="form-group">
                            <label for="7">Vārds:</label>
                            <input id="7" type="text" class="form-control" class="letters" name="vards" value="<?php echo @$_POST['vards']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="7">Uzvārds:</label>
                            <input id="7" type="text" class="form-control" class="letters" name="uzvards" value="<?php echo @$_POST['uzvards']; ?>">

                        </div>
                        <div class="form-group">
                            <label for="8">Telefons:</label>
                            <input id="8" type="tel" pattern="(\+?\d[- .]*){7,13}" title="Starptautiskais, valsts vai vietējais tālruņa numurs" class="form-control"  name="telefons" value="<?php echo @$_POST['telefons']; ?>">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="sutit">Nosūtīt</button>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['sutit'])) {
                        $validate->isEmptyAll($_POST['epasts'],$_POST['parole'],$_POST['vards'],$_POST['uzvards'],$_POST['telefons']);

                        if($validate->getErrorStatus ()==0){
                            $db->saveform($_POST['epasts'],md5($_POST['parole']),$_POST['vards'],$_POST['uzvards'],$_POST['telefons']);

                            echo 'Dati saglabāti';

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