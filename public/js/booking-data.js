
$( document ).ready(function() {

    $(".checkout-button").on('click',function (e) {

        var listItems = $("#selected-seats li");
        var product=[];
        listItems.each(function(idx, li) {
            var data = $(li).text();
            data = data.replace("[cancel]",'');
            product[idx] = data;

        });
        var products = JSON.stringify(product);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
            }
        });
        $.ajax({
            url: '/booked',
            type: 'POST',
            data: products,
            dataType: 'json',
            success: function (result) {
                $('.alert').show();
                $('.alert').html(result.success);
            }

        });

    });

});