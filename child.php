<?php

 include '../Model/DbConnect.php';

class Mychild extends User {

  public $ChildId;
      public $ParentID;
  public $DateOfBirth;
  public $UserID;
  public $DateOfEnrollment;
  public $EmergencyMobileNumber;
    public $AllergyType;
    public $GroupName;
    public $Password;
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


 
     public function childadd($DateOfBirth, $EmergencyMobileNumber, $AllergyType,$GroupName)
     {
      require_once '../Model/DbConnect.php';
      $db=new DbConnect;
      $sql="INSERT INTO `child` (`DateOfBirth`, `EmergencyMobileNumber`,`AllergyType`,`GroupName`) VALUES ('".$DateOfBirth."','".$EmergencyMobileNumber."','".$AllergyType."','".$GroupName."')";
      $db->executesql($sql);
      
      
  }
    
    public function retrieve(){
        
        $sql= "SELECT MAX (UserID) FROM users";
        $db->executesql($sql);
    }
}
?>
