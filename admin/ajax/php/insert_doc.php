<?php
    include("../../../controller/Doctor.php");
    $doctors = new Doctor();
    $id = $doctors->insert($_POST["Name"],$_POST["address"],$_POST["sp"],$_POST["des"]);
    $doc_Data = $doctors->get_name($id)->fetch_assoc();
    $Sp = $doctors->get_sp_ID($doc_Data["Specialties"])->fetch_assoc();
    $Sp=$Sp["Name"];
    $id = $doc_Data["ID"];
    $name = $doc_Data["Name"];
    $address = $doc_Data["Address"];
    $des = $doc_Data["Description"];
    echo "<tr>
    <td>$id</td>
    <td>$name</td>
    <td>$address</td>
    <td>$Sp</td>
    <td>$des</td>
    <td>
    <a href='#' class='btn btn-danger btn-sm'>
        <span class='glyphicon glyphicon-trash'></span>
    </a>
  </td>
  </tr>";


?>