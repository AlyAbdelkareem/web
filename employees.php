<?php

 include '../Model/DbConnect.php';

class Myemployee extends User {
  public $PreviousExperience;
  public $AvailableStartDate;
  public $Available;
  public $EmployeeID;
  public $Salary;
  public $StartDate;
  public $EndDate;
public $State;
public $NameOfUniversity;
public $Location;
public $Degree;
public $SubjectOfStudy;
public $Graduate;
    public $EducationTypeID;
    


      public $db;
    
  public function __construct()
  {


  }


   public function addemp2($NameOfUniversity, $Location, $Degree, $SubjectOfStudy,$Graduate)
     {
     require_once '../Model/DbConnect.php';
      $db=new DbConnect;
      $sql="INSERT INTO `employeeeducation` (`NameOfUniversity`, `Location`, `Degree`,`SubjectOfStudy`,`Graduate`) VALUES ('".$NameOfUniversity."','".$Location."','".$Degree."','".$SubjectOfStudy."','".$Graduate."')";
      $db->executesql($sql);
      
      
  }
 
     public function addemp($PreviousExperience, $AvailableStartDate, $Available, $Salary,$StartDate,$EndDate,$State)
     {
     require_once '../Model/DbConnect.php';
      $db=new DbConnect;
      $sql="INSERT INTO `employee` (`PreviousExperience`, `AvailableStartDate`, `Available`,`Salary`,`StartDate`,`EndDate`,`State`) VALUES ('".$PreviousExperience."','".$AvailableStartDate."','".$Available."','".$Salary."','".$StartDate."','".$EndDate."','".$State."')";
      $db->executesql($sql);
      
      
  }
    
    
}
?>
