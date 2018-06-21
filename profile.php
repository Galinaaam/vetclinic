
<?php
require_once ("./classes/autoload.php");
// require_once ("./classes/rb-mysql.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dogsvet</title>
    <?php Template_class::getLibs();
    if(isset($_SESSION['role']) && $_SESSION['role']== "2"){
            header('location:Lietotaji.php');
        }
        ?>

    }
    if(!isset($_SESSION["email"])){
        header("location:login.php");
    } ?>
</head>
<body>
<?php Template_class::getNav(); ?>
<div class="container-fluid main-container">
    <div class="row">

            <div  align="center">
<div align="main">
    <form  action="profile.php" method="post">

        <div id="myModal3" class="modal" role="dialog">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h1 class="modal-title">Pieteikties uz skaistumkopšanas salonu</h1>
                    </div>
                    <div class="modal-body">
                        <form action="profile.php" method="post">
                            <div class="form-group"><br>
                                    <label for="1">Pakalpojums:</label>
                                    <br>
                                    <select name="paka"><option value="izvelaties no saraksta">Izvēlaties no saraksta</option>
                                        <option value="kopsana nagiem">kopsana nagiem</option>
                                        <option value="matu griezums">Matu griezums</option></select>
                                    <br>
                            </div>
                                <div class="form-group">
                                        <label for="1">Izvēlaties datumu un laiku:</label>
                                        <br>
                                        <input type="datetime-local" name="time1">
                                        <br>
                            </div>

                        <div class="form-group">
                            <label for="1">Vārds:</label>
                            <input id="1" type="text" class="form-control"  placeholder="Vārds" name="vardssss">
                        </div>
                        <div class="form-group">
                            <label for="2">E-pasts:</label>
                            <input id="2" type="text" class="form-control" placeholder="E-pasts" name="epastssss">
                        </div>
                        <div class="form-group">
                            <label for="3">Tālrunis:</label>
                            <input id="3" type="text" class="form-control" placeholder="Tālrunis" name="telefonssss">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary " name="send1">Nosūtīt</button>
                        <button type="submit" class="btn btn-primary " name="cancel">Atcelt</button>

                        <?php if(isset($_POST['send1']))
                            if(isset($_POST['send1'])) {
                                $validate->isEmpty($_POST['paka'], "Lūdzu aizpildiet lauku<br>");
                                $validate->isEmpty($_POST['time1'], "Lūdzu izvelaties laiku<br>");
                                $validate->isEmpty($_POST['vardssss'], "Lūdzu ierakstiet ziņu<br>");
                                $validate->isEmpty($_POST['epastssss'], "Lūdzu ierakstiet ziņu<br>");
                                $validate->isEmpty($_POST['telefonssss'], "Lūdzu ierakstiet telefonu<br>");



                                if ($validate->getErrorStatus() == 0) {
                                    $db->saveformaaa($_POST['paka'], $_POST['time1'], $_POST['vardssss'], $_POST['epastssss'], $_POST['telefonssss']);

                                    echo 'Dati saglabāti';




                                } else {
                                    echo 'Lūdzu aizpildiet visus laukus!';

                                }
                            }

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </form>

</div></div>
    </div>
</div>








    <form method="post">

<div id="myModal2" class="modal" role="dialog">
<div class="modal-dialog">

    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Lai uzdot jautājumu veterinārārstam,lūdzu aizpildiet kontaktformu:</h4>
        </div>
        <div class="modal-body">
            <form action="profile.php" method="post">
                <div class="form-group"><br><br><br>
                    <label for="1">Vārds:</label>
                    <input id="1" type="text" class="form-control"  placeholder="Vārds" name="vardsss">
                </div>
                <div class="form-group">
                    <label for="2">E-pasts:</label>
                    <input id="2" type="text" class="form-control" placeholder="E-pasts" name="epastsss">
                </div>
                <div class="form-group">
                    <label for="3">Tālrunis:</label>
                    <input id="3" type="text" class="form-control" placeholder="Tālrunis" name="telefonsss">
                </div>
                <div class="form-group">
                    <label for="4">Ziņa:</label><br>
                    <textarea id="4" name="zinaaa"></textarea>
                </div>


        </div>
        <div class="modal-footer">
