<html>
   <head>
<title>Employee application</title>


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
            
    <label><b>Password:</b></label>

 <input type="text" name="inpg13" required=''>
 <br>
          
            <hr>
            <label><b>Previous Experience:</b></label>

 <input type="text" name="in" required=''>
            <br>
            <br>
                   <label><b>Available Start Date:</b></label>

 <input type="text" name="inpg15" required=''>
            <br>
            <br>
                   <label><b>Available:</b></label>
<br>
            <br>
         <input type="radio" name="inpg16" value="1"> Yes<br>
  <input type="radio" name="inpg16" value="0"> No<br>
            <br>
<br>
                   <label><b>Salary:</b></label>

 <input type="text" name="inpg17" required=''>
            <br>
<br>
                   <label><b>Start Date:</b></label>

 <input type="text" name="inpg18" required=''>
            <br>
<br>
                   <label><b>End Date:</b></label>

 <input type="text" name="inpg19" required=''>
            <br>
<br>
                   <label><b>State:</b></label>

 <input type="text" name="inpg20" required=''>
            <hr>
            <br>
            <br>
     <label><b>Name of University:</b></label>

 <input type="text" name="inpg21" required=''>
            <br>
            <br>
        <label><b>Location:</b></label>

 <input type="text" name="inpg22" required=''>
            <br>
            <br>
            <label><b>Degree:</b></label>

 <input type="text" name="inpg23" required=''>
            <br>
            <br>
            <label><b>Subject of Study:</b></label>

 <input type="text" name="inpg24" required=''>
            <br>
            <br>
            <label><b>Graduate:</b></label>
<br>
        <input type="radio" name="inpg25" value="1"> Yes<br>
  <input type="radio" name="inpg25" value="0"> No<br>
            <br>
             <button id="buttg1" name="buttg1"> Save</button>
        </fieldset>
    </div>
</form>
    </body>
</html>
<?php

include '../Model/User.php';
include '../Model/employees.php';




if (!empty($_POST['inpg21']) ) {
    
     $Name = $_POST['inpg1'];
     $Mobile = $_POST['inpg2'];
     $Email = $_POST['inpg3'];
     $AddressID = $_POST['select2'];
     $HomePhone= $_POST['inpg6'];
     $Religion = $_POST['religion'];
     $Nationality = $_POST['inpg8'];
     $Gender = $_POST['gender'];
     $Password = $_POST['inpg13'];
     
     $PreviousExperience = $_POST['in'];
     $AvailableStartDate = $_POST['inpg15'];
     $Available = $_POST['inpg16'];
     $Salary = $_POST['inpg17'];
     $StartDate = $_POST['inpg18'];
     $EndDate = $_POST['inpg19'];
     $State = $_POST['inpg20'];
    
     $NameOfUniversity = $_POST['inpg21'];
     $Location = $_POST['inpg22'];
     $Degree = $_POST['inpg23'];
     $SubjectOfStudy = $_POST['inpg24'];
     $Graduate = $_POST['inpg25'];
     $p1 = new Myemployee();
   
        
        
       $result1 = $p1->adduser($Name, $Mobile, $Email, $AddressID, $HomePhone, $Religion, $Nationality, $Gender, $Password, "1");
     $result2 = $p1->addemp($PreviousExperience, $AvailableStartDate, $Available,$Salary,$StartDate,$EndDate,$State);
 
$result3 = $p1->addemp2($NameOfUniversity, $Location, $Degree,$SubjectOfStudy,$Graduate);
    
   }

   else {
       
        

    }

?>
