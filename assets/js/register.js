$(document).ready(function(){
    $(".hideregister").click(function(){
        $('.loginForm').show();
        $('.registerForm').hide();
    })
    $(".hideLogin").click(function(){
        $('.loginForm').hide();
        $('.registerForm').show();
    })
})