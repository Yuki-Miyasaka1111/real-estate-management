$(function(){
    // 初期状態のボタンは無効
    $(".btn1").prop("disabled", true);
      // チェックボックスの状態が変わったら（クリックされたら）
      $("input[type='checkbox']").on('change', function () {
          // チェックされているチェックボックスの数
          if ($(".disabled:checked").length > 0) {
            // ボタン有効
            $(".btn1").prop("disabled", false);
          } else {
            // ボタン無効
            $(".btn1").prop("disabled", true);
          }
      });
  });


$(function(){
// 初期状態のボタンは無効
    $(".btn2").prop("disabled", true);
    // チェックボックスの状態が変わったら（クリックされたら）
    $("input[type='checkbox']").on('click', function () {
        // チェックされているチェックボックスの数
        if ($(".disabled:checked").length > 0) {
          // ボタン有効
          $(".btn2").prop("disabled", false);
        } else {
          // ボタン無効
          $(".btn2").prop("disabled", true);
        }
    });
});

$(document).ready( function(){
  // ページ読み込み時に実行したい処理
  if ($(".disabled:checked").length > 0) {
    // ボタン有効
    $(".btn2").prop("disabled", false);
  } else {
    // ボタン無効
    $(".btn2").prop("disabled", true);
  }
});

$(function(){
  // 初期状態のボタンは無効
    $(".btn3").prop("disabled", false);
      // チェックボックスの状態が変わったら（クリックされたら）
    $("input[type='checkbox']").on('click', function () {
        // チェックされているチェックボックスの数
        if ($(".disabled:checked").length > 0) {
          // ボタン有効
          $(".btn3").prop("disabled", false);
        } else {
          // ボタン無効
          $(".btn3").prop("disabled", true);
        }
    });
});


