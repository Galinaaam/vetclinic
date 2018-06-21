<?php
    class DB_class
    {
        protected $server = "localhost";
        protected $db = "vet";
        protected $dbuser = "root";
        protected $dbpw = "";

        function __construct()
        {
            $this->con = new mysqli($this->server, $this->dbuser, $this->dbpw, $this->db);
            $this->con->set_charset("utf8");
        }

        function saveMessge($var, $ep, $tel, $zin)
        {
            $sql = "INSERT INTO contactform(vards,epasts,telephone,zina) VALUES('{$var}','{$ep}','{$tel}','{$zin}')";
            $this->con->query($sql);
        }

        function saveMessges($vard, $epa, $tele, $zina)
        {
            $sql = "INSERT INTO quedoctor(vardss,epastss,telephones,zinaa) VALUES('{$vard}','{$epa}','{$tele}','{$zina}')";
            $this->con->query($sql);
        }


        function saveforma($pak, $time, $vardss, $epastss, $telefonss)
        {
            $sql = "INSERT INTO visitform(pakalpojums,datums,vards,uzvards,talrunis) VALUES('{$pak}','{$time}','{$vardss}','{$epastss}','{$telefonss}')";
            $this->con->query($sql);

        }

        function saveformaaa($paks, $times, $vardsss, $epastsss,$telefonsss)
        {
            $sql = "INSERT INTO visitformbeu(pakalpojums,datums,vards,uzvards,talrunis) VALUES('{$paks}','{$times}','{$vardsss}','{$epastsss}','{$telefonsss}')";
            $this->con->query($sql);

        }

        function saveform($epasts, $parole, $vards, $uzvards, $telefons)
        {
            $sql = "INSERT INTO users(email,parole,vards,uzvards,telefons) VALUE('{$epasts}','{$parole}','{$vards}','{$uzvards}','{$telefons}')";
            $this->con->query($sql);
        }
        function editUsr($e, $va, $uz, $te){
            $sql = "UPDATE users set email = '{$e}', vards = '{$va}', uzvards = '{$uz}' , telefons = '{$te}' WHERE  email='{$e}'";
            $this->con->query($sql);
        }
        function getEditUsrForm($e){

            $sql = "SELECT email, vards, uzvards, telefons FROM users WHERE email= {$e}";
            $rs=$this->con->query($sql);
            while($row = $rs-> fetch_assoc ()) {
                echo "
                    <div class='form-group'>
                        <label for='4'>E-pasts:</label>
                        <input id='4' type='email' name='e' value='{$row['email']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='5'>Vārds:</label>
                        <input id='5' type='text' name='va' value='{$row['vards']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='6'>Uzvārds:</label>
                        <input id='6' type='text' name='uz' value='{$row['uzvards']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='7'>Telefons:</label>
                        <input id='7' type='text' name='te' value='{$row['telefons']}'  class='form-control'/>
                    </div>
                    <input type='hidden' name='email' value='{$row['email']}'/>
                    
                ";
            }
        }


        function getUsers()
        {
            $i = 0;
            $sql = "SELECT email, vards, uzvards, telefons FROM users";
            $rs = $this->con->query($sql);
            echo "<table class='table table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Epasts</th>
                        <th>Vārds</th>
                        <th>Uzvārds</th>
                        <th>Telefons</th>
                        <th colspan='2'>Iespējas</th>
                    </tr>
                </thead>
                ";
            while ($row = $rs->fetch_assoc()) {
                $i++;
                echo "<tr>
                    <td>{$i}.</td>
                    <td>{$row["email"]}</td>
                    <td>{$row["vards"]}</td>
                    <td>{$row["uzvards"]}</td>
                    <td>{$row["telefons"]}</td>
                    <td>
                        <a href='./edit_categories.php?user={$row['email']}'>Labot</a>
                    </td>
                    <td>
                        <form action='./Lietotaji.php' method='post'>
                            <input type='hidden' name='delUserID' value='{$row['email']}'/>
                            <button type='submit' class='btn btn-danger' name='deleteUser'>Dzēst</button>
                        </form>
                    </td>
                </tr>";
            }
            echo "</table>";

        }


        function redirect($send)
        {
            echo "<meta http-equiv=\"refresh\" content=\"0;URL={$send}\">";
        }
        function deleteUsr($e){
            $sql = "DELETE FROM users WHERE email='{$e}'";
            $this->con->query($sql);
        }

        function getUsr($epasts, $parole)
        {
            $sql = "SELECT u.email, u.parole ,u.role FROM users u WHERE email='{$epasts}' AND parole='{$parole}'";
            $rs = $this->con->query($sql);
            if ($rs->num_rows !== 0) {
                while ($row = $rs->fetch_assoc()) {
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['parole'] = $row['parole'];
                    $_SESSION['role'] =$row['role'];
                }
                $this->redirect('profile.php');
            } else {
                echo "Nepareizs lietotājs vai parole";

            }
        }

        function header($send)
        {
            header("location:{$send}");
        }

        function logout()
        {
            echo "<form action='' method='post'>
                    <button type='submit' name='login' class='btn btn-primary'>Iziet</button>
                </form>";
            if (isset($_POST['i'])) {
                session_destroy();
                $this->header('index.php');
            }

        }
    }