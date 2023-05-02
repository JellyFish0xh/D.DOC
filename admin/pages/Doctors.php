<?php
    include("../controller/Doctor.php");
    $doctors = new Doctor();
    $data = $doctors->get_all();
?>
<div class="container">
<h3><b><?php echo $_GET["page"]." Table"; ?></b></h3>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Specialties</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class = "DOC_table">
        <?php
                while($doc = $data->fetch_assoc())
                {?>
                    <tr>
                    <td><?=$doc["ID"]?></td>
                    <td><?=$doc["Name"]?></td>
                    <td><?=$doc["Address"]?></td>
                    <td>
                        <?php
                            $sp = $doctors->get_sp_ID($doc["Specialties"])->fetch_assoc();
                            echo $sp["Name"];
                        ?>
                    </td>
                    <td><?=$doc["Description"]?></td>
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
<!-- Button to trigger the modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Doctor</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Doctor</h4>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form id="Inser_DOC">
          <div class="form-group">
            <label for="item-name" class="control-label">Name:</label>
            <input type="text" class="form-control" id="item-name" name="Name">
          </div>
          <div class="form-group">
            <label for="item-name" class="control-label">Address:</label>
            <input type="text" class="form-control" id="item-name" name="address">
          </div>
          <div class="form-group">
            <label for="item-name" class="control-label">Specialty:</label>
            <select name="sp" id="">
              <?php
                $sp = $doctors->get_sp_all();
                while($sp_ = $sp->fetch_assoc()){?>
                    <option value="<?=$sp_["ID"]?>"><?= $sp_["Name"]?></option>
                <?php } ?> 
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="item-description" class="control-label">Description:</label>
            <textarea name="des" class="form-control" id="item-description"></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
        </form>
      </div>
      <!-- Modal footer -->
    </div>
  </div>
</div>