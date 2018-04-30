<?php

include_once "../Database/dbconnect.php";



class Schedule{

    public $subjectID;
    public $roomID;
    public $Day;
    public $Time;
    public $scheduleID;
    public $employeeID;
    public $groupName;


    public function addSchedule($subjectID, $roomID, $Day, $Time, $employeeID, $groupName)
    {

      $db = dbconnect::getInstance();
      $mysqli = $db->getConnection();
      $sql= "INSERT INTO `schedule` (SubjectID,RoomID,Day,Time,EmployeeID,GroupName) Values( $subjectID ,$roomID ,'$Day' ,'$Time', '$employeeID' ,'$groupName')";

      $result= $mysqli->query($sql);


     }


    public function Update($ID)
    {

        $sql = "UPDATE schedule SET SubjectID = '$this->subjectID' , RoomID = '$this->roomID' , Day = '$this->Day' , Time = '$this->Time' , EmployeeID = '$this->employeeID , GroupName = '$this->groupName' WHERE ScheduleID='".$this->scheduleID."'";
        mysql_query($sql);

}

        public function Delete($scheduleID)
    {


        		$sql = "DELETE from schedule where ScheduleID='".$this->scheduleID."'";
		mysql_query($sql);

    }

}


?>
