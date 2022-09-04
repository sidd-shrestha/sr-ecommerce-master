$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.razorpay_btn').click(function(e) {
        e.preventDefault();

        var first_name = $('.first_name').val();
        var last_name = $('.last_name').val();
        var address = $('.address').val();
        var country = $('.country').val();
        var contact = $('.contact').val();
        var city = $('.city').val();
        var postal_code = $('.postal_code').val();
        if (!first_name) {
            fname_error = "First Name required";
            $('#fname_error ').html('');
            $('#fname_error ').html('fname_error');

        } else {
            fname_error = "";
            $('#fname_error ').html('');
        }
        if (fname_error != '') {
            return false;
        }
        if (!last_name) {
            lname_error = "Last Name required";
            $('#lname_error ').html('');
            $('#lname_error ').html('lname_error');

        } else {
            lname_error = "";
            $('#lname_error ').html('');
        }
        if (lname_error != '') {
            return false;
        } else {
            var data = {
                'first_name': first_name,
                'last_name': last_name,
                'country': country,
                'address': address,
                'contact': contact,
                'city': city,
                'postal_code': postal_code,

            }
            $.ajax({
                method: "POST",
                url: "/user/proceed-to-pay/",
                dataType: 'text',
                data: data,
                success: function(response) {
                    alert(response.total_price);
                    // console.log(response.stat);



                }
            });
        }
    });
});