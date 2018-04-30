<?php

include_once "../Database/dbconnect.php";



class Subject{

    public $ID;
    public $subjectName;



    public function addSubject($subjectName)
    {// $db = dbconnect::getInstance();
    // $mysqli = $db->getConnection();
    // $sql_query = "SELECT foo FROM .....";
    // $result = $mysqli->query($sql_query);
      $db = dbconnect::getInstance();
      $mysqli = $db->getConnection();
         $sql= "INSERT INTO `subject`  SET Name = '$subjectName'";
        $result= $mysqli->query($sql);





    }

    public function DeleteSubject($ID)
    {


        		$sql = "DELETE from subject where ID='".$this->ID."'";
		mysql_query($sql);

    }


    public function UpdateSubject($ID)
    {

        $sql = "UPDATE subject SET Name ='".$this->subjectName."' WHERE SubjectID='".$this->ID."'";
        mysql_query($sql);

    }

    public function SelectAllSubjects()
    {

        $sql = "SELECT * FROM subject";
        mysql_query($sql);

    }


}





?>
