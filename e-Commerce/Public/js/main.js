// scrow header animation
navClass = document.querySelector("#menu-header");
header = document.querySelector("#header");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 110 || document.documentElement.scrollTop > 110) {      
    navClass.className = "menu-header menu-scrow";
    header.className = "header-scrow";    
  } else {
    navClass.className = "menu-header";    
    header.className = "";
  }
}

// categorias menu
$(".div-btn-categories").click(function(){
  if($('.line-menu').is(".line-menu-active")){
    $( ".line-menu" ).removeClass("line-menu-active" )
    $("#menu-main").addClass("categories-ocult"); 
  }else{
    $(".line-menu").addClass("line-menu-active");  
    $("#menu-main").removeClass("categories-ocult");      
  }
});
// end categorias