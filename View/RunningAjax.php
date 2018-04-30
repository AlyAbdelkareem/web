<?php
include_once '../Model/PaymentMethods.php';
$q = $_REQUEST["q"];
$PM = new PaymentMethods;

$Options = $PM->getOptions($q);

    for($i=0; $i<sizeof($Options); $i++){

    echo "<form>";

    echo '<label>'.$Options[$i]->Name.'</label>';
    echo '<input style="width:200px;height:50px;display:block;"type="text" name="inpg1" placeholder='.$Options[$i]->Type.' required>';
    }
    echo '<label>Amount</label>';
    echo '<input style="width:200px;height:50px;display:block;"type="text" placeholder="Number"name="inpg2" required>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
?>
