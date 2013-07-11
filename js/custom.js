
/* ==============================================================================

				JS that must be in Html files / cleected here

===============================================================================*/




// Pretty photo 
$(document).ready(function(){
	
	
	//wymeditor

    $('.wymeditor').wymeditor();

	
	$("area[rel^='prettyPhoto']").prettyPhoto();
	
	$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
		
	$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	
	$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
	custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
	changepicturecallback: function(){ initialize(); }
	});
	
	$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
	custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
	changepicturecallback: function(){ _bsap.exec(); }
	});
});




// Text slider 
$(function(){
	$('#slider-id').liquidSlider({
	autoSlide:false,
	autoHeight:true
	});
});








// Flickr plugin
$('.basicuse').jflickrfeed({
	limit: 14,
	qstrings: {
	id: '37304598@N02' //Here your Flickr Id
	},
	itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
});




// Go to top
$(document).ready(function() {
	$().UItoTop({ easingType: 'easeOutQuart' });
});




// tooltip
$('.tooltip-title').tooltip({
  selector: "a[rel=tooltip], li[rel=tooltip]"
})
$('.tooltip').tooltip()




// Main menu 
$(document).ready(function(){
	$("#jMenu").jMenu();
});



// Toggle
$(function(){
	$('.myToggler').click(function(e){
		$(this).next().slideToggle();
		var sign=$(this).children(':first');
		sign.text(sign.text() == '\uff0b'?'\uff0d':'\uff0b');
		e.preventDefault;
	});
});



// Tabs
$(function () {
    $('#myTab a:first').tab('show');
 })
 $('a[data-toggle="tab"]').on('shown', function (e) {
  e.target // activated tab
  e.relatedTarget // previous tab
});



// Audio - music player
audiojs.events.ready(function() {
	audiojs.createAll();
});


// First Word Color

$('h2').each(function() {
   var h = $(this).html();
   var index = h.indexOf(' ');
   if(index == -1) {
	   index = h.length;
   }
   $(this).html('<span class="h2firstword">' + h.substring(0, index) + '</span>' + h.substring(index, h.length));
});

  

 // popover demo
$("a[rel=popover]")
  .popover()
  .click(function(e) {
	e.preventDefault()
  })
  
  

// button state demo
$('#fat-btn')
  .click(function () {
	var btn = $(this)
	btn.button('loading')
	setTimeout(function () {
	  btn.button('reset')
	}, 3000)
  });
  
  // jeditable
  
var uid = 1;
    $(".edit").editable("admin/edit_variable",
    	    {
    	    	indicator : 'Saving...',
    	    	id   : 'elementid',
    	    	onblur : 'submit',
    	        tooltip   : 'Click to edit...',
    	        submitdata : function()
    	        {
    	            return {id : uid};
    }


    	    });



// Flex carousel
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 270,
        itemMargin: 30,
		directionNav: false, 
		controlNav: true,
		smoothHeight: false,
		animationLoop: true, 
		pauseOnAction: true,            
    	pauseOnHover: true, 
		minItems: 1,
		mousewheel: false,  
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });









