$(document).ready(function () {
    $('#showPassword').on('click', function(){
        var password=$("#password");
        if(password.attr('type')==='password'){
            password.attr('type','text');
        }else{
            password.attr('type','password');
        }
    });

    $('#showComfPassword').on('click', function(){
        var comfPassword=$("#comfPassword");
        if(comfPassword.attr('type')==='password'){
            comfPassword.attr('type','text');
        }else{
            comfPassword.attr('type','password');
        }
    });
});