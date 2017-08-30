



$(window).scroll(function () {
    var sc = $(window).scrollTop()
    if (sc > 10) {
        $("#header-sroll").addClass("small")
    } else {
        $("#header-sroll").removeClass("small")
    }
});


var revapi;

        jQuery(document).ready(function() {

             revapi = jQuery('.tp-banner').revolution(
            {
              delay:15000,
              startwidth:1170,
              startheight:520,
              hideThumbs:10,
              fullWidth:"off",
              fullScreen:"off",
              fullScreenOffsetContainer: "",


            });

        }); //ready


$( document ).ready(function() {

  $('.scroll-btn a[href^="#"]').on('click', function(event) {

    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});






	/* When user clicks the Icon */
	$('.nav-toggle').click(function() {
		$(this).toggleClass('active');
		$('.header-nav').toggleClass('open');
		event.preventDefault();
	});
	/* When user clicks a link */
	$('.header-nav li a').click(function() {
		$('.nav-toggle').toggleClass('active');
		$('.header-nav').toggleClass('open');

	});

	$('a.nav-toggle').on('click', function(e) {
    $('html').add(this).toggleClass('no_scroll');
  });


//Statistics in numbers
jQuery.fn.statsCounter = function(){
   //declaring vars
    var stat = this.find('.statistics-inner').children();
    var startValue = 0;
    
    //iterate through every .stat class and collect values
   stat.each(function(){
      var count = jQuery(this).data('count');
      var number = jQuery(this).find('.number');
      var start = 0;
      var go = setInterval(function(){ startCounter(); },1); //increment value every 1ms

      function startCounter(){
          incrementBy = Math.round(count / 90); //Divide inputed number by 90 to gain optimal speed (not too fast, not too slow)
          if( count < 90 ) incrementBy = Math.round(count / 5);
          if( count < 5 ) incrementBy = Math.round(count / 2);
          start = start + incrementBy;
          if( count != 0 ) {
            jQuery(number).text(start);
          } else { 
            jQuery(number).text(0); 
             start = count;
          }
          //if desired number reched, stop counting
          if( start === count ) {
              clearInterval(go);
          } else if( start >= count ){ //or if greater than selected num - stop and return value
              clearInterval(go);
              jQuery(number).text(count);
          }
      }//startCounter;
  });//stat.each()
}//statsCounter();

  //if visible src = http://www.rupertlanuza.com/how-to-check-if-element-is-visible-in-the-screen-using-jquery/
  function isElementVisible(elementToBeChecked) {
    var TopView = jQuery(window).scrollTop();
    var BotView = TopView + jQuery(window).height();
    var TopElement = jQuery(elementToBeChecked).offset().top;
    var BotElement = TopElement + jQuery(elementToBeChecked).height();
    return ((BotElement <= BotView) && (TopElement >= TopView));
  }

jQuery(document).ready(function(jQuery){

   var statistics = jQuery('.statistics');

   if( statistics.length > 0 ) {

      //setting counts to 0
     if( jQuery('.stat').length > 0 ){
        var stat = jQuery('.stat');
        stat.each(function(){
           var icon = jQuery(this).find('span');
           icon.each(function(){
             var val = jQuery(this).attr('class');
             if( val.indexOf('.') != -1 && jQuery(this).find('img').length <= 0 ) {
                jQuery(this).append('<img src="'+val+'" />');
              }
           });
          stat.find('.number').text(0);
        })
      }
      //animating when scrolled
      var countDone = 0;
      if( jQuery(window).width() > 780 ) {
        jQuery(window).scroll(function(){
          //if .statistics exists, initialize
          if( jQuery('.statistics').length ){
            var visible = isElementVisible('.statistics');
          
          //if stats section visible, start the counting after 400ms
           if( visible && countDone == 0 ) { //check if it's not already done
             setTimeout(function(){
              jQuery('.statistics').statsCounter();
              countDone = 1;
             },400);
            }//if visible && not shown
           }//if exists
        });//scroll function
      } else {
          jQuery('.statistics').statsCounter();
          countDone = 1;
      }// window.width()
  }
});




$(".regular").sensation({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: -1,
        autoplaySpeed: 1000,
        arrows: false,
            rtl: true,
             autoplay: true,
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 3
      }
    }
  ]
      });


