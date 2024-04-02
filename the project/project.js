$(document).ready(function(){
    
     $(".btn").click(function()
    {
        
        $(".dropdown-menu").toggle(190);
       
 });

   $(".btn1").click(function(){
       
     
              $(".prisent").toggle(350)
              $(".form1").hide(450) 
              $(".form2").hide(450)
              $(".form3").hide(450)
             
       
       
   });
    
    $(".btn3").click(function(){
         $(".prisent").hide(450)
         $(".form3").hide(450)
        $(".form2").hide(450)
         $(".form1").toggle(350) 
        
    });
    
    $(".btn4").click(function(){
        
        $(".form1").hide(450)
         $(".form3").hide(450)
        $(".form2").toggle(350)
       

        
    });   
    
    $(".btn2").click(function(){
        
        $(".prisent").hide(450)
        $(".form1").hide(450)
        $(".form2").hide(450)
                $(".form3").toggle(350)

        
    });
    
   
    

    
    
    
});
