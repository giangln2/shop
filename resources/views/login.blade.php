@extends('layout.layout')

@section('title', 'Đăng nhập/Đăng ký')

@section('content')

    <div id="mainBody">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li><a href="{{ URL::to('index') }}">Trang chủ</a> <span class="divider">/</span></li>
                        <li class="active">Đăng nhập - Đăng ký</li>
                    </ul>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="span5">
                            <h3>Đăng nhập</h3>
                            <hr class="soft"/>
                            <div class="well">
                                <label id="errorLogin" style="color: red"></label>
                                <form action="{{ URL::to('login') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail1">E-mail</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputEmail1" name="inputEmail"
                                                   placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword1">Password</label>
                                        <div class="controls">
                                            <input type="password" class="span4" id="inputPassword1"
                                                   name="inputPassword"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn" id="submitLogin">Đăng nhập</button>
                                            {{--<a href="forgetpass.html">Forget password?</a>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="span1"> &nbsp;</div>
                        <div class="span5">
                            <h3>Đăng ký</h3>
                            <hr class="soft"/>
                            <div class="well">
                                <h5>Chưa có tài khoản?</h5><br>
                                <label id="errorRegister" style="color: red"></label>
                                <form action="{{ URL::to('register') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="control-group">
                                        <label class="control-label" for="name">Tên người dùng</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputName" name="inputName0"
                                                   placeholder="Họ và tên">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail0">E-mail</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputEmail0" name="inputEmail0"
                                                   placeholder="E-mail"> <label id="errorEmail"
                                                                                style="color: red"></label>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword0">Password</label>
                                        <div class="controls">
                                            <input class="span4" type="password" id="inputPassword0"
                                                   name="inputPassword0"
                                                   placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword0">Địa chỉ</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputAddress0" name="inputAddress0"
                                                   placeholder="Địa chỉ">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputPassword0">Số điện thoại</label>
                                        <div class="controls">
                                            <input class="span4" type="text" id="inputPhoneNumber0"
                                                   name="inputPhoneNumber0"
                                                   placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="controls">
                                        <button type="submit" class="btn block" id="submitRegister">Đăng ký</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
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
        });

    </script>
@endsection