$(".about-slider").sensation({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
             autoplay: false,
             fade: true,
  cssEase: 'linear',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        dots: true,
        centerPadding: '0px',
        slidesToShow:1
      }
    }
  ]
      });


$(".package-slider").sensation({
        dots: false,
        infinite: false,
        slidesToShow: 4,
        arrows: true,
        autoplay: false,
        responsive: [
    {
      breakpoint: 2000,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
         arrows: true,
        dots: false
      }
    },
    {
      breakpoint: 1680,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
         arrows: true,
        dots: false
      }
    },
    {
      breakpoint: 1140,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
         arrows: true,
        dots: false
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
         arrows: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
         arrows: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });





$(".testimonial-slider").sensation({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
             autoplay: false,
             fade: true,
  cssEase: 'linear',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        dots: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        dots: true,
        centerPadding: '0px',
        slidesToShow:1
      }
    }
  ]
      });


$(".contact-slider").sensation({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
             autoplay: false,
      
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });



$(".process-slider").sensation({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
             autoplay: false,
             fade: true,
  cssEase: 'linear',
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow:1
      }
    }
  ]
      });


 $(function(){
  var x =  $('.service-slider-wrap').children();

for (i = 0; i < x.length ; i += 2) {
  x.slice(i,i+2).wrapAll('<div class="'+ i +'"></div>');
}
  
  $(".service-slider-wrap").sensation({
        dots: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow:1
      }
    }
  ]
      });
});




$(".pricing-slider").sensation({
        dots: true,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
             autoplay: false,
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
         arrows: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
         arrows: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
      });
	  
	  

});








      //wow.js

    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    
    wow.init();


$(function(){
    $('.single ul').slimScroll({
        height: '90px',
        railVisible: true,
	    alwaysVisible: true,
	    railColor: '#e8e8e8',
	    color:'#e8e8e8',
	    railOpacity: 0.3
    });

    $('.single.best-seller ul').slimScroll({
        height: '110px',
        railVisible: true,
	    alwaysVisible: true,
	    railColor: '#e8e8e8',
	    color:'#e8e8e8',
	    railOpacity: 0.3
    });
	
	 $('.faq-question').slimScroll({
        height: '250px',
        railVisible: true,
	    alwaysVisible: true,
	    railColor: '#e8e8e8',
	    color:'#e8e8e8',
	    railOpacity: 0.3
    });
	 
	 $('.faq-sections').slimScroll({
        height: '70px',
        railVisible: true,
	    alwaysVisible: true,
	    railColor: '#e8e8e8',
	    color:'#e8e8e8',
	    railOpacity: 0.3
    });

    $('.single ul.no-scroll').slimScroll({
        height: '120px',
        railVisible: false,
      alwaysVisible: false,
      railColor: '#e8e8e8',
      color:'#e8e8e8',
      railOpacity: 0.3
    });

    $('.modal-product').slimScroll({
        height: '85px',
        railVisible: false,
      alwaysVisible: false,
      railColor: '#e8e8e8',
      color:'#e8e8e8',
      railOpacity: 0.3
    });

    $('.methodology .single ul').slimScroll({
        height: '150px',
        railColor: '#e8e8e8',
         railVisible: true,
        color:'#e8e8e8',
        railOpacity: 0.3
    });
	
	$('.web-portfolio').slimScroll({
        height: '150px',
        railColor: '#e8e8e8',
         railVisible: true,
        color:'#e8e8e8',
        railOpacity: 0.3
    });

});


(function() {
      [].slice.call(document.querySelectorAll('select.cs-select')).forEach(function(el) {
          new SelectFx(el);
      });
  })();



