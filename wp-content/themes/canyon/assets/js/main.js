;(function($){


   
  $('.carousel-gallery').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      autoplay: true,
      arrows:false,
      dots:false,
      cssEase: 'linear'
  });
    $('.page-gallery').slick({
        infinite: true,
        slidesToShow: 1,
        autoplay: true,
        arrows: false,
        dots: false,
        cssEase: 'linear'
    });
    $('.map')
        .click(function () {
            $(this).find('iframe').addClass('clicked')
        })
        .mouseleave(function () {
            $(this).find('iframe').removeClass('clicked')
        });

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

    $('#tab-title-book').on('click', function (e) {
       
        $('#tab-book').find('input[name="your-subject"]').val($('.product_title').text());

    });

    $('.product-type-accommodation-booking #tab-title-book').on('click', function (e) {
        if ($('html').attr('lang') == 'en-US'){
            window.location = 'https://www.bookingplacecostarica.com/reservations/hotel/availability.aspx?hotelId=CV0113'

        }else{
            window.location = 'https://www.bookingplacecostarica.com/reservations/hotel/availability.aspx?hotelId=CV0113&lang=es-CR'
        }

    });

 
$(window).load(function() {
      
      resize();
     

});


$(window).resize(resize);

function resize () {
   
}




    
})(jQuery);

