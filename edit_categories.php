
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
                <div class="col-sm-8"> <h1>Dogs VET </h1>
                    <div class="col-sm-2"></div>

                        <div class="row content">

                            <div class="col-sm-8 text-left">
                                <form action="Lietotaji.php" method="post">
                                    <?php $db->getEditUsrForm($_GET["users"]); ?>
                                    <button type="submit" class="btn btn-primary" name="savedata">Saglabāt</button>
                                </form>
                            </div>
                            <div class="col-sm-2">
                                <div class="well">

                            </div>
                        </div>
                    </div>


                    </div>
                </div>
            </div>
</body>
</html>



