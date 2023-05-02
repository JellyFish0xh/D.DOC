<?php
    include("../controller/Request.php");
	include("../controller/Doctor.php");
    $doctors = new Doctor();
    $Requests = new Request();
    $data = $Requests->get_all();
?>
<div class="container">
	<h3><b><?php echo $_GET["page"]." Table"; ?></b></h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Doctor</th>
		<th>Date</th>
		<th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php
                while($pat = $data->fetch_assoc())
                {?>
                    <tr>
                    <td><?=$pat["ID"]?></td>
                    <td><?=$pat["patient_Name"]?></td>
                    <td><?=$pat["patient_Phone"]?></td>
					<td><?php
							$Doc_name = $doctors->get_name($pat["Doctor"])->fetch_assoc();
							echo $Doc_name["Name"];
						?>
					</td>
					<td><?=$pat["Date"]?></td>
                    <td>
                    <button id="del_req" class="btn btn-danger btn-sm" data-id = "<?=$pat["ID"]?>">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
					<button <?php
          echo $pat["statue"] == 1 ? 'disabled' : '';
          ?> class="btn btn-success btn-sm C_req" data-id = "<?=$pat["ID"]?>">
						<span class="glyphicon glyphicon-ok"></span>
					</button>
                  </td>
                  </tr>
        <?php   } ?>  
    </tbody>
  </table>
</div>