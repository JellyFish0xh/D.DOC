$(document).ready(function() {
    var selectedOption = $('select').val();
    console.log(selectedOption);
    $.ajax({
      url: 'ajax/all_Doctors.php',
      method: 'POST',
      data: { id: selectedOption },
      success: function(response) {
        $(".DOC_Cards").html(response);
      },
    }); 
  });
$('#Select_SP').on('change', function() {
    var selectedOption = $(this).val();
    $.ajax({
        url: 'ajax/all_Doctors.php',
        method: 'POST',
        data: { id: selectedOption },
        success: function(response){
            $(".DOC_Cards").html(response);
        },
      });
});
