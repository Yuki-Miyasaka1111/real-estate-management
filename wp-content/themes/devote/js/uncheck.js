jQuery(function () {
    $('.parent').click(function () {
        var getid = $(this).attr('id');
        $('.child[data-parent="' + getid + '"]').each(function () {
          $(this).prop('checked', false);
        });
    });
});    