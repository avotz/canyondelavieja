;(function($){


   
  /*$('.slider-home').slick({
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      arrows:false,
      dots:true,
      cssEase: 'linear'
  });*/
  

  function isHome(){
      return $('body').hasClass('home');
    }
    
    $(window).scroll(function () {

          if(isHome()){
            
              if ($(this).scrollTop() > 0) {
                  $('body').addClass("header--fixed");
              } else {
                  $('body').removeClass("header--fixed");
              }
        }

        /* if ($(this).scrollTop() > $('.banner').height()-200) {
                  $('.banner-title').addClass("inSection");
              } else {
                  $('.banner-title').removeClass("inSection");
              }*/

      });

    $('.woocommerce-product-gallery__image a').on('click', function (e) {
       e.preventDefault();
       
        $('.woocommerce-product-gallery__wrapper .wp-post-image').attr('src', $(this).data('img'))
     
    });

 
$(window).load(function() {
      
      resize();
     

});


$(window).resize(resize);

function resize () {
   
}




    
})(jQuery);

