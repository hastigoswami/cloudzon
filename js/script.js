





$(document).ready(function(){
	
	 $("#owl-demo").owlCarousel({

      navigation :false,
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem : true,
	  autoPlay : 4000,	

      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false

      });
	  
	  $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });
	
	//----- Home Page Script----- //
$(".tabs-nav a").hover(function(){
		var id = $(this).attr('id1');
		$(".tabs-nav a").removeClass("active");
		$(this).addClass("active");
		//alert(id)	 
		$(".tab_content .tab-content").hide();
		$("#" + id ).show();
	});
	
	if($('#our_work').length > 0){
		$('#our_work').camera({
			thumbnails: true,
			autoAdvance: true
		});
	}
	
	$(".our_work_slider .next").click(function(e) {
    	$(".camera_next").trigger("click");    
    });
	$(".our_work_slider .prev").click(function(e) {
    	$(".camera_prev").trigger("click");    
    });
	
	var nav_clone = $(".header_bottom .main_navigation").clone().addClass("mobile_menu cf");
	$("body").append(nav_clone);
	$(".mobile_menu").wrap("<nav class='mobile_menu_outer'>");
	//$("<span class='menu_title'></span>").insertBefore(".mobile_menu");
	$("<span class='menu_title'>Navigation</span>").insertBefore(".mobile_menu");
	$("<a href='javascript:;' class='icon icon-close'></a>").insertBefore(".mobile_menu");
	
	/*$(".menu_icon").click(function(e) {
        if($(this).hasClass("active")){
			$(this).removeClass("active");
			$("#main_wrapper").animate({"left":"0"})
		}else{
			$(this).addClass("active");
			$("#main_wrapper").animate({"left":"-60%"});	
		}
    });*/
	
	$(".hire_professional_tab a").click(function() {
        var i = $(this).index(i);
		$(".hire_professional_tab a").removeClass("active");
		$(this).addClass("active");
		$(".hire_professional_tab_inner .hire_professional_tabbing").hide();
		$(".hire_professional_tab_inner .hire_professional_tabbing").eq(i).show();	
    });
	
	$(".tabbing_title").click(function(e) {
        if($(this).hasClass("active")){
			$(this).removeClass("active");
			$(this).next(".tabbing").slideUp();
		}else{
			$(".tabbing_title").removeClass("active");
			$(this).addClass("active");
			$(".hire_professional_tabbing .tabbing").slideUp();
			$(this).next(".tabbing").slideDown();	
		}
    });
	
	
	$(document).ready(function() {
 
  var owl = $("#owl-demo2");
 
  owl.owlCarousel({
     
      itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 1],
        [1000, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
      ],
      navigation : true,
	  autoPlay : 3000,
	   paginationSpeed : 400,
 
  });
 
});



$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 150;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});

 //========================== Mobile navigation slide Script ========================//	
		   $(".mobile-nav-icon").click(function(){
				if($(this).hasClass("active")){
					$(this).removeClass("active");
					$("#wrapper").animate({"left":"0"},500);
				}else{
					$(this).addClass("active");
					$("#wrapper").animate({"left":"-74%"},500); 	
				}	
			});
		   
		   //========================== Mobile navigation collapse Script ========================//	
		   $('.mobile-nav-block ul li.parent > em').click(function() {
				if($(this).hasClass("active")){
					$(this).removeClass("active");
					$(this).next("a").removeClass("selected");
					$(this).parent("li").find("ul.child").stop(true,false).slideUp();
				}else{
					$('.mobile-nav-block ul li.parent > em').removeClass("active");
					$(this).addClass("active");
					$('.mobile-nav-block ul li.parent > em').next("a").removeClass("selected");
					$(this).next("a").addClass("selected");
					$(".mobile-nav-block ul li .child").slideUp();
					$(this).parent("li").find("ul.child").stop(true,false).slideDown();
					$('.mobile-nav-block ul li.parent li > em').removeClass("active");
					$(".mobile-nav-block ul li ul.sub-child").stop(true,false).slideUp();
				}
			});
			$('.mobile-nav-block ul li.parent li > em').click(function() {
				if($(this).hasClass("active")){
					$(this).removeClass("active");
					$(this).parent("li").find("ul.sub-child").stop(true,false).slideUp();
				}else{
					$('.mobile-nav-block ul li.parent li > em').removeClass("active");
					$(this).addClass("active");
					$(".mobile-nav-block ul li .sub-child").slideUp();
					$(this).parent("li").find("ul.sub-child").stop(true,false).slideDown();
				}
			});
	
	  

        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
   
   
   
   jQuery(document).ready(function($){

	
	jQuery(window).resize(function() {
		pagetitlePadding();
	}).load(function(){
		pagetitlePadding();
	});	
	function pagetitlePadding() {
		setTimeout(function(){
			pagetitlepadding = jQuery('#socialicons').outerHeight() + jQuery('#top').outerHeight();
			
			jQuery('#page-title').animate({
				paddingTop: pagetitlepadding
			}, 100);
		}, 250);		
	}
	
	
	
	
	
	
	
	
});


$(document).ready(function() {

				$("[rel='single_1']").fancybox({
					caption : {
						type : 'outside'
					},
					openEffect  : 'elastic',
					closeEffect : 'elastic',
					nextEffect  : 'elastic',
					prevEffect  : 'elastic'
				});
			});


	

				$("[rel='single_2']").fancybox({
					caption : {
						type : 'inside'
					},
					openEffect  : 'fade',
					closeEffect : 'fade',
					nextEffect  : 'fade',
					prevEffect  : 'fade'
				});
			
			
			
		
				$("[rel='single_3']").fancybox({
					caption : {
						type : 'float'
					},
					openEffect  : 'drop',
					closeEffect : 'drop',
					nextEffect  : 'elastic',
					prevEffect  : 'elastic'
				});
			
			
			
			

				$("[rel='single_4']").fancybox({
					caption : {
						type : 'over'
					},
					openEffect  : 'none',
					closeEffect : 'none',
					nextEffect  : 'none',
					prevEffect  : 'none'
				});
			
			

			/*
			 *  Simple image gallery. Uses default settings
			 */

			
	//----- And all Script ----- //

  
	//----- And all Script ----- //
	
	
	
});
 $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
	

$(document).ready(function(){

//display the scroll top button if the browser is overflow with scroll. 
$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.top').fadeIn();
} else {
$('.top').fadeOut();
}
});

//Click to scroll to top and 1500 is speed you can change it 
$('.top').click(function(){
$('html, body').animate({scrollTop : 0},1500);
return false;
});



$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(1500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});

});
