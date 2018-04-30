<?php
//include_once"";
include_once 'dbconnect.php';
class User
{
  public $UserID;
  public $Name;
  public $Mobile;
  public $Email;
  public $AddressID;
  public $HomePhone;
  public $Religion;
  public $Nationality;
  public $Gender;
  public $Password;
  public $db;
  public $ParentID;
  public $ChildId;
  public $MotherName;
  public $GuardianProfession;
  public $MotherProfession;

  function __construct()
  {
/*
      $this->$UserID=$UserID;
      $this->$Name=$Name;
      $this->$Mobile=$Mobile;
      $this->$Email=$Email;
      $this->$AddressID=$AddressID;
      $this->$HomePhone=$HomePhone;
      $this->$Religion=$Religion;
      $this->$Nationality=$Nationality;
      $this->$Gender=$Gender;
      $this->$Password=$Password;*/

  }



  public function adduser($Name,$Mobile,$Email,$AddressID,$HomePhone,$Religion,$Nationality,$Gender,$Password, $UserTypeID){
      require_once '../Model/DbConnect.php';
      $db=new DbConnect;
      $sql="INSERT INTO `users` (`Name`, `Mobile`, `Email`, `AddressID`, `HomePhone`, `Religion`, `Nationality`, `Gender`, `Password`, `user_type`) VALUES ('".$Name."','".$Mobile."','".$Email."','".$AddressID."','".$HomePhone."','".$Religion."','".$Nationality."','".$Gender."','".$Password."', '".$UserTypeID."')";

      $db->executesql($sql);




  }




      public function adduser2($Name,$Mobile,$Email,$AddressID,$HomePhone,$Religion,$Nationality,$Gender,$Password, $UserTypeID,$MotherName, $GuardianProfession, $MotherProfession){
      require_once 'dbconnect.php';

      $db=new dbconnect;
      $sql="INSERT INTO `users` (`Name`, `Mobile`, `Email`, `AddressID`, `HomePhone`, `Religion`, `Nationality`, `Gender`, `Password`, `user_type`) VALUES ('".$Name."','".$Mobile."','".$Email."','".$AddressID."','".$HomePhone."','".$Religion."','".$Nationality."','".$Gender."','".$Password."', '".$UserTypeID."')";

   $db->executesql($sql);

      $sql_querys = "SELECT * FROM users ORDER BY UserID DESC LIMIT 1" ;

                    $results = $mysqli->query($sql_querys);

                    $rows=mysqli_fetch_array($results);

        $sql="INSERT INTO `parent` (`MotherName`, `GuardianProfession`, `MotherProfession`,`UserID`) VALUES ('".$MotherName."','".$GuardianProfession."','".$MotherProfession."','".$rows['UserID']."')";





  }




    public function delete($code){
              require_once '../Model/DbConnect.php';
      $db=new DbConnect;
        $sql = "DELETE FROM users WHERE UserID='". $code."' ;";

              $db->executesql($sql);

    }




    /* public function up($code,$code2,$code3){
              require_once '../Model/DbConnect.php';
      $db=new DbConnect;
        $sql = "UPDATE users SET Name='". $code2."' WHERE '". $code3."'='". $code."' ;";

              $db->executesql($sql);

    }
    */



    public function up ($code,$Name,$Mobile,$Email,$AddressID,$HomePhone,$Religion,$Nationality,$Gender,$Password, $UserTypeID){
              require_once '../Model/DbConnect.php';
      $db=new DbConnect;
        $sql = "SELECT * FROM users WHERE ID =  '". $code."' ;";

              $db->executesql($sql);

    }




}








 ?>
