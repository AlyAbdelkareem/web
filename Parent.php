<?php

include_once 'dbconnect.php';

class MyParent extends User {
  public $ParentID;
  public $ChildId;
  public $MotherName;
  public $GuardianProfession;
  public $MotherProfession;
public $UserID;
  public $isAccepted;
  public $db;

  public function __construct()
  {
/*
    $this->Name= $Name;
    $this->Mobile= $Mobile;
    $this->Email= $Email;
    $this->AddressID= $AddressID;
    $this->HomePhone= $HomePhone;
    $this->Religion= $Religion;
    $this->Nationality= $Nationality;
    $this->Gender= $Gender;
    $this->Password= $Password;
    $this->MotherName = $MotherName;
    $this->GuardianProfession = $GuardianProfession;
    $this->MotherProfession = $MotherProfession;
    $this->isAccepted = $isAccepted;*/

  }




     public function addpparent($MotherName, $GuardianProfession, $MotherProfession, $UserID)
     {
      require_once '../Model/DbConnect.php';
      $db=new DbConnect;
      $sql="INSERT INTO `parent` (`MotherName`, `GuardianProfession`, `MotherProfession`) VALUES ('".$MotherName."','".$GuardianProfession."','".$MotherProfession."')";
      $db->executesql($sql);


  }
    public function deleteparent($code){
              require_once '../Model/DbConnect.php';
      $db=new DbConnect;
        $sql = "DELETE FROM parent WHERE ParentID='". $code."' ;";

              $db->executesql($sql);

    }


    public function retrieve(){

        $sql= "SELECT MAX (UserID) FROM users";
        $db->executesql($sql);
    }
}
?>
