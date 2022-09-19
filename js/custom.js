$(document).ready(function(){
    setTimeout(function(e) {
        $('.alert-success,.alert-danger').remove();
    },3000);
;

    $('#side').click(function(){
        $('.block1').css("filter","blur(8px)");
        $('.sidebar').show("slow");
    });

    $('#side2').click(function(){
        $('.sidebar').hide(1000);
        $('.block1').css("filter","blur(0px)");
    });

    $('#i2').click(function(){
        $('.dropdown-content').css("display,block");

    })

    
});