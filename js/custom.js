jQuery(document).click(function(evt) {
  if($(evt.target).closest('input.search-field').length)
  return;
  $(".search-bar-bg").removeClass("show");
 // $(".child-nav-bar-bg").removeClass("show");
});

jQuery(document).ready(function(){
$(".drop-custom").unbind("click").bind("click", function(e) {
$(".child-nav-bar-bg").removeClass("show");
});
$(".top-bar-section a.searchIcon").unbind("click").bind("click", function(e) {
  $(".search-bar-bg").addClass("show");
  });
$('.top-bar-section a.searchIcon').on('touchstart', function(e) {
  $(".search-bar-bg").addClass("show").fadeIn( "slow" );
});

$('.top-bar-section a.searchIcon').hover(
 function(){ $('.search-bar-bg').addClass('show') }
)
jQuery(".promo, .copyright").addClass("tricky");
});
/*
jQuery(document).ready(function(){
$("a.ubermenu-target.ubermenu-item-layout-default.ubermenu-item-layout-text_only").unbind("click").bind("click", function(e) {
  if(!$(e.target).parents("li:first").hasClass("drop-custom")){
      $(".child-nav-bar-bg").addClass("show");
    }
  });
$(".drop-custom").unbind("click").bind("click", function(e) {
$(".child-nav-bar-bg").removeClass("show");
});
$(".top-bar-section a.searchIcon").unbind("click").bind("click", function(e) {
  $(".search-bar-bg").addClass("show");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  });
$('.top-bar-section a.searchIcon').on('touchstart', function(e) {
    $(".search-bar-bg").addClass("show").fadeIn( "slow" );
    $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
});
$("li.ubermenu-item-has-children").mouseenter(function() {
  $(".child-nav-bar-bg").addClass("show");
  }).mouseleave(function() {
});

$("li.ubermenu-no-child").mouseenter(function() {
  $(".child-nav-bar-bg").addClass("hide");
  $(".child-nav-bar-bg").removeClass("show");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  }).mouseleave(function() {
});

$("li#menu-item-70 a").mouseenter(function() {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-70").addClass("ubermenu-active");
  }).mouseleave(function() {
});
$('li#menu-item-70').on('touchstart', function(e) {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-70").addClass("ubermenu-active");
  $(".child-nav-bar-bg").addClass("show");
});

$("li#menu-item-374 a").mouseenter(function() {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-374").addClass("ubermenu-active");
  }).mouseleave(function() {
});
$('li#menu-item-374 a').on('touchstart', function(e) {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-374").addClass("ubermenu-active");
  $(".child-nav-bar-bg").addClass("show");
});

$("li#menu-item-57 a").mouseenter(function() {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-57").addClass("ubermenu-active");
  }).mouseleave(function() {
});
$('li#menu-item-57 a').on('touchstart', function(e) {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-57").addClass("ubermenu-active");
  $(".child-nav-bar-bg").addClass("show");
});

$("li#menu-item-616 a").mouseenter(function() {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-616").addClass("ubermenu-active");
  }).mouseleave(function() {
});
$('li#menu-item-616 a').on('touchstart', function(e) {
  $(".child-nav-bar-bg").removeClass("hide");
  $("li.ubermenu-item-has-children").removeClass("ubermenu-active");
  $(".search-bar-bg").removeClass("show");
  $("li#menu-item-616").addClass("ubermenu-active");
  $(".child-nav-bar-bg").addClass("show");
});

}); */