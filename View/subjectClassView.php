<?php
session_start();
require ("../Database/dbconnect.php");

include '../Model/subjectClass.php';
include '../Model/scheduleClass.php';


if(isset($_POST['type'])){

            $Subject = new Subject();
            $Schedule = new Schedule();
    if($_POST['type'] == "addSubject"){
         $Subject->addSubject($_POST['name']);
    }

    if($_POST['type'] == "addSchedule"){
         $Schedule->addSchedule($_POST['subjectID'], $_POST['roomID'], $_POST['day'], $_POST['time'], 1, $_POST['group']);
    }

}


?>

<html>
<body>





   <div class="tnputBox">
 <h2> Add Subject </h2>

 </div>

     <form method = "POST">
    <input type="hidden" value="addSubject" name="type">
 <label> Subject Name</label>
      <input type ="text" name ="name" required="">
      <input type ="submit" value="Add Subject"class="">
    </form>

    <form method = "POST">
        <input type="hidden" value="addSchedule" name="type">
    <h2> Add Schedule    </h2>

 <label> Subject Name</label>
         <select name ="subjectID"  class="dropmenu">
                      <?php
                      $db = dbconnect::getInstance();
                      $mysqli = $db->getConnection();
            $sql = "SELECT * FROM subject";
              $result= $mysqli->query($sql);
            while($rowz = mysqli_fetch_array($result)){
                echo '<option value="'.$rowz['SubjectID'].'">'.$rowz['SubjectID'].'</option>';
            }
         ?>
         </select>

             <br>
     <br>


<label> Room Number</label>
      <select name ="roomID"  class="dropmenu">                   <?php
      $db = dbconnect::getInstance();
      $mysqli = $db->getConnection();
          $sql = "SELECT * FROM rooms";
            $result= $mysqli->query($sql);
            while($rowz = mysqli_fetch_array($result)){
                echo '<option value="'.$rowz['RoomID'].'">'.$rowz['RoomID'].'</option>';
            }
         ?></select>
     <br><br>
<label> Day</label>
  <select name ="day" class = "dropmenu">
         <option value="Saturday"> Saturday </option>
         <option value="Sunday"> Sunday </option>
         <option value="Monday"> Monday </option>
         <option value="Tuesday"> Tuesday </option>
         <option value="Wednesday"> Wednesday </option>
         <option value="Thursday"> Thursday </option>
 </select>
     <br><br>
<label> Time</label>
     <select name ="time" class = "dropmenu">
         <option value="09:00"> 09:00 </option>
         <option value="010:00"> 10:00 </option>
         <option value="11:00"> 11:00 </option>
         <option value="12:00"> 12:00 </option>
     </select>
     <br><br>
<label> Teacher</label>
         <select name =""  class="dropmenu">
             <?php
             $db = dbconnect::getInstance();
             $mysqli = $db->getConnection();
            $sql = "SELECT * FROM employee";
            $result= $mysqli->query($sql);
            while($rowz = mysqli_fetch_array($result)){
                echo '<option value="'.$rowz['EmployeeID'].'">'.$rowz['EmployeeID'].'</option>';
            }
         ?></select>

             <br>
     <br>
   <label> Group Number</label>
         <select name ="group"  class="dropmenu">
         <option value="1"> 1 </option>
         <option value="2"> 2 </option>
         <option value="3"> 3 </option>
         <option value="4"> 4 </option>
        </select>
         <br><br>
         <input type ="submit" value="addSchedule"class="">










 </form>


</body>
</html>
