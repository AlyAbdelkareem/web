<html>
    <head>
<title>Children application</title>


</head>
    <body>    

<form action="" method = "POST">
     <div id="par2" name="par2">
         <fieldset>
             <legend>Child Information</legend>
    <label><b>Name:</b></label>
    <input type="text" name="inpg14" required=''>
    <br>
    <br>
      <label><b>Mobile:</b></label>
    <input type="text" name="inpg15" required=''>
    <br>
    <br>
       <label><b>Email:</b></label>
    <input type="text" name="inpg16" required=''>
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
        <label><b>Photo:</b></label>

    <input type="text" name="inpg18" >
    <br>
    <br>
       <label><b>HomePhone:</b></label>
    <input type="text" name="inpg19" required=''>
    <br>
    <br>
        <input type="radio" name="religion" value="1"> Muslim<br>
  <input type="radio" name="religion" value="0"> Christian<br>
    <br>
    <br>
       <label><b>Nationality:</b></label>

    <input type="text" name="inpg21" required=''>
    <br>
    <br>
      <input type="radio" name="gender" value="1"> Male<br>
  <input type="radio" name="gender" value="0"> Female<br>
    <br>
    <br>
   <label><b>Password:</b></label>

    <input type="text" name="inpg26" required=''>
             <br>
             <br>

             <label><b>Date of birth:</b></label>

    <input type="text" name="inpg23" >
             <br>
    <br>
         <label></label>


             <br>
    <br>
       <label><b>Emergency mobile number:</b></label>

    <input type="text" name="inpg24" required=''>
    <br>
    <br>

       <label><b>Allergy type:</b></label>

    <input type="text" name="inpg25" required=''>

    <br>
<br>
             
             <label><b>Group</b></label>
   <select name="select1">
  <option value="level1(2-3)"  >Level1(2-3)</option>
  <option value="level2(3-4)" >Level2(3-4)</option>
  <option value="level3(4-5)" >Level3(4-5)</option>
  
</select>
             <button id="buttg1" name="buttg2"> Assign child</button>
  
             </fieldset>
    </div>

    </form>
    </body>
</html>


<?php

include '../Model/User.php';
include '../Model/child.php';




if (!empty($_POST['inpg14']) ) {
     $Name = $_POST['inpg14'];
     $Mobile = $_POST['inpg15'];
     $Email = $_POST['inpg16'];
     $AddressID = $_POST['select2'];
     $HomePhone= $_POST['inpg19'];
     $Religion = $_POST['religion'];
     $Nationality = $_POST['inpg21'];
   
     $Gender = $_POST['gender'];
     $DateOfBirth = $_POST['inpg23'];
    
     $EmergencyMobileNumber= $_POST['inpg24'];
    
     
         $AllergyType = $_POST['inpg25'];
    
        $GroupName = $_POST['select1'];
     $Password = $_POST['inpg26'];
     $p1 = new Mychild();
   
        //$Address = $u1->getAddress($AddressID);
        
 
        $result1 = $p1->adduser($Name, $Mobile, $Email, $AddressID, $HomePhone, $Religion, $Nationality, $Gender, $Password, "3");
       $result2 = $p1->childadd($DateOfBirth, $EmergencyMobileNumber, $AllergyType,$GroupName);
//echo $result1;
        //$Boda = p1->retrieve();
        //$result = $p1->addParent($MotherName,$GaurdianProfession,$MotherProfession);*/
        

    
   }

   else {
       
        

    }

?>