$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('.header').addClass("sticky");
        } else {
            $('.header').removeClass("sticky");
        }
    });

    $('.header__toggler').click(function(){
        $(this).toggleClass('closeMenu');
        $('.header__navbar__menu').toggleClass('responsiveMenu');
        $('.header__loginUserBlock__userBlock__userBox__userSection').hide();
    });

    $('.doubleMenu1').click(function(){
        $(this).find('.navLink').find('.iconNavLink').toggleClass('rotateIconNavLink');
        $('.dropMenu1').toggleClass('openDropdownMenu');
    });

    $('.doubleMenu2').click(function(){
        $(this).find('.navLink').find('.iconNavLink').toggleClass('rotateIconNavLink');
        $('.dropMenu2').toggleClass('openDropdownMenu');
    });

    $('.header__loginUserBlock__userBlock__userBox__userSection').hide();

    $('.header__loginUserBlock__userBlock__userBox__userImage').click(function(){
        $('.header__loginUserBlock__userBlock__userBox__userSection').show();
        $('.header__navbar__menu').removeClass('responsiveMenu');
        $('.header__toggler').removeClass('closeMenu');
    });

    $('.closeUserSection').click(function(){
        $('.header__loginUserBlock__userBlock__userBox__userSection').hide();
    });

    // $(document).click(function(){
    //     $('.header__toggler').removeClass('closeMenu');
    //     $('.header__navbar__menu').removeClass('responsiveMenu');
    //     $('.header__loginUserBlock__userBlock__userBox__userSection').hide();
    // });

    // $(document).click(function(event){
    //     if(event.target.class === 'responsiveMenu'){
    //     }else{
    //         $('.header__navbar__menu').removeClass('responsiveMenu');
    //     }
    // });

    $('.infoBox__headingIconsBlock').click(function(){
        $(this).siblings('ul').toggleClass('openLinks');
        $('.infoBox__headingIconsBlock__iconsArrow').toggleClass('rotateArrow');
    });

    $('.feedbackBox__headingIconsBlock').click(function(){
        $(this).siblings('ul').toggleClass('openLinks');
        $('.feedbackBox__headingIconsBlock__iconsArrow').toggleClass('rotateArrow');
    });
});