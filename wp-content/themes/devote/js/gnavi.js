jQuery(function(){
    var pos = 0;
    var header = jQuery('#header');
    var hamburger = jQuery('.hamburger');
    
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 150) { //スクロールが150pxを越えたら
        if(jQuery(this).scrollTop() < pos ){
          //上にスクロールしたとき
          header.removeClass('hide');
          hamburger.removeClass('hide');
        }else{
          //下にスクロールしたとき
          header.addClass('hide');
          hamburger.addClass('hide');
        }
      }
      pos = jQuery(this).scrollTop();
    });

    var btn = jQuery('#btn');
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 150) { //スクロールが150pxを越えたら
        btn.removeClass('invertColor');
      } else { //スクロールが150pxを越えなければ
        btn.removeClass('invertColor');
      }
    });

    var logo = jQuery('#header');
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 150) { //スクロールが150pxを越えたら
        logo.addClass('invert');
      } else { //スクロールが150pxを越えなければ
        logo.removeClass('invert');
      }
    });

    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() <= 0) { //スクロールが150pxを越えたら
        logo.addClass('fix');
      } else { //スクロールが150pxを越えなければ
        logo.removeClass('fix');
      }
    });

    jQuery('.hamburger').on('click', function() {
      jQuery('.hamburger ').toggleClass('active');
      jQuery('.header-hamburger ').toggleClass('active');
      jQuery('#overlay').toggleClass('overlay');
    });
    jQuery(document).on('click','.overlay', function() {
      jQuery('.hamburger').removeClass('active');
      jQuery('.header-hamburger').removeClass('active');
      jQuery('#overlay').removeClass('overlay');
    });
});