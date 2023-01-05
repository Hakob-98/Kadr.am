$(document).ready(function () {
    $('#individualUser').click(function () {
        $('.firstName').attr('placeholder', 'Անուն *');
        $('.lastName').attr('placeholder', 'Ազգանուն');
        $('.genderBox').show();
    });

    $('#organizationUser').click(function () {
        $('.firstName').attr('placeholder', 'Կազմակերպության անվանում *');
        $('.lastName').attr('placeholder', 'Էջը կառավարողի անունը');
        $('.genderBox').hide();
    });

    $("#hidePass").css({
        'opacity': '0',
        'visibility': 'hidden',
        'z-index': '1'
    });

    $("#showPass").click(function(){
        $("#passInput").attr('type', 'text');
        $(this).css({
            'opacity': '0',
            'visibility': 'hidden',
        });
        $('#hidePass').css({
            'opacity': '1',
            'visibility': 'visible',
        });
    });

    $("#hidePass").click(function(){
        $("#passInput").attr('type', 'password');
        $(this).css({
            'opacity': '0',
            'visibility': 'hidden',
        });
        $('#showPass').css({
            'opacity': '1',
            'visibility': 'visible',
        });
    });

    $("#passInput").focus(function () {
        $('.info__password').show();
    });

    $(window).focusout(function () {
        $('.info__password').hide();
    });

    $('#agreeToTherules').click(function(){
        if($(this).is(':checked')){
            $('.btn').removeAttr('disabled');
            $('.btn').addClass('signUPHover');
            console.log('hello');
        }else{
            $('.btn').attr('disabled', true);
            $('.btn').removeClass('signUPHover');
            console.log('barev');
        }
    });

});