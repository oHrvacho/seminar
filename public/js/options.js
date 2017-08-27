$(function() {
    var dateOption = $('#div1');
    $('#dateOption').on('change', function () {
        var odabir = $(this).val();
        if(odabir === "DA") {
            dateOption.removeClass('hide');
            dateOption.addClass('show');
        } else {
            dateOption.removeClass('show');
            dateOption.addClass('hide');
        }
    });
    var childOption = $('#div2');
    $('#childOption').on('change', function () {
        var odabir = $(this).val();
        if(odabir === "DA") {
            childOption.removeClass('hide');
            childOption.addClass('show');
        } else {
            childOption.removeClass('show');
            childOption.addClass('hide');
        }
    });
});