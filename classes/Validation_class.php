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
    function getErrorStatus(){
        return $this->errorStatus;
    }

    static function showErrors(){
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }

}
