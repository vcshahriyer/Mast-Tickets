
$( document ).ready(function() {

    $(".checkout-button").on('click',function (e) {
        var listItems = $("#selected-seats li");
        var product = "";
        listItems.each(function(idx, li) {
            var data = $(li).text();
            data = data.substring(0, 3);
            product += data+',';
        });
        var $seats = $('.form-horizontal').find('#seats');
        var $selected = $('.form-horizontal').find('#selected');
        $selected.html(product);
        $seats.attr("value", product);
    });

});