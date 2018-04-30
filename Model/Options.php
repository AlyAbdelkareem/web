<?php
require_once '../Database/dbconnect.php';

class Options
{
    public $ID;
    public $Name;
    public $Type;


    public function __construct(){



    }


    public function getOption($OID){

        $sql = "SELECT * FROM `options` WHERE `OID`=" .$OID;
        $db = dbconnect::getInstance();
        $mysqli = $db->getConnection();
        $result1 = $mysqli->query($sql);
        $row = mysqli_fetch_array($result1);
        for($i=0; $i<sizeof($row); $i++){
        $this->ID = $row['OID'];
        $this->Name = $row['name'];
        $this->Type = $row['Type'];
        }

    }


}
