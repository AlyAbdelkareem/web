<!DOCTYPE html>
<html>
<head>
<title>parent application</title>


</head>

<body>

<form method = "POST">
    <div id="par1" name="par">
        <fieldset>
            <legend>Parent Information</legend>
    <label><b>Name:</b></label>
    <input type="text" name="inpg1" required=''>
    <br>
    <br>
      <label><b>Mobile:</b></label>
    <input type="text" name="inpg2" required='' >
    <br>
    <br>
       <label><b>Email:</b></label>
    <input type="text" name="inpg3" required=''>
    <br>
    <br>
      <label><b>Address:</b></label>
 <select name="select2">
  <option value="1"  >Mokattam</option>
  <option value="2" >Maadi</option>
  <option value="3" >Madinet Nasr</option>

</select>
    <br>

    <br>
       <label><b>HomePhone:</b></label>
    <input type="text" name="inpg6" required=''>
    <br>
    <br>
       <input type="radio" name="religion" value="1"> Muslim<br>
  <input type="radio" name="religion" value="0"> Christian<br>
    <br>
    <br>
       <label><b>Nationality:</b></label>

    <input type="text" name="inpg8" required=''>
    <br>
    <br>
    <input type="radio" name="gender" value="1"> Male<br>
  <input type="radio" name="gender" value="0"> Female<br>
    <br>

    <br>
    <br>


       <label><b>Mother Name:</b></label>

    <input type="text" name="inpg10" required=''>
    <br>
    <br>
       <label><b>Guardian Profession:</b></label>

    <input type="text" name="inpg11" required=''>
    <br>
    <br>
       <label><b>Mother Profession:</b></label>

    <input type="text" name="inpg12" required=''>
    <br>

    <label><b>Password:</b></label>

 <input type="text" name="inpg13" required=''>
 <br>
    <button id="buttg1" name="buttg1"> Assign parent</button>
    </fieldset>
        </div>
    </form>

    <br>
    <br>
    <br>


    </body>








</html>



<?php

include 'User.php';
 include 'Parent.php';




if (!empty($_POST['inpg1']) ) {
     $Name = $_POST['inpg1'];
     $Mobile = $_POST['inpg2'];
     $Email = $_POST['inpg3'];
     $AddressID = $_POST['select2'];
     $HomePhone= $_POST['inpg6'];
     $Religion = $_POST['religion'];
     $Nationality = $_POST['inpg8'];
     $Gender = $_POST['gender'];
     $MotherName = $_POST['inpg10'];
     $GuardianProfession = $_POST['inpg11'];
     $MotherProfession = $_POST['inpg12'];
     $Password = $_POST['inpg13'];

     $p1 = new MyParent();

        //$Address = $u1->getAddress($AddressID);

        $result1 = $p1->adduser2($Name, $Mobile, $Email, $AddressID, $HomePhone, $Religion, $Nationality, $Gender, $Password, "2",$MotherName, $GuardianProfession, $MotherProfession);

     //  $result2 = $p1->addpparent($MotherName, $GuardianProfession, $MotherProfession,"1");

//echo $result1;
        //$Boda = p1->retrieve();
        //$result = $p1->addParent($MotherName,$GaurdianProfession,$MotherProfession);*/



   }

   else {



    }

?>
