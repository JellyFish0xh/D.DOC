<?php
    include("../../../controller/DB.php");
    $tables = $conn->query("SELECT * FROM DB_Tables");
    while($table = $tables->fetch_assoc()){
        $name = $table["table_name"];
        $des  = $table["description"];
       echo "<div class='col-md-4'>
       <div class='panel panel-primary'>
           <div class='panel-heading'><a href='index.php?page=$name' style = 'color:white; text-decoration :none;'>$name</a>
               <span class='pull-right clickable panel-toggle'><em class='fa fa-toggle-up'></em></span></div>
           <div class='panel-body'></p>
           $des
           </div>
       </div>
</div>";
    }
?>