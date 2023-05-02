<?php
    include("../../../controller/Request.php");
    $req = new Request();
    if($_POST["fun"]=="DELETE")
    {
        $req->Del($_POST["id"]);
        echo "Deleted";
    }
    else if ($_POST["fun"]=="Confirm")
    {
        $req->Confrim($_POST["id"]);
        echo "Confirmed";
    }
?>