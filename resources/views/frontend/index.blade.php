<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Home</title>
    <link href="{{asset("frontend/css/MyStyle.css")}}" rel="stylesheet">
    <!-- Font awesome -->
    <link href="{{asset("frontend/css/font-awesome.css")}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset("frontend/css/bootstrap.css")}}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset("frontend/css/jquery.smartmenus.bootstrap.css")}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset("frontend/css/jquery.simpleLens.css")}}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset("frontend/css/slick.css")}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset("frontend/css/nouislider.css")}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset("frontend/css/theme-color/default-theme.css")}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset("frontend/css/sequence-theme.modern-slide-in.css")}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset("frontend/css/style.css")}}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->


</head>
<body>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
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
                                <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                                {{--                                <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>--}}
                                <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
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
                            <a href="index.html">
                                <span class="fa fa-shopping-cart"></span>
                                <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                        <!-- <a href="index.html"><img src="{{asset("frontend/img/logo.jpg")}}" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="#">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">SHOPPING CART</span>
                                <span class="aa-cart-notify">2</span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img
                                                src="{{asset("frontend/img/woman-small-2.jpg")}}"
                                                alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img
                                                src="{{asset("frontend/img/woman-small-1.jpg")}}"
                                                alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                                        <span class="aa-cartbox-total-price">
                        $500
                      </span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Nhập tên sản phẩm">
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
<!-- / header section -->
<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        @foreach([
                            (object)['name'=>'Home','link'=>'/','sub'=>''],
                            (object)['name'=>'Sale','link'=>'#','sub'=>''],
                            (object)['name'=>'Category','link'=>'#','sub'=>$categories],
                            (object)['name'=>'Collection','link'=>'#','sub'=>$collections],
                            (object)['name'=>'Q&A','link'=>'#','sub'=>''],
                            (object)['name'=>'Contact','link'=>'#','sub'=>''],
                        ] as $i=>$obj)
                            <li><a href="{{$obj->link}}">{{$obj->name}}<span class="{{$obj->sub?'caret':'dn'}}"></span></a>
                                @if($obj->sub)
                                    <ul class="dropdown-menu">
                                    @foreach($obj->sub as $i=>$subMenu)
                                            <li><a href="{{strtolower($obj->name).'/'.$subMenu->id}}">{{$subMenu->name}}</a></li>
                                    @endforeach
                                    </ul>
                                @endif
                            </li>
{{--                            route('product', $category->id)--}}
                        @endforeach
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
<!-- Start slider -->

