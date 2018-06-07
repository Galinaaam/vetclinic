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
                <div class="col-sm-8"> <h1>Paroles atjaunošana</h1>
                    <form action="login.php" method="post">
                        <div class="form-group auto">
                            <label for="5">Epasts:</label>
                            <input id="5" type="email" class="form-control"   name="epasts" value="<?php echo @$_POST['epasts']; ?>">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" name="sutit">Atjaunot</button>
                        </div>
                    </form>


</body>
</html>