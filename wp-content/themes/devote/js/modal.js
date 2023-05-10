jQuery(function($){
    $('.js-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });

    $('.js-modalArea-open').on('click',function(){
        $('.js-modalArea').fadeIn();
        return false;
    });
    $('.js-modalArea-close').on('click',function(){
        $('.js-modalArea').fadeOut();
        return false;
    });

    $('.js-modalAddFilter-open').on('click',function(){
        $('.js-modalAddFilter').fadeIn();
        return false;
    });
    $('.js-modalAddFilter-close').on('click',function(){
        $('.js-modalAddFilter').fadeOut();
        return false;
    });




    $(document).ready(function(){
        //デフォルトで表示する要素を指定
        $('.modal-area').show();
        $('.modal-district').hide();
    
        //buttonがクリックされたら処理を実行
        $('.modal-buttons__districtBtn').click(function () {
    
             //toggleClassでshowのclassを追加または削除
            $('.modal-body').toggleClass('show');
    
            //#modal-bodyがshowのclassをを持っていれば
            if($('.modal-body').hasClass('show')){
    
                 //要素の表示を切り替える
                $('.modal-area').hide();
                $('.modal-district').show();
            }else{
    
                 //要素の表示を切り替える
                $('.modal-area').show();
                $('.modal-district').hide();
            }
        });
    });

    $('.modal-buttons__districtBtn').on('click', function () {
        if ($(this).text() === '町名を選択へ') {
          $(this).text('区選択へ戻る');
        } else {
          $(this).text('町名を選択へ');
        }
    });

    $('#modal-buttons__filterBtn').on('click', function () {
        if ($('.modal-header__title').text() === '町名を選択') {
          $('.modal-header__title').text('絞り込み条件を設定');
        } else {
          $('.modal-header__title').text('町名を選択');
        }
    });


    $(document).ready(function(){
        //デフォルトで表示する要素を指定
        $('.modal-area').show();
        $('.modal-filter').hide();
    
        //buttonがクリックされたら処理を実行
        $('#modal-buttons__filterBtn').click(function () {
    
             //toggleClassでshowのclassを追加または削除
            $('.modal-body').toggleClass('show');
    
            //#modal-bodyがshowのclassをを持っていれば
            if($('.modal-body').hasClass('show')){
    
                 //要素の表示を切り替える
                $('.modal-area').hide();
                $('.modal-filter').show();
            }else{
    
                 //要素の表示を切り替える
                $('.modal-area').show();
                $('.modal-filter').hide();
            }
        });
    });

    $('#modal-buttons__filterBtn').on('click', function () {
        if ($(this).text() === '絞り込み条件を設定') {
          $(this).text('エリア選択へ戻る');
        } else {
          $(this).text('絞り込み条件を設定');
        }
    });
});
