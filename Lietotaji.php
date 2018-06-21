<?php require_once ("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dogsvet</title>
    <?php Template_class::getLibs(); ?>
    <script>
        $(function () {
            $("#6").attr("class","active");
        });
    </script>
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
                    <div class="navbar-header">
                        <?php $db->getUsers()?>


                        <?php
                        if(@$_POST['email'] != ''){
                            $db->editUsr($_POST['e'], $_POST['va'], $_POST['uz'], $_POST['te']);
                        }
                        if(isset($_POST['deleteUser'])){
                            $db->deleteUsr($_POST['delUserID']);
                        }
                        ?>


                </div>
            </div>
            </div>
</body>
</html>