<?php
include '../Model/PaymentMethods.php';
$child = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Invoice</title>


</head>

<body>

<form method = "POST">

    <?php
    $PM = new PaymentMethods();
    $methods = $PM->getAllMethods();
    ?>

    <select name="Methods" id="methods" onchange="loadFields()">

    <?php
        for($i=0; $i<sizeof($methods); $i++){
            echo '<option value="'.$methods[$i]->ID.'">'.$methods[$i]->Name.'</option>';
        }
        ?>


    </select>
    </form>
    <form>
    <div id="Options">
        <p>Hi Dr Ayman</p>


    </div>
    <br />
    <button id="download" type="button" onclick="alert('Downloaded')">
        	Download Transcript
</button>
</form>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script src="../js/jspdf.min.js"></script>

<script>
function loadFields()
        {
          var x = document.getElementById("methods").value;
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             document.getElementById("Options").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "RunningAjax.php?q=" + x, true);
          xhttp.send();
        }
    </script>

  <script src="../javaScript/JavaScript.js"></script>
        <script>
    $(function () {

    var specialElementHandlers = {
        '#editor': function (element,renderer) {
            return true;
        }
    };
 $('#download').click(function () {
        var doc = new jsPDF();
        doc.fromHTML(
            $('#Options').html(), 15, 15,
            { 'width': 190, 'elementHandlers': specialElementHandlers },
            function(){ doc.save('Invoice.pdf'); }
        );

    });
});

</script>

</body>
</html>
