$(".Signupform").submit(function(e){
    e.preventDefault();
    $.ajax({
            url:"ajax/SignUp.php",
            type:"POST",
            data: new FormData(this),
            success:function(res){
                if(res=="Wrong Phone Number"){
                    $(".phone").append(`<h4>${res}</h4>`);
                }
                else if (res=="Already Registerd <br> <a href='forget.php'>Forget Password ?</a>"){
                    $(".end").append(`<h4>${res}</h4>`);
                }
                else if (res=="password doesn't match"){
                    $(".password").append(`<h4 class="text-danger">${res}</h4>`);
                }
                else if (res=="Done"){
                    window.location.href = "Book.php";
                }
			} ,
			processData : false ,
			contentType : false ,
        })
});