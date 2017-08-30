$(".client-slider").sensation({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        arrows: false,
             autoplay: true,
                     centerMode: true,

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
        centerMode: false,
        slidesToShow: 2
      }
    }
  ] });




$(document).ready(function(){
    
    $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');
        var content = {
            'tab1':{ 'color_bg':'#dcdcdc' , 'big_head':'Logo Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.' },

            'tab2':{ 'color_bg':'#dcdcdc' , 'big_head':'Brand Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'},

            'tab3':{ 'color_bg':'#dcdcdc' , 'big_head':'Web Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'},

            'tab4':{ 'color_bg':'#dcdcdc' , 'big_head':'App Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'},

            'tab5':{ 'color_bg':'#dcdcdc' , 'big_head':'sensation Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'},

            'tab6':{ 'color_bg':'#dcdcdc' , 'big_head':'Content Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'},

            'tab7':{ 'color_bg':'#dcdcdc' , 'big_head':'eCommerce Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'},

            'tab8':{ 'color_bg':'#dcdcdc' , 'big_head':'Marketing Design Packages','mid_head':'Special Packages for Incomparable <br> Brand Identity Solutions',
            'para':'We’ve crafted some of the best logo design packages <br> for emerging startups, pre-existing brands and  world-class corporations. <br> Pick a suitable design package <br> below or discuss a custom quote with us today.'}
        };

        $("#"+tab_id).css('opacity' , '0'); 
        $($("#"+tab_id).find('.pricing-slider').find('.sensation-dots').find('button')[0]).trigger('click');

        setTimeout(function(){ $("#"+tab_id).animate({opacity: 1}, 500); }, 500);

        $('.hero-services').css( 'backgroundColor' , content[tab_id].color_bg );
        $('.hero-services').find('h4').html(content[tab_id].big_head);
        $('.hero-services').find('h3').html(content[tab_id].mid_head);
        $('.hero-services').find('p').html(content[tab_id].para);


        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        ;

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
    });

    $('.package-detail .single ul').slimScroll({
        height: '280px',
        railVisible: true,
        alwaysVisible: true,
        railColor: '#e8e8e8',
        color:'#e8e8e8',
        railOpacity: 0.3
    });


});

