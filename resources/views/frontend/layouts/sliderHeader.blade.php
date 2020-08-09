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
{{--                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>--}}
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