(function($, window, document, undefined) {
    'use strict';

    // init cubeportfolio
    $('.js-grid-mosaic-flat').cubeportfolio({
        filters: '.js-filters-mosaic-flat',
        loadMore: '#js-loadMore-mosaic-flat',
        loadMoreAction: 'click',
        layoutMode: 'mosaic',
        sortToPreventGaps: true,
        mediaQueries: [{
            width: 1500,
            cols: 4
        }, {
            width: 1400,
            cols: 4
        },
        {
            width: 1100,
            cols: 4
        },
         {
            width: 800,
            cols: 4
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        defaultFilter: '*',
        animationType: 'fadeOutTop',
        gapHorizontal: 0,
        gapVertical: 0,
        gridAdjustment: 'responsive',
        caption: 'fadeIn',
        displayType: 'fadeIn',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
    });


    // init cubeportfolio
    $('.js-grid-mosaic-flat-portfolio').cubeportfolio({
        filters: '#js-filters-mosaic-flat',
        loadMore: '#js-loadMore-mosaic-flat',
        loadMoreAction: 'click',
        layoutMode: 'mosaic',
        sortToPreventGaps: true,
        mediaQueries: [{
            width: 1500,
            cols: 6
        }, {
            width: 1100,
            cols: 4
        }, {
            width: 800,
            cols: 3
        }, {
            width: 480,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        defaultFilter: '*',
        animationType: 'fadeOutTop',
        gapHorizontal: 0,
        gapVertical: 0,
        gridAdjustment: 'responsive',
        caption: 'fadeIn',
        displayType: 'fadeIn',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
    });
})(jQuery, window, document);


(function($) {
  jQuery(document).ready(function($) {
    
    //bind our event here, it gets the current slide and pauses the video before each slide changes.
    $(".video-slider").on("beforeChange", function(event, sensation) {
      var currentSlide, slideType, player, command;
      
      //find the current slide element and decide which player API we need to use.
      currentSlide = $(sensation.$slider).find(".sensation-current");
      
      slideType = currentSlide.attr("class").split(" ")[1];
      
      //get the iframe inside this slide.
      player = currentSlide.find("iframe").get(0);
      
      if (slideType == "vimeo") {
        command = {
          "method": "pause",
          "value": "true"
        };
      } else {
        command = {
          "method": "pause",
          "func": "pauseVideo"
        };
      }
      
      //check if the player exists.
      if (player != undefined) {
        //post our command to the iframe.
        player.contentWindow.postMessage(JSON.stringify(command), "*");
      }
    });
    
    //start the slider
    $(".video-slider").sensation({
      infinite: false,
      arrows: false,
      dots: true,
      responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow:1
      }
    }
  ]
    });
    
    //run the fitVids jQuery plugin to ensure the iframes stay within the item.
    $('.item').fitVids();
    
  });
})(jQuery);



 $(".methodolgy-slider").sensation({
         dots: false,
         infinite: true,
         slidesToShow: 4,
         slidesToScroll: 1,
         arrows: false,

              autoplay: true,
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ] });



 $(".quick-contact-slider").sensation({
         dots: false,
         infinite: true,
         autoplay: false,
         slidesToShow:3,
         slidesToScroll: 1,
         arrows: false,

              autoplay: true,
            responsive: [
    {
       breakpoint: 768,
       settings: {
         arrows: false,
         slidesToShow: 3
       }
     },
     {
       breakpoint: 480,
       settings: {
         arrows: false,
        slidesToShow: 1,        
         slidesToScroll: 1
       }
     }
  ] });


  $(".award-slid").sensation({
         dots: true,
         infinite: true,
         autoplay: false,
         slidesToShow:3,
         slidesToScroll: 1,
         arrows: false,

              autoplay: true,
            responsive: [
    {
       breakpoint: 768,
       settings: {
         arrows: false,
         slidesToShow: 3
       }
     },
     {
       breakpoint: 480,
       settings: {
         arrows: false,
        slidesToShow: 1,        
         slidesToScroll: 1
       }
     }
  ] });


    $(".logo-slider").sensation({
         dots: true,
         infinite: true,
         autoplay: false,
         slidesToShow:6,
         slidesToScroll: 1,
         arrows: false,

              autoplay: true,
            responsive: [
    {
       breakpoint: 768,
       settings: {
         arrows: false,
         slidesToShow: 6
       }
     },
     {
       breakpoint: 480,
       settings: {
         arrows: false,
        slidesToShow: 2,        
         slidesToScroll: 1
       }
     }
  ] });




    //jQuery is required to run this code