var index=0;
var themeObj = {
    '.btn-green': ['gre-bg','pet-bg','pur-bg','ali-bg','sea-bg','san-bg','mad-bg' ],
    'header ul.secondary-nav a': ['gre-h','pet-h','pur-h','ali-h','sea-h','san-h','mad-h' ],
    '.client-wrpper a': ['gre','pet','pur','ali','sea','san','mad' ],
    '.testimonial-dec h4': ['gre','pet','pur','ali','sea','san','mad' ],
    'section.pricing h4': ['gre','pet','pur','ali','sea','san','mad'],
    'section.testimonials h4': ['gre','pet','pur','ali','sea','san','mad'],
    'section.hero-services h4': ['gre','pet','pur','ali','sea','san','mad'],
    'section.service-detail h4': ['gre','pet','pur','ali','sea','san','mad'],
    'section.qualities h4:first-child': ['gre','pet','pur','ali','sea','san','mad'],
    'section.get_quote h4': ['gre','pet','pur','ali','sea','san','mad'],
    '.sensation-dots li button': ['gre-dots','pet-dots','pur-dots','ali-dots','sea-dots','san-dots','mad-dots'],
    '.subscribe_fold h4': ['gre','pet','pur','ali','sea','san','mad'],
    'section.call-actions .fa': ['gre','pet','pur','ali','sea','san','mad'],
    'section.call-actions h3 span': ['gre','pet','pur','ali','sea','san','mad'],
    'div.single h6': ['gre','pet','pur','ali','sea','san','mad'],
    'div.single span.price': ['gre','pet','pur','ali','sea','san','mad'],
    'div.single p span': ['gre','pet','pur','ali','sea','san','mad'],
    '.draw': ['gre-d','pet-d','pur-d','ali-d','sea-d','san-d','mad-d' ],
    '.skill-bar': ['gre-bg','pet-bg','pur-bg','ali-bg','sea-bg','san-bg','mad-bg' ],
    '.overlay-green': ['gre-bg','pet-bg','pur-bg','ali-bg','sea-bg','san-bg','mad-bg' ],
    '.portfolio_fold h4':['gre','pet','pur','ali','sea','san','mad' ],
    'section.count h4':['gre','pet','pur','ali','sea','san','mad' ],
    'section.award h4':['gre','pet','pur','ali','sea','san','mad' ],
    'section.count span':['gre','pet','pur','ali','sea','san','mad' ],
    'div.subscribe button': ['gre-bg','pet-bg','pur-bg','ali-bg','sea-bg','san-bg','mad-bg' ],
    '.branding-package .overlay-green': ['gre-bg-o','pet-bg-o','pur-bg-o','ali-bg-o','sea-bg-o','san-bg-o','mad-bg-o' ],
    '.branding-package .orderNow': ['gre','pet','pur','ali','sea','san','mad' ],
    'footer number': ['gre','pet','pur','ali','sea','san','mad' ],
    '.call-action number': ['gre','pet','pur','ali','sea','san','mad' ],
    '.hero-subservices h4': ['gre','pet','pur','ali','sea','san','mad' ],
    '.awards h4:first-child': ['gre','pet','pur','ali','sea','san','mad' ],
    '.portfolio-jump a': ['gre','pet','pur','ali','sea','san','mad' ],
    '.about-content h4': ['gre','pet','pur','ali','sea','san','mad' ],
    '.clients-section h4': ['gre','pet','pur','ali','sea','san','mad' ],
    '.logo a': ['logo-gre','logo-pet','logo-pur','logo-ali','logo-sea','logo-san','logo-mad' ],
    '.sub-footer ul li a':  ['gre-h','pet-h','pur-h','ali-h','sea-h','san-h','mad-h' ],
    '.action-no': ['gre','pet','pur','ali','sea','san','mad' ],
    '.action-chat': ['gre','pet','pur','ali','sea','san','mad' ],
    '.header-nav': ['gre-bg','pet-bg','pur-bg','ali-bg','sea-bg','san-bg','mad-bg' ],
    '.btn-line-fill': ['gre-fill','pet-fill','pur-fill','ali-fill','sea-fill','san-fill','mad-fill' ],
    '.about_fold h4':  ['gre','pet','pur','ali','sea','san','mad' ],
    '.modal-body h4':  ['gre','pet','pur','ali','sea','san','mad' ],
    '.package-detail h4': ['gre','pet','pur','ali','sea','san','mad' ],
    'section.thankyou h4': ['gre','pet','pur','ali','sea','san','mad' ],
    '.single-address h4': ['gre','pet','pur','ali','sea','san','mad' ],
    '.sensation-slider a': ['gre','pet','pur','ali','sea','san','mad' ],
    'ul#navigation > li + a':  ['gre-h','pet-h','pur-h','ali-h','sea-h','san-h','mad-h' ],
    '.call-action span': ['gre','pet','pur','ali','sea','san','mad' ],
    '.nav-anim-dd': ['gre-bg-h','pet-bg-h','pur-bg-h','ali-bg-h','sea-bg-h','san-bg-h','mad-bg-h' ],
    '.nav-anim': ['gre-h','pet-h','pur-h','ali-h','sea-h','san-h','mad-h' ],

};

$(document).ready(function(){
    setInterval(function(){
        var keys = Object.keys( themeObj );
        for(var i=0; i<keys.length;i++){
            $(keys[i]).addClass(themeObj[keys[i]][index]);
            for(var j=0; j<themeObj[keys[i]].length; j++){
                if(j!=index)
                    $(keys[i]).removeClass(themeObj[keys[i]][j]);
            }
        }    
        index++;
        if( index >= 10 ){ index=0; }
     }, 10000 ); /* Interval fn ends */  
});


(function(){
    $(document).ready(function() {
        $('#recentOrders').DataTable();
    });
})();








(function(){
$(".faq-sections *").hide();

$('.faq-opt').on('click', function(e){
		var optionValue = $(this).data("value");
            if(optionValue){
                $(".faq-sections div").hide();
                $(".faq-sections " + "." + optionValue).show();
            } else{
                $(".box").hide();
            }
});

})();






