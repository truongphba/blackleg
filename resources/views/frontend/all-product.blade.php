@extends('frontend.layouts.layout')
@section('content')
    <body class="productPage">
    <!-- catg header banner section -->
    <!-- Start slider -->
{{--    <section id="aa-slider">--}}
{{--        <div class="aa-slider-area">--}}
{{--            <div id="sequence" class="seq">--}}
{{--                <div class="seq-screen">--}}
{{--                    <ul class="seq-canvas">--}}
{{--                        @foreach($collections as $i => $obj)--}}
{{--                            <li>--}}
{{--                                <div class="seq-model">--}}
{{--                                    <div class="img-925" style="background-image: url('{{$obj->thumbnail}}')"></div>--}}
{{--                                    --}}{{--                                <img data-seq src="{{$obj}}" alt="Wristwatch slide img"/>--}}
{{--                                </div>--}}
{{--                                <div class="seq-title">--}}
{{--                                    <span data-seq>Save Up to 40% Off</span>--}}
{{--                                    <h2 data-seq>{{$obj->name}}</h2>--}}
{{--                                    --}}{{--                            <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>--}}
{{--                                    <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <!-- slider navigation btn -->--}}
{{--                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">--}}
{{--                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>--}}
{{--                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>--}}
{{--                </fieldset>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- / slider -->
    <!-- / catg header banner section -->

    <!-- product category -->
    <section id="aa-product-category">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                    <div class="aa-product-catg-content">
{{--                        <div class="aa-product-catg-head">--}}
{{--                            <div class="aa-product-catg-head-left">--}}
{{--                                <form action="/all-product" method="get" id="product_form" class="aa-sort-form">--}}
{{--                                    <label for="">Sort by</label>--}}
{{--                                    <select name="sort" id="select">--}}
{{--                                        <option value="0" selected="Default">All</option>--}}
{{--                                        <option value="name-desc">Name Decrease</option>--}}
{{--                                        <option value="name-asc">Name Ascending</option>--}}
{{--                                        <option value="price-desc">Price Decrease</option>--}}
{{--                                        <option value="price-asc">Price Ascending</option>--}}
{{--                                        <option value="date">Date</option>--}}
{{--                                    </select>--}}
{{--                                </form>--}}
{{--                                <form action="" class="aa-show-form">--}}
{{--                                    <label for="">Show</label>--}}
{{--                                    <select name="">--}}
{{--                                        <option value="1" selected="12">12</option>--}}
{{--                                        <option value="2">24</option>--}}
{{--                                        <option value="3">36</option>--}}
{{--                                    </select>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="aa-product-catg-head-right">--}}
{{--                                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>--}}
{{--                                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="aa-product-catg-body">
{{--                            @if(sizeof($list)>0)--}}
                            <ul class="aa-product-catg">
                            @foreach($list as $item)
                                <!-- start single product item -->
                                    <li class="">
                                        <figure>
                                            <a class="aa-product-img" href="/product/{{$item->id}}">
                                                <div class="img-11 bgpti"
                                                     style="background-image: url('{{$item->photos[0]}}')"></div>
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
{{--                            @endif--}}
                            <div class="aa-product-catg-pagination pagination">
                                {{$list->links()}}
                            </div>
                            <!-- quick view modal -->
                            @foreach($list as $product)
                                <div class="modal fade" id="quick-view-modal{{$product->id}}" tabindex="-1"
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
                                                                           data-lens-image="{{$product->photos[0]}}">
                                                                            <img
                                                                                src="{{$product->photos[0]}}"
                                                                                class="simpleLens-big-image">
                                                                        </a>
                                                                    </div>
                                                                </div>

                                                                <div class="simpleLens-thumbnails-container  df fww ">
                                                                    @foreach($product->photos as $i => $photo)
                                                                        @if($i > 0)
                                                                        <div url="{{$photo}}"
                                                                             class="simpleLens-thumbnail-wrapper cp w25 pa3">
                                                                            <div
                                                                                class="img-56 bgpti simpleLens-big-image bw2 bss bcf bcdh"
                                                                                style="background-image: url('{{$photo}}')"></div>
                                                                        </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view content -->
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <div class="aa-product-view-content">
                                                            <h3>{{$product->name}}</h3>
                                                            <div class="aa-price-block">
                                                                <span class="aa-product-view-price">{{number_format($product->price)}} VND</span>
                                                                <p class="aa-product-avilability">Avilability: <span>In stock</span>
                                                                </p>
                                                            </div>
                                                            <p>{!! $product->detail !!}</p>
                                                            <h4>Size</h4>
                                                            <div class="aa-prod-view-size mb15">
                                                                @foreach($product->size as $size)
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
                                                                    href="category/{{$product->category->id}}">{{$product->category->name}}</a>
                                                            </p>
                                                            <div class="aa-prod-view-bottom">
                                                                <a href="#" class="aa-add-to-cart-btn"><span
                                                                        class="fa fa-shopping-cart"></span>Add To
                                                                    Cart</a>
                                                                <a href="{{route('productDetail', $product->id)}}"
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

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                    <aside class="aa-sidebar">
                        <!-- single sidebar -->
                        <form action="/all-product" method="get" id="product_form">
                        <div class="aa-sidebar-widget">
                            <h3>Category</h3>
                            <select name="cate" class="form-control" id="categorySelect">
                                <option value="0">All</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $category_id ? 'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- single sidebar -->

                        <div class="aa-sidebar-widget">
                            <h3>Collection</h3>
                            <select name="collection" class="form-control" id="collectionSelect">
                                <option value="0">All</option>
                                @foreach($collections as $collection)
                                    <option value="{{$collection->id}}" {{$collection_id == $collection->id ? 'selected':''}}>{{$collection->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- single sidebar -->
                        <div class="aa-sidebar-widget">
                            <h3>Shop By Price</h3>
                            <!-- price range -->
                            <div class="aa-sidebar-price-range">
                                    <div id="skipstep"
                                         class="noUi-target noUi-ltr noUi-horizontal noUi-background"></div>
                                    <span id="skip-value-lower" class="example-val"></span>
                                    <span id="skip-value-upper" class="example-val"></span>
                                    <input type="hidden" id="min_price" name="min_price" value="{{isset($min_price)?$min_price:0}}">
                                    <input type="hidden" id="max_price" name="max_price" value="{{isset($max_price)?$max_price:2000000}}">
                                    <button class="aa-filter-btn" type="submit">Filter</button>

                            </div>
                        </div>
                        </form>
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
@section('script')
    <script>
        $('#product_form').change(function () {
            $(this).submit();
        })
    </script>
@endsection
