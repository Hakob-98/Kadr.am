$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.warned').click(function(){
        $(this).siblings('.warningRequest').show();
        $(this).siblings('.warningRequest').toggleClass('requestBlock');
    });

    $('.blocked').click(function(){
        $(this).siblings('.blockingRequest').show();
        $(this).siblings('.blockingRequest').toggleClass('requestBlock');
    });

    $('.delete').click(function(){
        $(this).siblings('.deleteRequest').show();
        $(this).siblings('.deleteRequest').toggleClass('requestBlock');
    });

    $(".closeCommand").click(function(){
        $(this).parents('.requestBlock').hide();
        $(this).parents('.requestBlock').toggleClass('requestBlock');
    });

    $('.warnedUser').click(function(){
        var userId=$(this).parents('.userBox').attr('id');
        $(this).parents('.userBox').remove();
        $.ajax({
            type: "post",
            url: "/warn-user",
            dataType: "json",
            data: {
                id:userId,
            },
            success: function (response) {
                console.log(response);
            }
        });
    });

    $('.blockedUser').click(function(){
        var userId=$(this).parents('.userBox').attr('id');
        $(this).parents('.userBox').remove();
        $.ajax({
            type: "post",
            url: "/block-user",
            dataType: "json",
            data: {
                id:userId,
            },
            success: function (response) {
                console.log(response);
            }
        });
    });

    $('.deletedUser').click(function(){
        var userId=$(this).parents('.userBox').attr('id');
        $(this).parents('.userBox').remove();
        $.ajax({
            type: "post",
            url: "/delete-user",
            dataType: "json",
            data: {
                id:userId,
            },
            success: function (response) {
                console.log(response);
            }
        });
    });

});