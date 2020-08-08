@extends('frontend.layouts.layout')
@section('content')
    <body class="productPage">
    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img style="width: 1920px; height: 600px" src="{{$collection->thumbnail}}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2>Collection</h2>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">{{$collection->name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
                        <div class="aa-product-catg-head">
                            <div class="aa-product-catg-head-left">
                                <form action="" class="aa-sort-form">
                                    <label for="">Sort by</label>
                                    <select name="">
                                        <option value="1" selected="Default">Default</option>
                                        <option value="2">name</option>
                                        <option value="3">Price</option>
                                        <option value="4">Date</option>
                                    </select>
                                </form>
                                <form action="" class="aa-show-form">
                                    <label for="">Show</label>
                                    <select name="">
                                        <option value="1" selected="12">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select>
                                </form>
                            </div>
                            <div class="aa-product-catg-head-right">
                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
                            </div>
                        </div>
                        <div class="aa-product-catg-body">
                            <ul class="aa-product-catg">
                            @foreach($collection->product as $item)
                                <!-- start single product item -->
                                    <li class="">
                                        <figure>
                                            <a class="aa-product-img" href="{{route('productDetail', $item->id)}}">
                                                <div class="img-11 bgpti"
                                                     style="background-image: url('{{$item->thumbnail}}')"></div>
                                            </a>
                                            <a class="aa-add-card-btn" href="#"><span
                                                    class="fa fa-shopping-cart"></span>Add To
                                                Cart</a>
                                            <figcaption>
                                                <h4 class="aa-product-title ttu"><a
                                                        href="#">{{$item->name}}</a>
                                                </h4>
                                                <span
                                                    class="aa-product-price">{{number_format($item->price)}} VND</span>
                                            </figcaption>
                                        </figure>
                                        <div class="aa-product-hvr-content">
                                            <a href="#" data-toggle="tooltip" data-placement="top"
                                               title="Add to Wishlist"><span
                                                    class="fa fa-heart-o"></span></a>
                                            <a href="#" data-toggle2="tooltip" data-placement="top"
                                               title="Quick View" data-toggle="modal"
                                               data-target="#quick-view-modal{{$item->id}}"><span
                                                    class="fa fa-search"></span></a>
                                        </div>
                                        <!-- product badge -->
                                        @if($item->highlight == 1)
                                            <span class="aa-badge aa-hot" href="#">HOT!</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
{{--                            <div class="aa-product-catg-pagination pagination">--}}
{{--                                {{$product->links()}}--}}
{{--                            </div>--}}
                            <!-- quick view modal -->
                            @foreach($collection->product as $item)
                                <div class="modal fade" id="quick-view-modal{{$item->id}}" tabindex="-1"
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
                                                                           data-lens-image="{{$item->thumbnail}}">
                                                                            <img
                                                                                src="{{$item->thumbnail}}"
                                                                                class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="simpleLens-thumbnails-container  df fww ">
                                                                    @foreach($item->images as $i=>$image)
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
                                                            <h3>{{$item->name}}</h3>
                                                            <div class="aa-price-block">
                                                                <span class="aa-product-view-price">{{number_format($item->price)}} VND</span>
                                                                <p class="aa-product-avilability">Avilability: <span>In stock</span>
                                                                </p>
                                                            </div>
                                                            <p>{!! $item->detail !!}</p>
                                                            <h4>Size</h4>
                                                            <div class="aa-prod-view-size mb15">
                                                                @foreach($item->size as $size)
                                                                    <a quantity="{{$size->pivot->quantity}}"
                                                                       class="sizeProduct size dib wh25 tac"
                                                                       href="#">{{$size->pivot->quantity?$size->name:""}}</a>
                                                                @endforeach
                                                            </div>
                                                            <div class="aa-prod-quantity">
                                                                <form action="" class="formQuantity dn">
                                                                    <div class="mb10">
                                                                        <div class="dib">Kho:</div>
                                                                        <div class="sumQuantity dib ml10">10</div>
                                                                    </div>
                                                                    <input type="number" class="quantityProduct"
                                                                           style="width: 50px" value="1" min="1"
                                                                           max="">
                                                                </form>
                                                            </div>
                                                            <p class="aa-prod-category">
                                                                Category: <a
                                                                    href="category/{{$item->category->id}}">{{$item->category->name}}</a>
                                                            </p>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Add To
                                                                    Cart</a>
                                                                <a href="{{route('productDetail', $item->id)}}"
                                                                   class="aa-add-to-cart-btn">View Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- / quick view modal -->
                        @endforeach
                        <!-- / quick view modal -->
                        </div>
                        {{--                    <div class="aa-product-catg-pagination">--}}
                        {{--                        <nav>--}}
                        {{--                            <ul class="pagination">--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#" aria-label="Previous">--}}
                        {{--                                        <span aria-hidden="true">&laquo;</span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                                <li><a href="#">1</a></li>--}}
                        {{--                                <li><a href="#">2</a></li>--}}
                        {{--                                <li><a href="#">3</a></li>--}}
                        {{--                                <li><a href="#">4</a></li>--}}
                        {{--                                <li><a href="#">5</a></li>--}}
                        {{--                                <li>--}}
                        {{--                                    <a href="#" aria-label="Next">--}}
                        {{--                                        <span aria-hidden="true">&raquo;</span>--}}
                        {{--                                    </a>--}}
                        {{--                                </li>--}}
                        {{--                            </ul>--}}
                        {{--                        </nav>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Collection</h3>
                            <ul class="aa-catg-nav">
                                @foreach($collections as $collec)
                                    <li><a href="{{route('collection', $collec->id)}}">{{$collec->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- single sidebar -->
                    {{--                    <div class="aa-sidebar-widget">--}}
                    {{--                        <h3>Tags</h3>--}}
                    {{--                        <div class="tag-cloud">--}}
                    {{--                            <a href="#">Fashion</a>--}}
                    {{--                            <a href="#">Ecommerce</a>--}}
                    {{--                            <a href="#">Shop</a>--}}
                    {{--                            <a href="#">Hand Bag</a>--}}
                    {{--                            <a href="#">Laptop</a>--}}
                    {{--                            <a href="#">Head Phone</a>--}}
                    {{--                            <a href="#">Pen Drive</a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Shop By Price</h3>
                            <!-- price range -->
                            <div class="aa-sidebar-price-range">
                                <form id="filter-price" action="#" method="get">
                                    <div id="skipstep"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
                                    <span id="skip-value-lower" class="example-val"></span>
                                    <span id="skip-value-upper" class="example-val"></span>
                                    <input type="hidden" id="min_price" name="min_price">
                                    <input type="hidden" id="max_price" name="max_price">
                                    <button class="aa-filter-btn" type="submit">Filter</button>
                                </form>
                            </div>
                        </div>
                        <!-- single sidebar -->
                    {{--                    <div class="aa-sidebar-widget">--}}
                    {{--                        <h3>Shop By Color</h3>--}}
                    {{--                        <div class="aa-color-tag">--}}
                    {{--                            <a class="aa-color-green" href="#"></a>--}}
                    {{--                            <a class="aa-color-yellow" href="#"></a>--}}
                    {{--                            <a class="aa-color-pink" href="#"></a>--}}
                    {{--                            <a class="aa-color-purple" href="#"></a>--}}
                    {{--                            <a class="aa-color-blue" href="#"></a>--}}
                    {{--                            <a class="aa-color-orange" href="#"></a>--}}
                    {{--                            <a class="aa-color-gray" href="#"></a>--}}
                    {{--                            <a class="aa-color-black" href="#"></a>--}}
                    {{--                            <a class="aa-color-white" href="#"></a>--}}
                    {{--                            <a class="aa-color-cyan" href="#"></a>--}}
                    {{--                            <a class="aa-color-olive" href="#"></a>--}}
                    {{--                            <a class="aa-color-orchid" href="#"></a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- single sidebar -->
                    {{--                    <div class="aa-sidebar-widget">--}}
                    {{--                        <h3>Recently Views</h3>--}}
                    {{--                        <div class="aa-recently-views">--}}
                    {{--                            <ul>--}}
                    {{--                                <li>--}}
                    {{--                                    <a href="#" class="aa-cartbox-img"><img style="object-fit: contain !important;" alt="img" src=""></a>--}}
                    {{--                                    <div class="aa-cartbox-info">--}}
                    {{--                                        <h4><a href="#"></a>nmame</h4>--}}
                    {{--                                        <p>1 x $250</p>--}}
                    {{--                                    </div>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Top Rated Products</h3>
                            <div class="aa-recently-views">
                                <ul>
                                    @foreach($categories as $cate)
                                        @foreach($cate->product as $product)
                                            @if($product->highlight == 1)
                                                <li>
                                                    <a href="{{route('productDetail', $product->id)}}"
                                                       class="aa-cartbox-img"><img
                                                            style="object-fit: contain !important;" alt="img"
                                                            src="{{$product->thumbnail}}"></a>
                                                    <div class="aa-cartbox-info">
                                                        <h4>
                                                            <a href="{{route('productDetail', $product->id)}}">{{$product->name}}</a>
                                                        </h4>
                                                        <p style="color: red">{{number_format($product->price)}} VND</p>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </section>
    <!-- / product category -->


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
    </body>
@endsection

