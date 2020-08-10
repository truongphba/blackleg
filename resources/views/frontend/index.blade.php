@extends('frontend.layouts.layout')

@section('style')
    <style>
        .img-925{
            background-size: 50% 100%;
            background-attachment: fixed;
        }
        .seq-model{
            background-color: rgba(187,187,187,0.2)
        }
    </style>
@endsection
@section('content')
    <!-- Start slider -->

@include('frontend.layouts.sliderHeader')

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
{{--                                            <div class="dib bgcf7 pa5" style="color: #ff6666">75% Off</div>--}}
                                            <h4><a href="/all-product?cate={{$categories[0]->id}}">{{$categories[0]->name}}</a>
                                            </h4>
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
                                                        <h4><a href="/all-product?cate={{$category->id}}">{{$category->name}}</a>
                                                        </h4>
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
                                        <div class="tab-pane fade pb25 in {{$i==1?"active":""}}"
                                             id="categoryHome{{$category->id}}">
                                            <ul class="aa-product-catg" style="min-width: 100%">
                                                <!-- start single product item -->
                                                @foreach($category->product as $i => $product)
                                                    @if($i<8)
                                                        <li class="">
                                                            <figure>
                                                                <a class="aa-product-img" href="product/{{$product->id}}">
                                                                    <div class="img-11 bgpti"
                                                                         style="background-image: url('{{$product->thumbnail}}')"></div>
                                                                </a>
                                                                <a class="aa-add-card-btn cp" productId = "{{$product->id}}"><span
                                                                        class="fa fa-shopping-cart"></span>Add To
                                                                    Cart</a>
                                                                <figcaption>
                                                                    <h4 class="aa-product-title ttu"><a
                                                                            href="#">{{$product->name}}</a>
                                                                    </h4>
                                                                    <span
                                                                        class="aa-product-price">{{number_format($product->price)}}</span>
                                                                </figcaption>
                                                            </figure>
                                                            <div class="aa-product-hvr-content">
                                                                <a href="#" data-toggle2="tooltip" data-placement="top"
                                                                   title="Quick View" data-toggle="modal"
                                                                   data-target="#product-modal-home{{$product->id}}"><span
                                                                        class="fa fa-search"></span></a>
                                                            </div>
                                                            <!-- product badge -->
                                                            <span
                                                                class="aa-badge {{$product->highlight?"aa-hot":"dn"}}"
                                                                href="#">HOT!</span>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <div class="tac"><a class="aa-browse-btn" href="/all-product?cate={{$category->id}}">Browse
                                                    all Product <span
                                                        class="fa fa-long-arrow-right"></span></a></div>
                                        </div>
                                        {{--                                    @endif--}}
                                    @endforeach

                                </div>
                                <!-- quick view modal -->
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

                                                                    <div
                                                                        class="simpleLens-thumbnails-container  df fww ">
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
                                                                <h3>{{$product->name}}</h3>
                                                                <div class="aa-price-block">
                                                                <span
                                                                    class="aa-product-view-price">{{number_format($product->price)}}</span>
                                                                    <p class="aa-product-avilability">Avilability:
                                                                        <span>In stock</span>
                                                                    </p>
                                                                </div>
                                                                <p>{!! $product->description?$product->description:"Đang cập nhật!!" !!}</p>
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
                                                                        href="/all-product?cate={{$product->category->id}}">{{$product->category->name}}</a>
                                                                </p>
                                                                <div class="aa-prod-view-bottom">
                                                                    <a class="aa-add-to-cart-btn " productId="{{$product->id}}"><span
                                                                            class="fa fa-shopping-cart"></span>Add To
                                                                        Cart</a>
                                                                    <a href="product/{{$product->id}}"
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
                                                        <a class="aa-product-img" href="product/{{$product->id}}">
                                                            <div class="img-11 bgpti"
                                                                 style="background-image: url('{{$product->thumbnail}}')"></div>
                                                        </a>
                                                        <a class="aa-add-card-btn cp" productId = "{{$product->id}}"><span
                                                                class="fa fa-shopping-cart"></span>Add To
                                                            Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title ttu"><a
                                                                    href="#">{{$product->name}}</a>
                                                            </h4>
                                                            <span
                                                                class="aa-product-price">{{number_format($product->price)}}</span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                           title="Quick View" data-toggle="modal"
                                                           data-target="#product-modal-home{{$product->id}}"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <!-- product badge -->
                                                    <span class="aa-badge aa-hot" href="#">HOT!</span>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <a class="aa-browse-btn" href="/all-product">Browse all Product <span
                                            class="fa fa-long-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

    <section id="aa-support">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-support-area row">
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-truck"></span>
                                <h4>DELIVERY SERVICE</h4>
                                <P>Fast shipping, various payment methods</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-clock-o"></span>
                                <h4>RETURN AND EXCHANGE POLICY</h4>
                                <P>Free return and exchange within 30 days</P>
                            </div>
                        </div>
                        <!-- single support -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="aa-support-single">
                                <span class="fa fa-phone"></span>
                                <h4>CUSTOMER SERVICE</h4>
                                <P>24/7 customer support and advice</P>
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
                            @foreach($qas as $i=>$qa)
                                @if($i<=12)
                                    <li>
                                        <div class="aa-testimonial-single">
                                            <img class="aa-testimonial-img"
                                                 src="{{["https://cdn.24h.com.vn/upload/3-2019/images/2019-09-15/1568562240-300-a--8--1568544356-width650height866.jpg",
                                                 "https://2sao.vietnamnetjsc.vn/images/2020/03/14/12/30/hot-girl-1.jpg",
                                                 "https://cdn.24h.com.vn/upload/2-2020/images/2020-04-24/1587664061-778-nu-sinh-viet-19-tuoi-mac-ao-sieu-tao-bao-94270777_718462938899238_2452930847234326528_n-1587612005-width774height960.jpg",
                                                 "https://vnn-imgs-a1.vgcloud.vn/cdn.24h.com.vn/upload/1-2020/images/2020-03-16/1584324285-49-anh-1-1584088794-width650height638.jpg",
                                                 "https://nguoinoitieng.tv/images/nnt/97/0/bcjl.jpg",
                                                 "https://ttol.vietnamnetjsc.vn/images/2019/11/17/14/07/ho-girl-banh-trang-tron-3.jpg",
                                                 "https://sohanews.sohacdn.com/2020/4/11/2-15865649222911381986719.jpg",
                                                 "https://nguoinoitieng.tv/images/nnt/99/0/bdti.jpg",
                                                 "https://mcnewsmd1.keeng.net/netnews/archive/images/2019112710/tinngan_103107_358328798_0wap_320.jpg",
                                                 "https://ttol.vietnamnetjsc.vn/images/2019/04/19/09/40/nu-sinh-xinh-dep-1.jpg",
                                                 "https://nghesiviet.vn/storage/files/7/tramanh/tram-anh.jpg",
                                                 "https://static2.yan.vn/YanNews/2167221/201909/nhan-sac-hoi-hotgirl-viet-noi-tieng-mxh-trung-quoc-22da3c9c.jpg",
                                              ][$i]}}"
                                                 alt="testimonial img">
                                            <span class="fa fa-quote-left aa-testimonial-quote"></span>
                                            <p><b>Question: </b>{!!$qa->quest !!}</p>
                                            <p><b>Answer: </b>{!! $qa->answer !!}</p>
                                            {{--                                        <div class="aa-testimonial-info">--}}
                                            {{--                                            <p>Allison</p>--}}
                                            {{--                                            <span>Designer</span>--}}
                                            {{--                                            <a href="#">Dribble.com</a>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                    </li>
                            @endif

                        @endforeach
                        <!-- single slide  swar-->
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
                                <li><a href="collection/{{$collection->id}}" class="fwb ttu">{{$collection->name}}</a>
                                </li>
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
@endsection
