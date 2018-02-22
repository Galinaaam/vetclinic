<?php
    class DB_class{
        protected $server = "localhost";
        protected $db = "vet";
        protected $dbuser = "root";
        protected $dbpw = "";

        function __construct()
        {
            $this->con = new mysqli($this->server, $this->dbuser, $this->dbpw, $this->db);
            $this->con->set_charset("utf8");
        }
        function saveMessge($var, $ep,$tel,$zin){
            $sql = "INSERT INTO contactform(vards,epasts,telephone,zina) VALUES('{$var}','{$ep}','{$tel}','{$zin}')";
            $this->con->query($sql);
        }

        function saveform($epasts, $parole,$vards,$uzvards,$telefons){
            $sql = "INSERT INTO users(email,parole,vards,uzvards,telefons) VALUE('{$epasts}','{$parole}','{$vards}','{$uzvards}','{$telefons}')";
            $this->con->query($sql);
        }
    }
