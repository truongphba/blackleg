@extends('frontend.layouts.layout')
@section('content')
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img style="width: 1920px; height: 600px" src="{{$product->category->thumbnail}}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>{{$product->name}}</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('product', $product->category_id)}}">{{$product->category->name}}</a></li>
                    <li class="active">{{$product->name}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- product category -->
<section id="aa-product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-product-details-area">
                    <div class="aa-product-details-content">
                        <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="aa-product-view-slider">
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
                                                @foreach($product->images as $image)
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
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="aa-product-view-content">
                                    <h3>{{$product->name}}</h3>
                                    <div class="aa-price-block">
                                        <span class="aa-product-view-price" style="color: red">{{number_format($product->price)}} VND</span>
                                        @if($product->status == 1)
                                            <p class="aa-product-avilability">Avilability: <span style="color: red">In stock</span>
                                            </p>
                                        @else
                                            <p class="aa-product-avilability">Avilability: <span style="color: red">Out of stock</span>
                                            </p>
                                        @endif
                                    </div>
                                    <p>{!! $product->detail !!}</p>
                                    <h4>Size</h4>
                                    <div class="aa-prod-view-size mb15">
                                        @foreach($product->size as $size)
                                            <a quantity="{{$size->pivot->quantity}}"
                                               class="sizeProduct size dib tac"
                                               tabindex="0">{{$size->pivot->quantity?$size->name:""}}</a>
                                        @endforeach
                                    </div>
{{--                                    <div class="aa-prod-quantity">--}}
                                        <form action="" class="formQuantity dn">
                                            <div class="mb10">
                                                <div class="dib">Kho:</div>
                                                <div class="sumQuantity dib ml10">10</div>
                                            </div>
                                            <input type="number" class="quantityProduct"
                                                   style="width: 50px" value="1" min="1"
                                                   max="">
                                        </form>
{{--                                    </div>--}}
                                    <p class="aa-prod-category">
                                        Category: <a style="color: red"
                                            href="category/{{$product->category->id}}">{{$product->category->name}}</a>
                                    </p>
                                    <div class="aa-prod-view-bottom">
                                        <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                                        <a class="aa-add-to-cart-btn" href="#">Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-product-details-bottom">
                        <ul class="nav nav-tabs" id="myTab2">
                            <li><a href="#description" data-toggle="tab">Description</a></li>
                            <li><a href="#review" data-toggle="tab">Reviews</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="description">
                                @if(strlen($product->description) <= 0)
                                    <p style="color: red">Đang cập nhập !</p>
                                @endif
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div class="tab-pane fade " id="review">
                                <div class="aa-product-review-area">
                                    <h4>2 Reviews for T-Shirt</h4>
                                    <ul class="aa-review-nav">
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/testimonial-img-3.jpg"
                                                             alt="girl image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span>
                                                    </h4>
                                                    <div class="aa-product-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" src="img/testimonial-img-3.jpg"
                                                             alt="girl image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span>
                                                    </h4>
                                                    <div class="aa-product-rating">
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star-o"></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h4>Add a review</h4>
                                    <div class="aa-your-rating">
                                        <p>Your Rating</p>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                    </div>
                                    <!-- review form -->
                                    <form action="" class="aa-review-form">
                                        <div class="form-group">
                                            <label for="message">Your Review</label>
                                            <textarea class="form-control" rows="3" id="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="example@gmail.com">
                                        </div>

                                        <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related product -->
                    <div class="aa-product-related-item">
                        <h3>Related Products</h3>
                        <ul class="aa-product-catg aa-related-item-slider">
                            <!-- start single product item -->
                            @foreach($products as $item)
                                @if($item->category_id == $product->category_id && $item->id != $product->id)
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
                                                <span class="aa-product-price">{{number_format($item->price)}} VND</span>
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
                                        {{--                                                            <span--}}
                                        {{--                                                                class="aa-badge {{$product->status=='SALE!'?"aa-sale":($product->status=='HOT!'?"aa-hot":($product->status=='Sold Out!'?"aa-sold-out":""))}}"--}}
                                        {{--                                                                href="#">{{$product->status}}</span>--}}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <!-- quick view modal -->
                        @foreach($products as $product)
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
                                                                    <a class="simpleLens-lens-image dbi w1i ohi"
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
                                                                   tabindex="1">{{$size->pivot->quantity?$size->name:""}}</a>
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
                                                            <a href="{{route('productDetail', $product->id)}}" class="aa-add-to-cart-btn">View Details</a>
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
@endsection