<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    @foreach($collections as $i => $obj)
                        <li>
                            <div class="seq-model">
                                <div class="img-925" style="background-image: url('{{$obj->thumbnail}}')"></div>
                                {{--                                <img data-seq src="{{$obj}}" alt="Wristwatch slide img"/>--}}
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 40% Off</span>
                                <h2 data-seq>{{$obj->name}}</h2>
                                {{--                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>
<!-- / slider -->
<!-- Start Promo section -->
<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <div class="aa-promo-left">
                                <div class="aa-promo-banner">
                                    <div class="img-11 bgpti"
                                         style="background-image: url({{$categories[0]->product[random_int(0,count($categories[0]->product)-1)]->thumbnail}})"></div>
                                    <div class="aa-prom-content">
                                        <div class="dib bgcf7 pa5" style="color: #ff6666">75% Off</div>
                                        <h4><a href="#">{{$categories[0]->name}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                @foreach($categories as $i => $category)
                                    @if($i>0&&$i<5)
                                        <div class="aa-single-promo-right">
                                            <div class="aa-promo-banner">
                                                <div class="img-11 bgpti"
                                                     style="background-image: url('{{$category->product[random_int(0,count($category->product)-1)]->thumbnail}}')"></div>
                                                <div class="aa-prom-content">
                                                    {{--                                                <div class="dib bgcf7 pa5" style="color: #ff6666">{{$obj->sale}}</div>--}}
                                                    <h4><a href="#">{{$category->name}}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Promo section -->
<!-- Products section -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                @foreach($categories as $i => $category)
                                    {{--                                    @if($i!=2&&$i!=5)--}}
                                    <li class="{{$i==1?"active":""}}"><a href="{{"#categoryHome".$category->id}}"
                                                                         data-toggle="tab">{{$category->name}}</a>
                                    </li>
                                    {{--                                    @endif--}}
                                @endforeach
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                @foreach($categories as $i => $category)
                                    {{--                                    @if($i!=2&&$i!=5)--}}
                                    <div class="tab-pane fade pb25 in {{$i==1?"active":""}}"
                                         id="categoryHome{{$category->id}}">
                                        <ul class="aa-product-catg" style="min-width: 100%">
                                            <!-- start single product item -->
                                            @foreach($category->product as $i => $product)
                                                @if($i<8)
                                                    <li class="">
                                                        <figure>
                                                            <a class="aa-product-img" href="#">
                                                                <div class="img-11 bgpti"
                                                                     style="background-image: url('{{$product->thumbnail}}')"></div>
                                                            </a>
                                                            <a class="aa-add-card-btn" href="#"><span
                                                                    class="fa fa-shopping-cart"></span>Add To
                                                                Cart</a>
                                                            <figcaption>
                                                                <h4 class="aa-product-title ttu"><a
                                                                        href="#">{{$product->name}}</a>
                                                                </h4>
                                                                <span
                                                                    class="aa-product-price">{{number_format(($product->price-(($product->price*30)/100)))}}</span>
                                                                <span class="aa-product-price"><del>{{number_format($product->price)}}</del></span>
                                                            </figcaption>
                                                        </figure>
                                                        <div class="aa-product-hvr-content">
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Add to Wishlist"><span
                                                                    class="fa fa-heart-o"></span></a>
                                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                                               title="Compare"><span class="fa fa-exchange"></span></a>
                                                            <a href="#" data-toggle2="tooltip" data-placement="top"
                                                               title="Quick View" data-toggle="modal"
                                                               data-target="#product-modal-home{{$product->id}}"><span
                                                                    class="fa fa-search"></span></a>
                                                        </div>
                                                        <!-- product badge -->
                                                        <span
                                                            class="aa-badge aa-sale"
                                                            href="#">SALE!</span>
                                                        {{--                                                            <span--}}
                                                        {{--                                                                class="aa-badge {{$product->status=='SALE!'?"aa-sale":($product->status=='HOT!'?"aa-hot":($product->status=='Sold Out!'?"aa-sold-out":""))}}"--}}
                                                        {{--                                                                href="#">{{$product->status}}</span>--}}
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                        <div class="tac"><a class="aa-browse-btn" href="#">Browse all Product <span
                                                    class="fa fa-long-arrow-right"></span></a></div>
                                    </div>
                                    {{--                                    @endif--}}
                                @endforeach

                            </div>
                            <!-- quick view modal -->
                            {{--                            product-modal-home{{$product->id}}--}}
                            @foreach($products as $i=>$product)
                                <div class="modal fade" id="product-modal-home{{$product->id}}" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">
                                                    &times;
                                                </button>
                                                <div class="row">
                                                    <!-- Modal view slider -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-slider dbi w1i">
                                                            <div class="simpleLens-gallery-container  dbi w1i"
                                                                 id="demo-1">
                                                                <div class="simpleLens-container  dbi w1i">
                                                                    <div
                                                                        class="simpleLens-big-image-container  dbi w1i">
                                                                        <a class="simpleLens-lens-image  dbi w1i ohi"
                                                                           style="height: 100% !important;"
                                                                           data-lens-image="{{$product->thumbnail}}">
                                                                            <img
                                                                                src="{{$product->thumbnail}}"
                                                                                class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="simpleLens-thumbnails-container  df fww ">
                                                                    @foreach($product->images as $i=>$image)
                                                                        <div url="{{$image->url}}"
                                                                             class="simpleLens-thumbnail-wrapper cp w25 pa3">
                                                                            <div
                                                                                class="img-56 bgpti simpleLens-big-image bw2 bss bcf bcdh"
                                                                                style="background-image: url('{{$image->url}}')"></div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <h3>T-Shirt</h3>
                                                            <div class="aa-price-block">
                                                                <span
                                                                    class="aa-product-view-price">{{number_format($product->price)}}</span>
                                                                <p class="aa-product-avilability">Avilability: <span>In stock</span>
                                                                </p>
                                                            </div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                                Officiis animi, veritatis quae repudiandae quod nulla
                                                                porro
                                                                quidem, itaque quis quaerat!</p>
                                                            <h4>Size</h4>
                                                            <div class="aa-prod-view-size">
                                                                <a href="#">S</a>
                                                                <a href="#">M</a>
                                                                <a href="#">L</a>
                                                                <a href="#">XL</a>
                                                            </div>
                                                            <div class="aa-prod-quantity">
                                                                <form action="">
                                                                    <select name="" id="">
                                                                        <option value="0" selected="1">1</option>
                                                                        <option value="1">2</option>
                                                                        <option value="2">3</option>
                                                                        <option value="3">4</option>
                                                                        <option value="4">5</option>
                                                                        <option value="5">6</option>
                                                                    </select>
                                                                </form>
                                                                <p class="aa-prod-category">
                                                                    Category: <a href="#">Polo T-Shirt</a>
                                                                </p>
                                                            </div>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Add To
                                                                    Cart</a>
                                                                <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                            @endforeach
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                &times;
                                            </button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                            <div class="simpleLens-container">
                                                                <div class="simpleLens-big-image-container">
                                                                    <a class="simpleLens-lens-image"
                                                                       data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                        <img
                                                                            src="{{asset("frontend/img/view-slider/medium/polo-shirt-1.png")}}"
                                                                            class="simpleLens-big-image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="simpleLens-thumbnails-container">
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                   data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                                                   data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                    <img
                                                                        src="{{asset("frontend/img/view-slider/thumbnail/polo-shirt-1.png")}}">
                                                                </a>
                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                   data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                                                   data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                    <img
                                                                        src="{{asset("frontend/img/view-slider/thumbnail/polo-shirt-3.png")}}">
                                                                </a>

                                                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                                                   data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                                                   data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                    <img
                                                                        src="{{asset("frontend/img/view-slider/thumbnail/polo-shirt-4.png")}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal view content -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-content">
                                                        <h3>T-Shirt</h3>
                                                        <div class="aa-price-block">
                                                            <span class="aa-product-view-price">$34.99</span>
                                                            <p class="aa-product-avilability">Avilability: <span>In stock</span>
                                                            </p>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Officiis animi, veritatis quae repudiandae quod nulla porro
                                                            quidem, itaque quis quaerat!</p>
                                                        <h4>Size</h4>
                                                        <div class="aa-prod-view-size">
                                                            <a href="#">S</a>
                                                            <a href="#">M</a>
                                                            <a href="#">L</a>
                                                            <a href="#">XL</a>
                                                        </div>
                                                        <div class="aa-prod-quantity">
                                                            <form action="">
                                                                <select name="" id="">
                                                                    <option value="0" selected="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                </select>
                                                            </form>
                                                            <p class="aa-prod-category">
                                                                Category: <a href="#">Polo T-Shirt</a>
                                                            </p>
                                                        </div>
                                                        <div class="aa-prod-view-bottom">
                                                            <a href="#" class="aa-add-to-cart-btn"><span
                                                                    class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                            <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- / quick view modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Products section -->
<!-- banner section -->
<section id="aa-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-banner-area">
                        <a href="#"><img
                                src="{{asset("https://hangthungtrangsing.com/wp-content/uploads/2020/07/banner_cover1-1892x690_optimized-1_optimized-1892x689.jpg")}}"
                                alt="fashion banner img"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- popular section -->
<section id="aa-popular-category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-popular-category-area">
                        <!-- start prduct navigation -->
                        <ul class="nav nav-tabs aa-products-tab">
                            <li class="active"><a href="#popular" data-toggle="tab">Sản phẩm nổi bật</a></li>
                            {{--                            <li><a href="#featured" data-toggle="tab">Featured</a></li>--}}
                            {{--                            <li><a href="#latest" data-toggle="tab">Latest</a></li>--}}
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Start men popular category -->
                            <div class="tab-pane fade in active" id="popular">
                                <ul class="aa-product-catg aa-popular-slider">
                                    <!-- start single product item -->
                                    @foreach($products as $i=>$product)
                                        @if($product->highlight==1)
                                            <li class="">
                                                <figure>
                                                    <a class="aa-product-img" href="#">
                                                        <div class="img-11 bgpti"
                                                             style="background-image: url('{{$product->thumbnail}}')"></div>
                                                    </a>
                                                    <a class="aa-add-card-btn" href="#"><span
                                                            class="fa fa-shopping-cart"></span>Add To
                                                        Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title ttu"><a
                                                                href="#">{{$product->name}}</a>
                                                        </h4>
                                                        <span
                                                            class="aa-product-price">{{number_format(($product->price-(($product->price*10)/100)))}}</span>
                                                        <span class="aa-product-price"><del>{{number_format($product->price)}}</del></span>
                                                    </figcaption>
                                                </figure>
                                                <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Wishlist"><span
                                                            class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top"
                                                       title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top"
                                                       title="Quick View" data-toggle="modal"
                                                       data-target="#quick-view-modal"><span
                                                            class="fa fa-search"></span></a>
                                                </div>
                                                <!-- product badge -->
                                                <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                {{--                                                            <span--}}
                                                {{--                                                                class="aa-badge {{$product->status=='SALE!'?"aa-sale":($product->status=='HOT!'?"aa-hot":($product->status=='Sold Out!'?"aa-sold-out":""))}}"--}}
                                                {{--                                                                href="#">{{$product->status}}</span>--}}
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <a class="aa-browse-btn" href="#">Browse all Product <span
                                        class="fa fa-long-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / popular section -->
<!-- Support section -->
<section id="aa-support">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-support-area row">
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-truck"></span>
                            <h4>FREE SHIPPING</h4>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-clock-o"></span>
                            <h4>30 DAYS MONEY BACK</h4>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                        </div>
                    </div>
                    <!-- single support -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="aa-support-single">
                            <span class="fa fa-phone"></span>
                            <h4>SUPPORT 24/7</h4>
                            <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Support section -->
<!-- Testimonial -->
<section id="aa-testimonial"
         style="background-image: url('https://thoitrangnutrungnien.com/wp-content/uploads/2018/09/Banner-hinh-2-1024x405.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-testimonial-area">
                    <ul class="aa-testimonial-slider">
                        <!-- single slide -->
                        <li>
                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="{{asset("frontend/img/testimonial-img-2.jpg")}}"
                                     alt="testimonial img">

                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui.</p>
                                <div class="aa-testimonial-info">
                                    <p>Allison</p>
                                    <span>Designer</span>
                                    <a href="#">Dribble.com</a>
                                </div>
                            </div>
                        </li>
                        <!-- single slide -->
                        <li>
                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="{{asset("frontend/img/testimonial-img-1.jpg")}}"
                                     alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui.</p>
                                <div class="aa-testimonial-info">
                                    <p>KEVIN MEYER</p>
                                    <span>CEO</span>
                                    <a href="#">Alphabet</a>
                                </div>
                            </div>
                        </li>
                        <!-- single slide -->
                        <li>
                            <div class="aa-testimonial-single">
                                <img class="aa-testimonial-img" src="{{asset("frontend/img/testimonial-img-3.jpg")}}"
                                     alt="testimonial img">
                                <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui!consectetur adipisicing elit. Sunt distinctio omnis
                                    possimus, facere, quidem qui.</p>
                                <div class="aa-testimonial-info">
                                    <p>Luner</p>
                                    <span>COO</span>
                                    <a href="#">Kinatic Solution</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Testimonial -->
<!-- Client Brand -->
<section id="aa-client-brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-brand-area">
                    <ul class="aa-client-brand-slider">
                        @foreach($collections as $i =>$collection )
                            <li><a href="#" class="fwb ttu">{{$collection->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Client Brand -->

<!-- Subscribe section -->
<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h3>Subscribe our newsletter </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                    <form action="" class="aa-subscribe-form">
                        <input type="email" name="" id="" placeholder="Enter your Email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->

<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <h3>Main Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Our Products</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Knowledge Base</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Discount</a></li>
                                            <li><a href="#">Special Offer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Useful Links</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Suppliers</a></li>
                                            <li><a href="#">FAQ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Contact Us</h3>
                                        <address>
                                            <p> 25 Astor Pl, NY 10003, USA</p>
                                            <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                                            <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                                        </address>
                                        <div class="aa-footer-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-youtube"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Login or Register</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me
                    </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{asset("frontend/js/main.js")}}"></script>
{{--<script src="{{asset("frontend/js/main.js")}}"></script>--}}
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset("frontend/js/bootstrap.js")}}"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{asset("frontend/js/jquery.smartmenus.js")}}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{asset("frontend/js/jquery.smartmenus.bootstrap.js")}}"></script>
<!-- To Slider JS -->
<script src="{{asset("frontend/js/sequence.js")}}"></script>
<script src="{{asset("frontend/js/sequence-theme.modern-slide-in.js")}}"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{asset("frontend/js/jquery.simpleGallery.js")}}"></script>
<script type="text/javascript" src="{{asset("frontend/js/jquery.simpleLens.js")}}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{asset("frontend/js/slick.js")}}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{asset("frontend/js/nouislider.js")}}"></script>
<!-- Custom js -->
<script src="{{asset("frontend/js/custom.js")}}"></script>

</body>
</html>
