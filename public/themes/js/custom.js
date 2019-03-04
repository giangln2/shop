$(document).ready(function () {
    $.get('/shop/public/category', function (data) {
        $('#sideMenu').html(data.sidebar);
        $('#optTxt').html(data.option);
    });

    $('#inputEmail0').change(function () {
        if ($(this).val() !== "") {
            $.get('check/' + $(this).val(), function (data) {
                $('#errorEmail').html(data.result);
            });
        } else {
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
