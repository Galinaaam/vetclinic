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

        function saveform($epasts, $parole, $vards, $uzvards, $telefons)
        {
            $sql = "INSERT INTO users(email,parole,vards,uzvards,telefons) VALUE('{$epasts}','{$parole}','{$vards}','{$uzvards}','{$telefons}')";
            $this->con->query($sql);
        }

        function selectCategory()
        {
            $i = 0;
            $sql = "SELECT email, vards, uzvards,telefons FROM users";
            $rs = $this->con->query($sql);
            echo "<table class='table table-hover'>
                <thead>
                    <tr>
                        <th>Nr</th>
                        <th>Epasts</th>
                        <th>Vards</th>
                        <th>Uzvards</th>
                        <th>Telefons</th>
                        <th colspan='2'>Opcijas</th>
                    </tr>
                </thead>
                ";
            while ($row = $rs->fetch_assoc()) {
                $i++;
                echo "<tr>
                    <td>{$i}.</td>
                    <td>{$row["email"]}</td>
                    <td>{$row["vards"]}</td>
                    <td> {$row["uzvards"]}</td>
                    <td> {$row["telefons"]}</td>
                    
                    
                    
                </tr>";
            }
            echo "</table>";
        }
        function editCategory($vards, $uzvards, $email){
            $sql = "UPDATE users set vards = '{$vards}', uzvards = '{$uzvards}' WHERE  id='{$email}'";
            $rs=$this->con->query($sql);
            echo  $sql;
        }
        function deleteCategory($email){
            $sql = "DELETE FROM users WHERE id='{$email}'";
            $rs=$this->con->query($sql);
        }
    }
