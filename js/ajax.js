
$(document).ready(function(){
    // ktra tinh hop le cua Email
    $("#email").change(function(){
        let emailPattern = /^[0-9]{10}(@e.tlu.edu.vn)$/;
        if(emailPattern.test($(this).val()) == false){
            $("#emailHelp").text("Email khong hop le").css("color","red");
        }
        else{
            $.ajax({
                url: "process.register.php",
                type: "post",
                data: {email: $(this).val()},

                //callback function
                success:function(res){
                    $("#emailHelp").text(res).css("color","green")
                }
            })
        }
    })
})