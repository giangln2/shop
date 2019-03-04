$(document).ready(function () {
    $.get('/shop/public/category', function (data) {
        $('#sideMenu').html(data.sidebar);
        $('#optTxt').html(data.option);
    });

    $('#inputEmail0').keyup(function () {
        var checkEmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var token = $('input[name="_token"]').val();

        if ($(this).val() !== "" && checkEmail.test($(this).val())) {
            $.ajax({
                type: 'POST',
                url: 'check',
                data: {
                    mail: $(this).val(),
                    _token: token,
                },
                success: function (data) {
                    if (!data.result) {
                        $('#submitRegister').prop('disabled', true);
                        $('#errorEmail').html("Email đã được sử dụng!!");
                    } else {
                        $('#submitRegister').prop('disabled', false);
                        $('#errorEmail').html("");
                    }
                }
            });
        } else {
            $('#submitRegister').prop('disabled', false);
            $('#errorEmail').html('');
        }
    });

    $('#submitRegister').click(function () {
        if ($('#inputName').val() !== "" && $('#inputEmail0').val() !== "" && $('#inputPassword0').val() !== "" &&
            $('#inputAddress0').val() !== "" && $('#inputPhoneNumber0').val() !== "") {
            return true;
        } else {
            $('#errorRegister').html('Vui lòng nhập đầy đủ thông tin!!');
            return false;
        }
    });

    $('#submitLogin').click(function () {
        if ($('#inputEmail1').val() !== "" && $('#inputPassword1').val() !== "") {
            return true;
        } else {
            $('#errorLogin').html('Vui lòng nhập đầy đủ thông tin!!');
            return false;
        }
    });

    $('#searchForm').submit(function () {
        if ($('#srchFld').val()) {
            return true;
        } else {
            return false;
        }
    })
});
