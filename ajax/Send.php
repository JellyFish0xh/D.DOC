<?php
    include("../controller/Request.php");
    $x = new Request();
    $x->save($_POST["Name"],$_POST["Phone"],$_POST["D_name"]);
?>