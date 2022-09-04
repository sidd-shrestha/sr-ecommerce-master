$(document).ready(function() {
    loadWhislist();
    loadCart();




    function loadWhislist() {

        $.ajax({
            method: "GET",
            url: "/user/load-wishlist-count/",
            dataType: 'text',

            success: function(response) {

                console.log(response.stat);
            }
        });
    }

    function loadCart() {
        $.ajax({
            method: "GET",
            url: "/user/load_cart_data/",
            dataType: "text",
            success: function(response) {
                // $('.cartcount').html('');
                // $('.cartcount').html(response);
                console.log(response)
            }
        });
    }
    $('.changeQuantity').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.p_id').val();
        var product_quantity = $(this).closest('.product_data').find('.quantity_input').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/user/update_cart/",
            data: {
                'product_id': product_id,
                'product_quantity': product_quantity,

            },
            success: function(response) {
                window.location.reload();

            }
        });
    });
    $('.delete_cart_item').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.p_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/user/delete_cart_item/",
            data: {
                'product_id': product_id,
            },
            success: function(response) {
                console.log(response);
                alert(response.status)
            }
        });
    });
    $('.addToCartBtn').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();
        var product_quantity = $(this).closest('.product_data').find('.quantity_input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/user/add_to_cart/",
            data: {
                'product_id': product_id,
                'product_quantity': product_quantity,
            },
            dataType: "text",
            success: function(response) {
                // console.log(product_id);
                // window.location.reload(true);
                alert(response);
                // loadCart();
                // if (response.status == 400) {
                //     $('$saveForm_errList').html("");
                //     $('$saveForm_errList').addClass("alert alert-danger");
                //     $.each(response.errors, function(key, err_values) {
                //         $('$saveForm_errList').append('<li>' + err_values + '</li>');
                //     });
                // } else {
                //     $('$saveForm_errList').html("");
                //     $('#success_message').addClass('alert alert-sucess');
                //     $('#success_message').text(response.message);
                // }
            }
        });
    });

    $('.delete_cart_item').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/user/delete_cart_item/",
            data: {
                'product_id': product_id,
            },
            dataType: "text",
            success: function(response) {
                window.location.reload(true);
                alert(response);
                // swal("", response.status, "success");
            }
        });


    });


    $('.removeBtn').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/user/delete_wishlist/",
            data: {
                'product_id': product_id,
            },
            dataType: "text",
            success: function(response) {
                window.location.reload(true);
                alert(response);
                // swal("", response.status, "success");
            }
        });


    });
    $(".quantity_btn").on("click", function() {

        var $button = $(this),
            $input = $button.closest('.quantity').find("input.quantity_input");
        var oldValue = $input.val(),
            newVal;

        if ($.trim($button.text()) == "+") {

            newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }

        $input.val(newVal);
    });
    tns({
        container: '.hero-slider',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 0,
        items: 1,
        nav: false,
        controls: true,
        controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
    });
    tns({
        container: '.brands-logo-carousel',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 5,
            },
            992: {
                items: 6,
            }
        }
    });

    $('.addToWhishlist').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest('.product_data').find('.product_id').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/user/add_to_whislist/",
            data: {
                'product_id': product_id,
            },

            success: function(response) {
                // console.log(product_id);
                // window.location.reload(true)
                alert(response);
            }
        });
    });
});