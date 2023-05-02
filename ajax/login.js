$(".login_form").submit(function(e){
    e.preventDefault();
    $.ajax({
            url :"ajax/login.php",
            type:"POST",
            data: new FormData(this),
            success:function(res){
                $(".res").text(res);
                if(res=="Done"){
                    window.location.href = "Book.php";
                }
			} ,
			processData : false ,
			contentType : false ,
        })
});