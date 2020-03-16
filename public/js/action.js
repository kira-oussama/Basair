$(document).ready(function(){
    $('.navbar-brand').attr('style', 'font-size: 4rem !important');
    $(window).scroll(function(){
      if($(this).scrollTop() > 30){
         $('.navbar-brand').attr('style', 'font-size: 2rem !important');
      }else{
         $('.navbar-brand').attr('style', 'font-size: 4rem !important');
      }
    });
  });

  $('.slider').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1
  });

  $(document).ready(function(){
    $('.slick-next').attr('style', 'background-color: #0d47a1 !important;border-radius:.1rem;font-weight:bold;');
  });

  $(document).ready(function(){
    $('.slick-prev').attr('style', 'background-color: #0d47a1 !important;border-radius:.1rem;font-weight:bold;');
  });