$( document ).ready(function() {

    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });

});

function scaleVideoContainer() {

    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);

}

function initBannerVideoSize(element){

    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);

}



function scaleBannerVideoSize(element){

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
}


$(document).ready(function(){

function Cost_Calculator(){
    //SETTINGS
    var Sale = 'off'; //Turn sales 'on' or 'off'
    var SalePercent = 30; //Percentage off the price off (30 = 30%)

    var Finance = 'off'; //Finance 'on' or 'off'
    var FinancePercent = 0.2; //Percentage of finance (0.2 = 20%, 1 = 100%) 
    var FinanceMonths = 12; // Number of months to spread the finance
    var FinanceThreshold = 650; //The threshold that enables finance (650 = £650) 

    var DayPrice = 'off'; //Show daily price instead of total (divided by 365 days)
    
    var Currency = '£' //The currency icon displayed before all costings

    //This text is shown when the calculation has a blank data-value. This is usually they need to contact you for a price.
    var messageHTML = '<a href="#"><span style="font-size: 18px;">Please contact us for a price.</span></a>';


    //If you want to run any kind of javascript before or after calculation, place your code within the following function:
    function RunBeforeCalculate(){
        
    }

    function RunAfterCalculate(){
        //Code away!
    }

    //You can manipulate the cost by putting your own javascript in the function below. the variable "e" is the cost.
    function CostFilter(e){
        
        //Code away!
        
        return e; //don't remove this return
    }


    //===============================================================================//
    //=======Don't modify below this line, unless you know what you're doing!========//
    //===============================================================================//

    //Get elements ready
    $('.cost_calc_hide, #cost_calc_custom-data, #cost_calc_breakdown_container').hide();

    //Calculate function
    function calculate(){
        
        //Blank!
        var CalSaveInfo = [];
        $('#cost_calc_custom-data, #cost_calc_breakdown').html('');

        //Calculate total
        var calCost = 0;
        var calculate_class = '.cost_calc_calculate';
        $('.cost_calc_active').each(function() {

            if($(this).attr('data-show')){
                //Show hidden row
                var showRow = $(this).data('show').toString();

                if(showRow !== undefined){

                    if(showRow.indexOf(",") > -1){
                        var showArray = showRow.replace(' ','').split(',');

                        console.time('cache')
                        for(var i=0;i<showArray.length;i++){
                            if($(this).hasClass('cost_calc_active')){
                                $(calculate_class+'[data-row="' + showArray[i] + '"]').show();
                            }
                        }
                        console.timeEnd('cache');

                    } else {
                        $(calculate_class+'[data-row="' + showRow + '"]').show();
                    }
                }
            }

            //Calculation
            calCost = calCost + parseFloat($(this).data('value'));

            if(DayPrice == 'on'){
                var dailyAppend = ' (Total)';
            } else { 
                var dailyAppend = '';
            }

            //Add to list
            var optionName = $(this).attr('value');
            var appendName = '<p id="cost_calc_breakdown_item">'+optionName+'</p>';

            var optionCost = $(this).attr('data-value');
            var appendCost = '<p id="cost_calc_breakdown_price">'+Currency+optionCost+dailyAppend+'</p>';

            var appendItem = appendName + appendCost;

            //hidden data
            var appendPush = ' d1 ' + optionName + ' d2 d3 ' + optionCost + ' d4 ';

            $('#cost_calc_breakdown').append(appendItem);

            CalSaveInfo.push(appendPush);

        });

        //Limit to 2 decimal places
        calCost = calCost.toFixed(2);

        //Hook on the cost
        calCost = CostFilter(calCost);

        var CustomData = '#cost_calc_custom-data';
        $.each(CalSaveInfo,function(i,v){
            $(CustomData).append(v);
        });


        //Update price
        if(isNaN(calCost)){
            $('#cost_calc_total_cost').html(messageHTML).css({'margin-top':'-30px'});
            $('#cost_calc_breakdown').hide();
        }
        else{
            //Sale price
            if(Sale == 'on'){
                var originalCalCost = calCost;
                var NewPercent = 100 - SalePercent;
                calCost = NewPercent/100 * calCost;
                calCost = parseFloat(calCost).toFixed(2);
                calCost.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
                $('#cost_calc_breakdown').append('<p id="cost_calc_breakdown_item">Offer</p><p id="cost_calc_breakdown_price">'+SalePercent + '% Off</p>');
            }

            //Monthly cost
            var monthCost = calCost / FinanceMonths;
            var monthCost = Math.round(monthCost); //Round up
            var interestCost = monthCost * FinancePercent;
            var interestCost = Math.round(interestCost); //Round up
            var totalMonthCost = monthCost + interestCost;

            //Form Inject
            $('#cost_calc_price').val(calCost);

            if(DayPrice == 'on'){ //Day price
                var calCostDay = calCost / 365;
                var calCostDay = Math.round(calCostDay) - 0.1;
                $('#cost_calc_total_cost').html(Currency+calCostDay+'9 <span id="cost_calc_day_cost">a day / '+Currency+calCost+' (Total)</span>');
                }
            else {
                $('#cost_calc_total_cost').html(Currency+calCost); //Simple calculation
            }

            if(Sale == 'on'){
                $('#cost_calc_total_cost').append('&nbsp;<span id="cost_calc_original_price">'+Currency+originalCalCost+'</span>'); //Sale
            }

            if(Finance == 'on'){
                if(calCost > FinanceThreshold){
                    $('#cost_calc_total_cost').append('<div id="cost_calc_monthly"> or <strong>'+Currency+totalMonthCost+'</strong> a month (for '+FinanceMonths+' months)</div>'); //Finance
                    }
            }
            $('#cost_calc_total_cost').css({'margin-top':'0px'});
            $('#Calcu-SubHeading, #cost_calc_breakdown').show();
        }

    }

    //Calculate on click
    $('.cost_calc_calculate').click(function(){

        RunBeforeCalculate();

        if($(this).hasClass('single')){
            //Add cost_calc_active class
            var row = $(this).data('row');
            //Add class to this only
            $('.cost_calc_calculate').filter(function(){
                return $(this).data('row') == row;
            }).removeClass('cost_calc_active');
            $(this).addClass('cost_calc_active');
        } else {
            // Remove class if clicked
            if($(this).hasClass('cost_calc_active')){
                $(this).removeClass('cost_calc_active');
            } else {
               $(this).addClass('cost_calc_active');
            }
        }

        //Select item
        var selectItem = $(this).data('select');
        var currentItem = $('.cost_calc_calculate[data-id="' + selectItem + '"]');
        var currentRow = currentItem.data('row');

        if(selectItem !== undefined){
            if(!$('.cost_calc_calculate[data-row="' + currentRow + '"]').hasClass('cost_calc_active'))
            currentItem.addClass('cost_calc_active');
        }

        //Bring in totals & information
        $('#cost_calc_breakdown_container, #cost_calc_clear_calculation').fadeIn();
        $('.cost_calc_hide').hide();
        $('.cost_calc_calculate').each(function(){
            if($(this).is(':hidden')){
                $(this).removeClass('cost_calc_active');
            }
        calculate();
        });

        RunAfterCalculate();
        return true;
    });

    $('#cost_calc_clear_calculation').click(function(){
        $('.cost_calc_active').removeClass('cost_calc_active');
        RunBeforeCalculate();
        calculate();
        RunAfterCalculate();
        $('#cost_calc_breakdown').html('<p id="empty-breakdown">Nothing selected</p>');
        return true;
    });
}
    
//Run cost calculator
Cost_Calculator();
}); //end document ready.