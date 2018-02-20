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
        function saveMessge($a, $b){
            $sql = "INSERT INTO contactform(vards,epasts,telephone,zina) VALUES('{$a}','{$b}')";
            $rs=$this->con->query($sql);
            echo $sql;
        }
    }