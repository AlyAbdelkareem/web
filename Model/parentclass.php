<?php
/*include_once 'user.php';*/
include_once '../Database/dbconnect.php';

class parent1 /*extends users*/ {

  public $ParentID;
  public $MotherName;
  public $GuardianProfession;
  public $MotherProfession;
  public $isAccepted;
  public $UserID;
  public $user_type;



  function __construct(){

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
  public function DisplayParentTable(){

    $i=-1;
    $db = dbconnect::getInstance();
    $mysqli = $db->getConnection();
    $sql_query = "SELECT * FROM parent, users where parent.UserID = users.UserID ORDER By users.UserID";
    $sql1="SELECT usertype.Name FROM users INNER JOIN usertype ON users.user_type=usertype.UserTypeID where UserTypeID=1 ORDER By users.UserID";

    $result = $mysqli->query($sql_query);
    while ($row = mysqli_fetch_array($result)){
      $i++;
      $this->Name[$i]=$row["Name"];
      $this->Mobile[$i] = $row['Mobile'];
      $this->Email[$i] = $row['Email'];
      $this->AddressID[$i] = $row['AddressID'];
      $this->HomePhone[$i] = $row['HomePhone'];
      $this->Nationality[$i] = $row['Nationality'];
      $this->Gender[$i] = $row['Gender'];
      $this->MotherName[$i] = $row['MotherName'];
      $this->GuardianProfession[$i] = $row['GuardianProfession'];
      $this->MotherProfession[$i] = $row['MotherProfession'];
      $this->UserID[$i] = $row['UserID'];

    }
  $result1=$mysqli->query($sql1);
  $i=-1;
    while ($row1 = mysqli_fetch_array($result1)){
      $i++;
      $this->user_type[$i] =$row1["Name"];
}
return $i;
}
public function addpparent($MotherName, $GuardianProfession, $MotherProfession, $UserID)
{
  $db = dbconnect::getInstance();
  $mysqli = $db->getConnection();
 $sql="INSERT INTO `parent` (`MotherName`, `GuardianProfession`, `MotherProfession`) VALUES ('".$MotherName."','".$GuardianProfession."','".$MotherProfession."')";
 $db->executesql($sql);


}
public function deleteparent($code){
  $db = dbconnect::getInstance();
  $mysqli = $db->getConnection();
   $sql = "DELETE FROM parent WHERE ParentID='". $code."' ;";

         $db->executesql($sql);

}


public function retrieve(){

   $sql= "SELECT MAX (UserID) FROM users";
   $db->executesql($sql);
}

}

?>
