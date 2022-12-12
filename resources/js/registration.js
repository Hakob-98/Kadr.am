$(document).ready(function () {
    $('#individualUser').click(function(){
        $('.firstName').attr('placeholder', 'Անուն *');
        $('.lastName').attr('placeholder', 'Ազգանուն');
        $('.genderBox').show();
    });

    $('#organizationUser').click(function(){
        $('.firstName').attr('placeholder', 'Կազմակերպության անվանում *');
        $('.lastName').attr('placeholder', 'Էջը կառավարողի անունը');
        $('.genderBox').hide();
    });

    $('#showPass').on('click', function(){
        var passInput=$("#passInput");
        if(passInput.attr('type')==='password'){
            passInput.attr('type','text');
        }else{
            passInput.attr('type','password');
        }
    });
});