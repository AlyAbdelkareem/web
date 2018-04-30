<?php
/*include_once 'user.php';
include_once 'Parent.php';*/
include_once 'dbconnect.php';

class child /*extends users*/{

  public $ChildID;
  public $ParentID;
  public $DateOfBirth;
  public $DateOfEnrollment;
  public $EmergencyMobileNumber;
  public $AllergyType;
  public $GroupName;
  public $UserID;
  public $user_type;

  function __construct(){

  }
  public function DisplayChildTable(){
      $i=-1;
      $db = dbconnect::getInstance();
      $mysqli = $db->getConnection();
      $sql_query = "SELECT * FROM child , parent, users where child.UserID = users.UserID And Child.ParentID = parent.ParentID ORDER By users.UserID";
      $sql1="SELECT usertype.Name FROM users INNER JOIN usertype ON users.user_type=usertype.UserTypeID where UserTypeID=2 ORDER By users.UserID";

      $result = $mysqli->query($sql_query);
      while ($row = mysqli_fetch_array($result)){
        $i++;
        $this->Name[$i]=$row["Name"];
        $this->ChildID[$i] = $row['ChildID'];
        $this->DateOfBirth[$i] = $row['DateOfBirth'];
        $this->DateOfEnrollment[$i] = $row['DateOfEnrollment'];
        $this->AllergyType[$i] = $row['AllergyType'];
        $this->GroupName[$i] = $row['GroupName'];
        $this->Religion[$i] = $row['Religion'];
        $this->Nationality[$i] = $row['Nationality'];
        $this->Gender[$i] = $row['Gender'];
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


  public function ChildOfTheParent(){
      $i=-1;
    $db = dbconnect::getInstance();
    $mysqli = $db->getConnection();
    $sqlquery ="SELECT * FROM child , users where child.UserID = users.UserID And Child.ParentID = ParentID ORDER By users.UserID";
    $sql1="SELECT usertype.Name FROM users INNER JOIN usertype ON users.user_type=usertype.UserTypeID where UserTypeID= 2 ";
    $result1 = $mysqli->query($sqlquery);
    while ($rows = mysqli_fetch_array($result1)){
      $i++;
      $this->Name[$i]=$rows["Name"];
      $this->ChildID[$i] = $rows['ChildID'];
      $this->DateOfBirth[$i] = $rows['DateOfBirth'];
      $this->DateOfEnrollment[$i] = $rows['DateOfEnrollment'];
      $this->AllergyType[$i] = $rows['AllergyType'];
      $this->GroupName[$i] = $rows['GroupName'];
      $this->Religion[$i] = $rows['Religion'];
      $this->Nationality[$i] = $rows['Nationality'];
      $this->Gender[$i] = $rows['Gender'];
      $this->UserID[$i] = $rows['UserID'];

    }
    $result1=$mysqli->query($sql1);
    $i=-1;
    while ($row2 = mysqli_fetch_array($result1)){
      $i++;
      $this->user_type[$i] =$row2["Name"];
  }
  return $i;
  }
}

 ?>
