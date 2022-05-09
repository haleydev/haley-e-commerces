// categorias menu
$("#main_menu_checkbox").click(function(){
    if($('.list-main-menu').is(".list-menu-active")){
      $( ".list-main-menu" ).removeClass("list-menu-active" );  
      $( ".menu-opaque-background" ).removeClass("menu-opaque-background-active" );     
    }else{
      $(".list-main-menu").addClass("list-menu-active");  
      $(".menu-opaque-background").addClass("menu-opaque-background-active");      
    }
});