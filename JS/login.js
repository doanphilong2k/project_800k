$(document).ready(function(){
    $("#signup-btn").click(function(){
        $("#login-container").fadeOut(200);
        $("#signup-container").fadeIn(1000);
    });

    $(".undo").click(function(){
        $("#signup-container").fadeOut(0);
        $("#login-container").fadeIn(900);
    })

    $("#login").click(function(){
        if($("#user").val() == "" || $("#user").val() == null)
        {
            alert("Tài khoản không được bỏ trống!");
        }
        else if($("#pass").val() == "" || $("#pass").val() == null)
        {
            alert("Mật khẩu không được bỏ trống!");
        }
    })

    $("#signup").click(function(){
        if($("#fname").val() == "" || $("#fname").val() == null) 
        {
            alert("Họ không được bỏ trống!");
        }
        else if($("#lname").val() == "" || $("#lname").val() == null)
        {
            alert("Tên không được bỏ trống!");
        }
        else if($("#account").val() == "" || $("#account").val() == null)
        {
            alert("Tài khoản không được bỏ trống!");
        }
        else if($("#password").val() == "" || $("#password").val() == null)
        {
            alert("Mật khẩu không được bỏ trống!");
        }
        else if($("#email").val() == "" || $("#email").val() == null)
        {
            alert("Email không được bỏ trống!");
        }
    });
});

