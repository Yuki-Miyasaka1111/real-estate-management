jQuery(function($){
    $('.top-list').slick({
        autoplay: false, //自動でスクロール
        autoplaySpeed: 6000, //自動再生のスライド切り替えまでの時間を設定
        slidesToShow: 1.2, //表示するスライドの数
        arrows: true,
        centerMode:true,
	      centerPadding:"0%",
        nextArrow: '<button class="top-list__arrow next-arrow">',
    });

    $('.top-brand__items').slick({
      autoplay: true, //自動でスクロール
      autoplaySpeed: 0, //自動再生のスライド切り替えまでの時間を設定
      speed: 6000, //スライドが流れる速度を設定
      cssEase: "linear", //スライドの流れ方を等速に設定
      slidesToShow: 4, //表示するスライドの数
      swipe: false, // 操作による切り替えはさせない
      arrows: false, //矢印非表示
      pauseOnFocus: false, //スライダーをフォーカスした時にスライドを停止させるか
      pauseOnHover: false, //スライダーにマウスホバーした時にスライドを停止させるか
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3, //画面幅750px以下でスライド3枚表示
          }
        },
        {
          breakpoint: 750,
          settings: {
            slidesToShow: 1, //画面幅750px以下でスライド3枚表示
          }
        }
      ]
    });

    $('.property-thumbnails__slider')
    .on("init", function (event, slick) {
        $(this).parent().append(
            '<div class="slick-counter"><span class="count-current"></span> / <span class="count-total"></span></div>'
        );
        $(".count-current").text(slick.currentSlide + 1);
        $(".count-total").text(slick.slideCount);
    })
    .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        asNavFor: '.property-sub__slider'
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
        $(".count-current").text(nextSlide + 1);
    });
    $('.property-sub__slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.property-thumbnails__slider',
        dots: false,
        arrows: false,
        focusOnSelect: true
    });
});