$(document).ready(function(){
    setTimeout(function(e) {
        $('.alert-success,.alert-danger').remove();
    },3000);
;
   var profile = 0;
   $('#userp').click(function(e){
    e.preventDefault();
    if(profile == 0)
    {
        $('.profile').show();
        profile = 1;
    }
    else
    {
        $('.profile').hide();
        profile = 0;
    }
 });


    $('#side').click(function(){
        $('.block1').css("filter","blur(8px)");
        $('.sidebar').show("slow");
    });

    $('#side2').click(function(){
        $('.sidebar').hide(1000);
        $('.block1').css("filter","blur(0px)");
    });
    var sidebar = 0;
    $('#menu-collapse').click((e)=>{
        if(sidebar == 0)
        {   
            $('.sidebar').css("width","4%");
            $('.main-dash').css("width","96%");
            // $('.logo').hide();
            $('.menu-text').hide();
            sidebar = 1;
        }
        else
        {
            $('.sidebar').css("width","15%");
            $('.main-dash').css("width","85%");
            $('.menu-text').show();
            // $('.logo').show();
            sidebar = 0;
        }
    })

     $('#fname').click((e)=>{
        if ($(this).value.length){
            e.target.style.borderBottom = "3px solid #3f51b5";
        }
        else{
            e.target.style.borderBottom = "3px solid #f44336";
            
        }
     });
});