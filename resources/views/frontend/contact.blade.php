@extends('frontend.layouts.layout')
@section('content')
    <!-- catg header banner section -->
{{--    <section id="aa-catg-head-banner">--}}
{{--        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">--}}
{{--        <div class="aa-catg-head-banner-area">--}}
{{--            <div class="container">--}}
{{--                <div class="aa-catg-head-banner-content">--}}
{{--                    <h2>Contact</h2>--}}
{{--                    <ol class="breadcrumb">--}}
{{--                        <li><a href="index.html">Home</a></li>--}}
{{--                        <li class="active">Contact</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- / catg header banner section -->
    <!-- start contact section -->
    <section id="aa-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-contact-area">
                        <div class="aa-contact-top">
                            <h2>We are wating to assist you..</h2>
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quos.</p>--}}
                        </div>
                        <!-- contact map -->
                        <div class="aa-contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.096814183569!2d105.78009371486897!3d21.028811885998387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1596973471078!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <!-- Contact address -->
                        <div class="aa-contact-address">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="aa-contact-address-left">
                                        <form class="comments-form contact-form" action="/contact" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Your Name" name="name" class="form-control">
                                                        @error('name')
                                                        <span style="color: red">*{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" placeholder="Email" name="email" class="form-control">
                                                        @error('email')
                                                        <span style="color: red">*{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Title" name="title" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Phone" name="phone" class="form-control">
                                                        @error('phone')
                                                        <span style="color: red">*{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" placeholder="Message" name="message"></textarea>
                                            </div>
                                            <button class="aa-secondary-btn">Send</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="aa-contact-address-right">
                                        <address>
                                            <h4>DailyShop</h4>
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum modi dolor facilis! Nihil error, eius.</p>--}}
                                            <p><span class="fa fa-home"></span>Tôn Thất Thuyết, Cầu Giấy, Hà Nội</p>
                                            <p><span class="fa fa-phone"></span>0989859398</p>
                                            <p><span class="fa fa-envelope"></span>Email: dailyshop@gmail.com</p>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
