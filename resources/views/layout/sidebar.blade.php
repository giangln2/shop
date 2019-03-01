<div id="sidebar" class="span3">
    @if(Auth::check())
        <div class="well well-small">
            <a id="myCart" href="product_summary.html">
                <img src="{{ asset('themes/images/ico-cart.png') }}" alt="cart">3 Items in your cart
                <span class="badge badge-warning pull-right">$155.00</span>
            </a>
        </div>
    @endif
    <ul id="sideMenu" class="nav nav-tabs nav-stacked">
    </ul>
</div>
