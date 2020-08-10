@extends('frontend.layouts.layout')


@section('content')
<!-- catg header banner section -->
@include('frontend.layouts.sliderHeader')
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="checkout">
    <div class="container">
        <div class="ttu fs2 tac mtb50 c1 fwb"> My cart</div>
        <div class="row">
            <div class="col-md-8 checkoutCart">
{{--                @if((is_array($cart) || is_object($cart))&&sizeof($cart)==0)--}}
{{--                    <div class="ttu fwb c1 tac fs13">Cart empty</div>--}}
{{--                @endif--}}
                @if (is_array($cart) || is_object($cart))
                @foreach($cart as $i=>$c)
                    <div class="bw1 bss bcd bra5 pa15 mb15 df cartProduct ">
                        <div class="w10 df tac aic ma jcsc pa10">
                            <a class="aa-remove-product crdh cp" idRemove = "{{$c->productId}}" ><span class="fa fa-times crdh"></span></a>
                        </div>
                        <div class="w10 df aic">
                            <div class="img-11 bgpti"
                                 style="background-image: url({{$c->product->thumbnail}})"></div>
                        </div>
                        <div class="w20 df tac aic ma jcsc pa10 fs08">
                            <div class="tac">{{$c->product->name}}</div>
                        </div>
                        <div class="w20 df tac aic ma jcsc pa5">
                            <div class="aa-prod-view-size mb15">
                                <div>Size:</div>
                                @foreach($c->product->size as$i=>$size)
                                    <a quantity="{{$size->pivot->quantity}}" class="sizeProduct size dib wh25 tac cp" tabindex="1" sizeId="{{$size->pivot->size_id}}">{{$size->pivot->quantity?$size->name:""}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="w10 df tac aic ma jcsc pa5">
                            <div class="aa-prod-quantity">
                                <form action="" class="formQuantity dn">
                                    <div class="mb10">
                                        <div class="dib">Kho:</div>
                                        <div class="sumQuantity dib ml5">10</div>
                                    </div>
                                    <input type="number" class="quantityProduct"
                                           style="width: 50px" value="1" min="1"
                                           max="">
                                </form>
                            </div>
                        </div>
                        <div class="w20 tac ma jcsc pa10 fs08 df fdc">
                            <div>Đơn giá:</div>
                            <div class="tac priceProduct">{{number_format($c->product->price)}}</div>
                        </div>
                        <div class="w20 tac aic ma jcsc pa10 fs08  df fdc">
                            <div class="tac ">Thành tiền: </div>
                            <div class="tac totalPrice"></div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
            <div class="col-md-4">
                <div class="bw1 bss bcd bra5 pa15 mb15 informationShip">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
@endsection
