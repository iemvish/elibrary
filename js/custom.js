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
            $('.sidebar').css("width","0%");
            $('.main-dashboard').css("width","100%");
            // $('.side-icon').css("color","#e23826");
            // $('.logo').hide();
            $('.menu-text').hide();
            sidebar = 1;
        }
        else
        {
            $('.sidebar').css("width","15%");
            $('.main-dashboard').css("width","85%");
            $('.menu-text').show();
            // $('.logo').show();
            sidebar = 0;
        }
    })
         var click = 0;
     $('#search').click((e)=>{
        e.preventDefault();
        if(click == 0)
        {
            $('.slide-search').css("display","block");
            click = 1;
        }
        else
        {
            $('.slide-search').css("display","none");
            click = 0;
        }
     })
});