?>
<form method="post">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Pieteikties uz pieņemšanu
    </button>
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1 class="modal-title">Pieteikties uz pieņemšanu:</h1>
                </div>
                <div class="modal-body">
                    <form action="Template_class.php" method="post">
                        <div class="form-group"><br><br><br>
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
                        <div class="form-group">
                            <label for="4">Ziņa:</label><br>
                            <textarea id="4" name="zinaa"></textarea>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary " name="send">Nosūtīt</button>
                    <button type="submit" class="btn btn-primary " name="cancel">Atcelt</button>

                </div>
            </div>

        </div>
    </div>


    <form method="post">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Pieteikties uz skaistumkopšanas salonu
        </button>
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title">Pieteikties uz skaistumkopšanas salonu</h2>
                    </div>
                    <div class="modal-body">
                        <form action="Template_class.php" method="post">
                            <div class="form-group"><br><br><br>
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
                            <div class="form-group">
                                <label for="4">Ziņa:</label><br>
                                <textarea id="4" name="zinaa"></textarea>
                            </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default " data-dismiss="modal" name="send">Nosūtīt</button>
                        <button type="submit" class="btn btn-primary " name="cancel">Atcelt</button>

                    </div>
                </div>

            </div>
        </div>




        <form method="post">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Uzdot
                jautājumu veterinārārstam
            </button>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Lai uzdot jautājumu veterinārārstam,lūdzu aizpildiet kontaktformu:</h4>
                        </div>
                        <div class="modal-body">
                            <form action="Template_class.php" method="post">
                                <div class="form-group"><br><br><br>
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
                                <div class="form-group">
                                    <label for="4">Ziņa:</label><br>
                                    <textarea id="4" name="zinaa"></textarea>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary " name="send">Nosūtīt</button>
                            <button type="submit" class="btn btn-primary " name="cancel">Atcelt</button>

                        </div>
                    </div>

                </div>
            </div>
            }
            }








if(isset($_POST['send'])) {
$validate->isEmpty($_POST['vardss'],"Lūdzu ierakstiet vārdu<br>");
$validate->isEmpty($_POST['epastss'],"Lūdzu ierakstiet e-pastu<br>");
$validate->isEmpty($_POST['telefonss'],"Lūdzu ierakstiet telefonu<br>");
$validate->isEmpty($_POST['zinaa'],"Lūdzu ierakstiet ziņu<br>");

if($validate->getErrorStatus ()==0){
echo 'Dati saglabāti';

$db->saveMessges($_POST['vardss'],$_POST['epastss'],$_POST['telefonss'],$_POST['zinaa']);
}
else{
echo 'Lūdzu aizpildiet visus laukus!';
}

}
