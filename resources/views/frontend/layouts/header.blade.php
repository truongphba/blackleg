
    <header id="aa-header">
        <!-- start header top  -->
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <!-- start header top left -->
                            <div class="aa-header-top-left">
                                <div class="cellphone hidden-xs">
                                    <a href="tel:0989859398"><p><span class="fa fa-phone"></span>0989859398</p></a>
                                </div>
                                <!-- / cellphone -->
                            </div>
                            <!-- / header top left -->
                            <div class="aa-header-top-right">
                                <ul class="aa-head-top-nav-right">
                                    {{--                                <li><a href="account.html">My Account</a></li>--}}
                                    {{--                                <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>--}}
                                    <li class="hidden-xs"><a href="/checkout">My Cart</a></li>
                                    {{--                                <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>--}}
{{--                                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header top  -->

        <!-- start header bottom  -->
        <div class="aa-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-bottom-area">
                            <!-- logo  -->
                            <div class="aa-logo">
                                <!-- Text based logo -->
                                <a href="/">
                                    <span class="fa fa-shopping-cart"></span>
                                    <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                                </a>
                                <!-- img based logo -->
                            <!-- <a href="index.html"><img src="{{asset("frontend/img/logo.jpg")}}" alt="logo img"></a> -->
                            </div>
                            <!-- / logo  -->
                            <!-- cart box -->
                            <div class="aa-cartbox productCart">
                                <a class="aa-cart-link" href="#">
                                    <span class="fa fa-shopping-basket"></span>
                                    <span class="aa-cart-title">SHOPPING CART</span>
                                    <span class="aa-cart-notify">0</span>
                                </a>
                                <div class="aa-cartbox-summary">
                                    <ul>
                                    </ul>
                                    <a class="aa-cartbox-checkout aa-primary-btn" href="/checkout">Checkout</a>
                                </div>
                            </div>
                            <!-- / cart box -->
                            <!-- search box -->
                            <div class="aa-search-box">
                                <form action="/all-product" method="get">
                                    <input type="text" name="keyword" id="" placeholder="Enter product name">
                                    <button type="submit"><span class="fa fa-search"></span></button>
                                </form>
                            </div>
                            <!-- / search box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / header bottom  -->
    </header>

