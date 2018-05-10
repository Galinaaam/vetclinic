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
                <?php Template_class::getAdminMenu(); ?>
                <div class="col-sm-8"> <h1>Dogs VET </h1>
                    <div class="col-sm-2"></div>
                    <div class="navbar-header">
                        <li><a href="Lietotaji.php">Lietotaji</a></li>
                        <?php
                        if(isset($_REQUEST['email']) == ""){
                            $db->selectCategory();
                        }
                        elseif(isset($_REQUEST['email']) != "" && isset($_REQUEST['delete']) == ""){
                            $db->editCategory($_POST['vards'],$_POST['uzvards'], $_POST['email']);
                            $db->selectCategory();
                        }
                        else{
                            $db->deleteCategory($_POST['cID']);
                            $db->selectCategory();
                        }
                        ?>

                </div>
            </div>
            </div>
</body>
</html>