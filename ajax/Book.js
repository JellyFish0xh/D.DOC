$('#Select_SP').on('change', function() {
    var selectedOption = $(this).val();
    $.ajax({
        url: 'ajax/Book.php',
        method: 'POST',
        data: { id: selectedOption },
        success: function(response){
            $("#Doctor_names").html(response);
            $("#Doctor_names").removeAttr("disabled");
            $("#wbrd").remove();
            }
      });
});
$("#R_Form").submit(function(e){
    e.preventDefault();
    $.ajax({
            url:"ajax/Send.php",
            type:"POST",
            data: new FormData(this),
            success:function(res){
                $('#processing-modal').modal('show');
			},
			processData : false ,
			contentType : false ,
        })
})