<?php
    include("../controller/Patient.php");
    $Patients = new Patient();
    $data = $Patients->get_all();
?>
<div class="container">
	<h3><b><?php echo $_GET["page"]." Table"; ?></b></h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php
                while($pat = $data->fetch_assoc())
                {?>
                    <tr>
                    <td><?=$pat["id"]?></td>
                    <td><?=$pat["Name"]?></td>
                    <td><?=$pat["Phone"]?></td>
                    <td>
                    <a href="#" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </td>
                  </tr>
        <?php   } ?>  
    </tbody>
  </table>
</div>