$(document).ready(function(){
    $.ajax({
      url: 'ajax/php/onload.php',
      method: 'GET',
      success: function(response) {
        $("#tables_panel").html(response);
      },
    }); 
  });
  $("#del_req").click(function(){
    $id = $(this).data("id");
    $x = $(this);
    $fun = "DELETE"
    $.ajax({
      url: 'ajax/php/Request.php',
      method: 'POST',
      data :{id:$id, fun :$fun},
      success: function(response) {
        $x.parent().parent().remove();
        console.log(response);
      },
    }); 
  });
  $(".C_req").click(function(){
    $x = $(this)
    $id = $(this).data("id");
    $fun = "Confirm"
    $.ajax({
      url: 'ajax/php/Request.php',
      method: 'POST',
      data :{id:$id, fun :$fun},
      success: function(response){
        $($x).attr('disabled',true);
      },
    }); 
  });
  $("#Inser_DOC").submit(function(e){
    e.preventDefault();
    $.ajax({
            url:"ajax/php/insert_doc.php",
            type:"POST",
            data: new FormData(this),
            success:function(res){
                $(".DOC_table").append(res);
                $('#myModal').modal('hide');
			},
			processData : false ,
			contentType : false ,
        })
})