jQuery(document).ready(function ($) {
    $(" ul.nav > li > a").click(function () {
        console.log($(this).parent());
        $(this).siblings().removeClass("active");
        $(this).parent().addClass("active");
    });
    $('#email').keyup(function(){
        var emailResult = emailValidation($('#email').val());
        if(emailResult===true) $('#emailGroup').removeClass('has-error').addClass('has-success');
        else $('#emailGroup').addClass('has-error');
    });
    $('#name').keyup(function(){
        var nameResult = $('#name').val();
        if(nameResult!='') $('#nameGroup').removeClass('has-error').addClass('has-success');
        else $('#nameGroup').addClass('has-error');

    });
    $('#message').keyup(function(){
        var messageResult = $('#message').val();
        if(messageResult!='') $('#messageGroup').removeClass('has-error').addClass('has-success');
        else $('#messageGroup').addClass('has-error');

    });
    function emailValidation(sEmail){
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
});