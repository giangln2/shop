<div id="header">
    <div class="container">
        <div id="welcomeLine" class="row">
            <div class="span6">Xin chào!<strong>
                    @if(Session::get('name') != "")
                        {{ Session::get('name') }}
                    @else
                        User
                    @endif
                </strong></div>
            <div class="span6">
                <div class="pull-right">
                    @if(Auth::check())
                        <a href="product_summary.html">
                            <span class="btn btn-mini btn-primary">
                                <i class="icon-shopping-cart icon-white"></i> [ 3 ] Itemes in your cart
                            </span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <!-- Navbar ================================================== -->
        <div id="logoArea" class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="{{ URL::to('index') }}">
                    <img src="{{ asset('themes/images/logo.png') }}" alt="Bootsshop"/>
                </a>
                <form class="form-inline navbar-search" method="post" action="products.html">
                    <input id="srchFld" class="srchTxt" type="text"/>
                    <select class="srchTxt" id="optTxt">
                    </select>
                    <button type="submit" id="submitButton" class="btn btn-primary">Tìm</button>
                </form>
                <ul id="topMenu" class="nav pull-right">
                    <li class="">
                        @if(Auth::check())
                            <a href="{{ URL::to('logout') }}" role="button" style="padding-right:0"><span
                                    class="btn btn-large btn-danger">Đăng xuất</span></a>
                        @else
                            <a href="{{ URL::to('login') }}" role="button" style="padding-right:0"><span
                                    class="btn btn-large btn-success">Đăng nhập</span></a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
