<html>
    <body>
    <form method = "POST">
    <div id="par1" name="par">
       
        
        
        
        
    <input type=text; name="ko"> 
 <button id="btnt" type="submit" name="subbtnn"  >delete</button>
        
        </div> 
        </form>
        </body>
</html>

<?php

include '../Model/User.php';
  include '../Model/Parent.php';




if(isset($_POST['subbtnn'])){
    $code = $_POST['ko']; 
   
       $p1 = new MyParent();
    
       $result2 = $p1->delete($code);
    $result4 = $p1->deleteparent($code);
   // $result3 = $p1->up($code,$Name,$Mobile,$Email,$AddressID,$HomePhone,$Religion,$Nationality,$Gender,$Password, $UserTypeID);

        

    
   }

   else {
       
        

    }

?>
