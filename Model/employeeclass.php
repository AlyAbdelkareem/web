<?php
/*include_once 'user.php';*/
include_once '../Database/dbconnect.php';

class employee /*extends users*/ {

  public $EmployeeID;
  public $previousExperience;
  public $AvailableStartDate;
  public $Available;
  public $Salary;
  public $StartDate;
  public $EndDate;
  public $State;
  public $UserID;
  public $user_type;



  function __construct(){

  }
  public function DisplayemployeeTable(){

    $i=-1;
    $db = dbconnect::getInstance();
    $mysqli = $db->getConnection();
    $sql_query = "SELECT * FROM employeeeducation ,employee, users where employee.UserID = users.UserID AND employeeeducation.EmployeeID = employee.EmployeeID ORDER By users.UserID";
    $sql1="SELECT usertype.Name FROM users INNER JOIN usertype ON users.user_type=usertype.UserTypeID where UserTypeID=3 ORDER By users.UserID";

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
      $this->EmployeeID[$i] = $row['EmployeeID'];
      $this->Salary[$i] = $row['Salary'];
      $this->StartDate[$i] = $row['StartDate'];
      $this->NameOfUniversity[$i] = $row['NameOfUniversity'];
      $this->Degree[$i] = $row['Degree'];
      $this->SubjectOfStudy[$i] = $row['SubjectOfStudy'];
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
  }

  ?>
