<?php require_once ("./classes/autoload.php");
require_once ("./classes/rb-mysql.php");
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
                <div class="col-sm-8"> <h1>Pieslēgties savam profilam </h1>
                   <?php
                        $dbc = mysqli_connect('localhost','root','','lesson');
                    if( isset($_COOKIE['id'])) {
                        if( isset($_POST['login']) ){
                        $user_username =mysqli_real_escape_string($dbc, trim($_POST['epasts']));
                        $user_username =mysqli_real_escape_string($dbc, trim($_POST['parole']));
                         if(!empty($users_epasts) && !empty($user_password)){
                             $query = ""SELECT 'id','epasts' FROM 'login' WHERE
                             epasts= '$user_username' AND parole =SHA('$user_password')";
                             
                    }
                    {
                    $errors = array();
                    $users = R::findOne('users', 'login = ?',array($_POST['login']));
                    if( $users )
                    {
                    //epasts eksiste

                    if( password_verify($_POST['password'], $users->password)
                    ){
                    //ok
                    }else
                    {
                    $errors[] = 'Nepareizi ievadita parole!';
                    }
                    }else
                    {
                    $errors[] ='Lietotajs ar tadu epastu jau ir!';
                    }
                    if( ! empty($errors) )
                    {
                    echo '<div style="color:red;">'.array_shift($errors).'</div><hr>';
                    }
                    }
                    ?>





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
                    <?php
                    if(isset($_POST['login'])) {
                        $validate->isEmpty($_POST['epasts'],"Lūdzu ierakstiet Epastu<br>");
                        $validate->isEmpty($_POST['parole'],"Lūdzu ierakstiet paroli<br>");
                    }
                    ?>
                    <?php


</body>
</html>

