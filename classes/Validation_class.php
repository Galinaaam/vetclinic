<?php
class Validation_class{
    public
        $errorStatus = 0;

    function isEmpty($fieldName, $errorMsg){
        if($fieldName == ""){
            $this->errorStatus = 1;
            echo $errorMsg;
        }
    }
    function isEmptyAll($epasts,$parole,$vards,$uzvards,$telefons){
        if($epasts == "" && $parole == "" && $vards == "" && $uzvards == "" && $telefons == ""){
            echo 'Lūdzu aizpildiet visus laukus!';
            $this->errorStatus = 1;
            return;
        }
        $this->isEmpty($epasts,"Lūdzu ierakstiet Epastu<br>");
        $this->isEmpty($parole,"Lūdzu ierakstiet Paroli<br>");
        $this->isEmpty($vards,"Lūdzu ierakstiet vārdu<br>");
        $this->isEmpty($uzvards,"Lūdzu ierakstiet Uzvārdu<br>");
        $this->isEmpty($telefons,"Lūdzu ierakstiet Telefonu");

    }
    function getErrorStatus(){
        return $this->errorStatus;
    }

    static function showErrors(){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
    function reseterror()
    {
        $this->errorStatus = 0;
    }

}