<?php
            if(isset($_POST['send2'])) {
                $validate->isEmpty($_POST['vardsss'], "Lūdzu ierakstiet vārdu<br>");
                $validate->isEmpty($_POST['epastsss'], "Lūdzu ierakstiet e-pastu<br>");
                $validate->isEmpty($_POST['telefonsss'], "Lūdzu ierakstiet telefonu<br>");
                $validate->isEmpty($_POST['zinaaa'], "Lūdzu ierakstiet ziņu<br>");



                if ($validate->getErrorStatus() == 0) {
                    echo 'Dati saglabāti';


                    $db->saveMessges($_POST['vardsss'], $_POST['epastsss'], $_POST['telefonsss'], $_POST['zinaaa']);
                } else {
                    echo 'Lūdzu aizpildiet visus laukus!';

                }
            }

            ?> <button type="submit" class="btn btn-primary " name="send2">Nosūtīt</button>
            <button type="submit" class="btn btn-primary " name="cancel">Atcelt</button>
   </div>
    </div>
</div>
</div>

</form>



                                            <form method="post">

        <div id="myModal1" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Pieteikties uz pieņemšanu</h2>
                    </div>
                    <div class="modal-body">


                        <form action="profile.php" method="post">
                            <div class="form-group"><br>
                                <label for="1">Pakalpojums:</label>
                                <br>
                                <select name="pak"><option>Izvēlaties no saraksta</option>
                                    <option value="Vakcinesana">Vakcinesana</option>
                                    <option value="otologiskas proceduras">otologiskas proceduras</option>
                                    <option value="operacija">operacija</option>
                                </select>

                                <br>
                            </div>
                            <div class="form-group">
                                <label for="1">Izvēlaties datumu un laiku:</label>

                                <br>
                                <input type="datetime-local" name="time">
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="1">Vārds:</label>
                                <input id="1" type="text" class="form-control"  placeholder="Vārds" name="vardss">
                            </div>
                            <div class="form-group">
                                <label for="2">E-pasts:</label>
                                <input id="2" type="text" class="form-control" placeholder="E-pasts" name="epastss">
                            </div>
                            <div class="form-group">
                                <label for="3">Tālrunis:</label>
                                <input id="3" type="text" class="form-control" placeholder="Tālrunis" name="telefonss">
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary " name="send5">Nosūtīt</button>
                        <button type="submit" class="btn btn-primary " name="cancel">Atcelt</button>
                        <?php
                        if(isset($_POST['send5'])) {
                            $validate->isEmpty($_POST['pak'], "Lūdzu aizpildiet lauku<br>");
                            $validate->isEmpty($_POST['time'], "Lūdzu izvelaties laiku<br>");
                            $validate->isEmpty($_POST['vardss'], "Lūdzu ierakstiet ziņu<br>");
                            $validate->isEmpty($_POST['epastss'], "Lūdzu ierakstiet ziņu<br>");
                            $validate->isEmpty($_POST['telefonss'], "Lūdzu ierakstiet telefonu<br>");




                            if ($validate->getErrorStatus() == 0) {
                                $db->saveforma($_POST['pak'], $_POST['time'], $_POST['vardss'], $_POST['epastss'], $_POST['telefonss']);

                                echo 'Dati saglabāti';

                            } else {
                                echo 'Lūdzu aizpildiet visus laukus!';

                            }
                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
                                            </form>





        <div  align="center">
            <div class="container-fluid main-container">

                            <div class="but">

                            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal1">Pieteikties uz pieņemšanu
                            </button>
                            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal2">Uzdot
                                jautājumu veterinārārstam
                            </button>

                            <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal3">Pieteikties uz skaistumkopšanas salonu
                            </button></div>
            </div>


        </div>

    <div  align="center">

        <h1>Profils</h1>
        <div class="col-sm-2"></div>
        <h1>Sveiks
            <?php echo $_SESSION['email']; ?> </h1>


    <div class='col-sm-7'>
        <div><img src='./img/profile.png' alt=''></div>
    </div>

    <div>
        <div class='col-sm-1'>
        <tr><td>Vārds:<br> <br><br></td><td></td><td><button class='btn btn-warning ' name='setU'>labot</button></td></tr>
        <br><br><br><br>
        <tr><td>Uzvārds: <br><br><br></td><td></td><td><button class='btn btn-warning' name='setU'>labot</button></td></tr><br><br><br>
        <tr><td>e-pasts:<br><br><br> </td><td></td><td><button class='btn btn-warning' name='setU'>labot</button></td></tr><br><br><br>
        <tr><td>Telefons:<br><br><br> </td><td></td><td><button class='btn btn-warning' name='setU'>labot</button></td></tr><br><br><br>
</div>
</div>
</div>



</body>
</html>




