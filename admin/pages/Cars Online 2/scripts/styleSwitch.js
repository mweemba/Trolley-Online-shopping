
// *** Designed by Fabian Shamano fabianshamano@yahoo.com***

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**===========================================Style Switch======================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

var style_cookie_name = "style" ;
var style_cookie_duration = 30 ;

function switch_style ( css_title )

{

var i, link_tag ;
for (i = 0, link_tag = document.getElementsByTagName("link") ;
i < link_tag.length ; i++ ) {
if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
link_tag[i].title) {
link_tag[i].disabled = true ;
if (link_tag[i].title == css_title) {
link_tag[i].disabled = false ;
}
}
set_cookie( style_cookie_name, css_title,
style_cookie_duration );
}
}
function set_style_from_cookie()
{
var css_title = get_cookie( style_cookie_name );
if (css_title.length) {
switch_style( css_title );
}
}
function set_cookie ( cookie_name, cookie_value,
lifespan_in_days, valid_domain )
{
var domain_string = valid_domain ?
("; domain=" + valid_domain) : '' ;
document.cookie = cookie_name +
"=" + encodeURIComponent( cookie_value ) +
"; max-age=" + 60 * 60 *
24 * lifespan_in_days +
"; path=/" + domain_string ;
}
function get_cookie ( cookie_name )
{
var cookie_string = document.cookie ;
if (cookie_string.length != 0) {
var cookie_value = cookie_string.match (
'(^|;)[\s]*' +
cookie_name +
'=([^;]*)' );
return decodeURIComponent ( cookie_value[2] ) ;
}
return '' ;
}

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**==========================================Control Panel======================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

function toggleCP(){
	var cp = document.getElementById("cp");
	if(cp.style.left == "0px"){
		cp.style.left = "-260px";
	} else {
		cp.style.left = "0px";
	}
}

function toggleChat(){
	var liveChat = document.getElementById("liveChatWrapper");
	if(liveChat.style.right == "0px"){
		liveChat.style.right = "-320px";
	} else {
		liveChat.style.right = "0px";
	}
}

function toggleCPOut(){
	var cp = document.getElementById("cp");
	if(cp.style.left == "0px"){
		cp.style.left = "-260px";
	}
}

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**============================================Parallax=========================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

$(window).scroll(function(){
	
  var pContainerHeight = $('#parallaxLayer1').height();
	
  var wScroll = $(this).scrollTop();
  var sidebarToggleOffset = jQuery(".sidebar").offset().top - 51;
  
  jQuery(".sidebar1").wrap('<div class="sidebar1-placeholder"></div>');
  jQuery(".sidebar1-placeholder").height(jQuery(".sidebar1").outerHeight());

  if (wScroll <= pContainerHeight) {
	  
    $('#parallaxWrapper').css({
      'transform' : 'translate(0px, '+ wScroll /2 +'px)'
    });

    $('#parallaxLayer1').css({
      'transform' : 'translate(0px, '+ wScroll /8 +'px)'
    });
  }

	if (wScroll >= sidebarToggleOffset) {
		jQuery(".sidebar1").addClass("fixed");
		}else {
			jQuery(".sidebar1").removeClass("fixed");
			} 
			 
if(!$('#logoWrapper').hasClass('darken')) {  
  if(wScroll > $('#content').offset().top - ($(window).height() / 1.0)) {

        $('#logoWrapper').addClass('darken');
  }
}

if($('#logoWrapper').hasClass('darken')) {  
  if(wScroll < $('#content').offset().top - ($(window).height() / 2.5)) {

        $('#logoWrapper').removeClass('darken');
  }
}

  // Landing Elements


  $.fn.revealOnScroll = function(){
	  return this.each(function(){

			if (!jQuery(this).hasClass("is-showing")) {  

			  if(wScroll > $(this).offset().top - ($(window).height() / 1.2)) {
			
					$(this).addClass('is-showing');					
			  }
			}
		  		  
		  });
		  	  
	  }
	  $('.carSlot,h5').revealOnScroll();
});

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=========================================loading screen======================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

window.addEventListener('load', function(){
        $('body').addClass('loaded');
	});

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**===========================================nivoSlider========================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

$(window).load(function() {
$('#slider').nivoSlider();
});

//**=============================================================================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================Toggle==========================================**//
//**======================Designed by Fabian Shamano fabianshamano@yahoo.com=====================**//
//**=============================================================================================**//

$(function() {

	$('ul#menu').hide(); //hide
	$('.orderList').hide();
	$('.orderOption').hide();
	$('.input').hide();
	$('.resetForm').hide();
	$('#clientReviewWrapper').hide();
	
	jQuery.fn.showHide = function() {
		return this.each(function(){

	$(this).click(function(){
		$(this).next().animate(
			{'height':'toggle'}, 'slow', 'swing'
		);
		
		return false; //prevents the browser default
		
		});
			
	});
		
	}
	
	$('#sidebarToggle,.aniSearch h3,.orderBy,.listItem,.forgotPassword,#clientReview h2').showHide();
				
}); //documnet.redy function

// *** Designed by Fabian Shamano fabianshamano@yahoo.com***
