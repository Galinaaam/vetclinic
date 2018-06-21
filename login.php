<?php require_once ("./classes/autoload.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dogsvet</title>
    <?php Template_class::getLibs();
    if(isset($_SESSION['epasts'])){
        $db->header("index.php");
    }?>
</head>
<body>
<?php Template_class::getNav(); ?>

<div class="container-fluid main-container">
    <div class="row">
        <div class="main">
            <div  align="center">
                <div class="col-sm-2"></div>
                <div class="col-sm-8"> <h1>Pieslēgties savam profilam </h1>

                    <form action="login.php" method="post">
                        <div class="form-group auto">
                                <label for="5">Epasts:</label>
                                <input id="5" type="email" class="form-control"   name="epasts" value="<?php echo @$_POST['epasts']; ?>">
                            </div>
                            <div class="form-group auto">
                                <label for="6">Parole:</label>
                                <input id="6" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control"  name="parole" value="<?php echo @$_POST['parole']; ?>" title="
Vismaz 8 rakstzīmes, kurās ir vismaz viens skaitlis un rakstzīmes no augšējā un apakšējā burta">
                            </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="login">Ienākt</button>
                        </div>
                    </form>

    <?php if(isset($_POST['login'])) {
        $validate->isEmpty($_POST['epasts'],"Lūdzu ierakstiet Epastu<br>");
        $validate->isEmpty($_POST['parole'],"Lūdzu ierakstiet paroli<br>");
        if(!$validate->errorStatus){
            $db->getUsr($_POST['epasts'],md5($_POST['parole']));
        }
    }
    ?>
</body>
</html>