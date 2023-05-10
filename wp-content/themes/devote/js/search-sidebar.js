jQuery(function($){
  $('.refinedSearch-btn').on('click', function() {
    $('.searchform-sidebar').toggleClass('active');
    $('#overlay').toggleClass('overlay');
  });
  $(document).on('click','.overlay', function() {
    $('.searchform-sidebar').removeClass('active');
    $('#overlay').removeClass('overlay');
  });

  $('.refinedSearch-btn').on('click', function () {
    if ($(this).text() === '絞り込み') {
      $(this).text('戻る');
    } else {
      $(this).text('絞り込み');
    }
  });

  $('#overlay').on('click', function () {
    if ($('.refinedSearch-btn').text() === '戻る') {
      $('.refinedSearch-btn').text('絞り込み');
    } else {
      $('.refinedSearch-btn').text('戻る');
    }
  });
});