<?php
require_once 'dbconnect.php';
include 'Options.php';
ini_set('memory_limit', '-1');

class PaymentMethods
{
    public $ID;
    public $Name;


    public function __construct(){

    }


    public function getOptions($PID){

        $options = array();

        $sql = "SELECT `OID` FROM `paymentoptions` WHERE `PID` =" .$PID;
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $result = $mysqli->query($sql);
        while($row = mysqli_fetch_array($result))
        {
            $option = new Options();
            $option->getOption($row['OID']);
            array_push($options, $option);
        }

        return $options;

    }



    public function getAllMethods(){

        $methods = array();
        $sql="SELECT * FROM `paymentmethods`";
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $result1 = $mysqli->query($sql);
        while($row = mysqli_fetch_array($result1)){
            $method = new PaymentMethods();
            $method->Name = $row['Name'];
            $method->ID = $row['PID'];
            array_push($methods, $method);
        }
         return $methods;
    }

}
