<?php
require_once("./classes/autoload.php");
?>

<!doctype html>
<html lang="en">
<head>
    <?php Template_class::getLibs(); ?>
    <title>Document</title>
    <script>
        $("document").ready(function () {
        });
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="col-md-12">
        <?php Template_class::getAdminMenu(); ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">Kategorijas labošana</div>
    </div>
    <div class="row">
        <div class="leftaside col-md-3"></div>
        <div class="main col-md-6">
            <form action=".php" method="post">
                <?php $db->selectCurrentCategory($_GET["category"]); ?>
                <button type="submit" class="btn btn-primary" name="savedata">Saglabāt</button>
            </form>
        </div>
        <div class="leftaside col-md-3"></div>
    </div>
</div>
</body>
</html><?php
require_once("./classes/autoload.php");
?>

<!doctype html>
<html lang="en">
<head>
    <?php Template_class::getLibs(); ?>
    <title>Document</title>
    <script>
        $("document").ready(function () {
        });
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="col-md-12">
        <?php Template_class::getAdminMenu(); ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">Kategorijas labošana</div>
    </div>
    <div class="row">
        <div class="leftaside col-md-3"></div>
        <div class="main col-md-6">
            <form action="Lietotaji.php" method="post">
                <?php $db->selectCurrentCategory($_GET["category"]); ?>
                <button type="submit" class="btn btn-primary" name="savedata">Saglabāt</button>
            </form>
        </div>
        <div class="leftaside col-md-3"></div>
    </div>
</div>
</body>
</html>