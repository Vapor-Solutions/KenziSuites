@extends('layouts.homelayout')

@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header-two></x-home.header-two>
    <section class="content-section no-spacing bg-kenzi text-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hotel-search">
                        <h6>ROOM SEARCH</h6>
                        <form id="booking-request-form">
                            <div class="form-group">
                                <label>Email </label>
                                <input type="text" name="email" placeholder="Enter your Email" />
                            </div>
                            <div class="form-group">
                                <label>Date Check-In </label>
                                <input type="text" placeholder="Check-In" name="check_in" data-toggle="datepicker"
                                    class="date" />
                                <i class="lni lni-calendar"></i>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <label>Date Check-Out</label>
                                <input type="text" placeholder="Check-Out" name="check_out" data-toggle="datepicker"
                                    class="date" />
                                <i class="lni lni-calendar"></i>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <label>Person </label>
                                <input type="number" name="pax" value="1" />
                                <small id="paxErrorMsg" class="text-danger"></small>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <label>&nbsp; </label>
                                <input type="submit" class="custom-button light" data-swiper-parallax="200"
                                    value="BOOK NOW !" />

                            </div>
                            <!-- end form-group -->
                        </form>
                    </div>
                    <!-- end hotel-search -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h6>WELCOME TO KENZI SUITES</h6>
                        <h2>We specialize in <br>
                            Providing Comfort and Luxury</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-6">
                    {!! File::get(public_path('/text/intro_content1.txt')) !!}
                </div>
                <!-- end col-6 -->
                @if (count(App\Models\Testimonial::all()) > 0)
                    <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1">
                        <div class="testimonial-box bottom">
                            <small><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                    class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                    class="lni lni-star-half"></i></small>
                            @php
                                $testimonial = App\Models\Testimonial::all()->last() ?? null;
                            @endphp
                            <h6 class="text-uppercase"><strong>{{ $testimonial?->client->name }}</strong></h6>
                            <p class="font-light">{{ $testimonial?->testimonial }}</p>
                            <a href="/testimonials" class="custom-button light">VIEW TESTIMONIALS</a>
                        </div>
                        <!-- end testimonial-box -->
                    </div>
                @endif
                <!-- end col-5 -->
                <div class="col-12">
                    <div class="image">
                        <img src="/frontend/images/content-image01.jpg" alt="Image">
                    </div>
                    <!-- end image -->
                </div>
                <!-- end col-12 -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="content-section no-spacing">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <figure class="side-image left-full-space">
                        <img src="/frontend/images/side-image04.jpg" alt="Image">
                    </figure>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="spacing-100"></div>
                    <div class="side-content">
                        <h6>VIEWS</h6>
                        <h2>Peace, Serenity, <br> Comfort</h2>
                        {!! File::get(public_path('/text/intro_content2.txt')) !!}
                    </div>
                    <!-- end side-content -->
                    <div class="spacing-100"></div>
                    <div class="row inner">
                        <div class="col-md-6">
                            <figure class="side-image">
                                <img src="/frontend/images/side-image05.jpg" alt="Image">
                            </figure>
                        </div>
                        <!-- end col-6 -->
                        <div class="col-md-6">
                            <figure class="side-image">
                                <img src="/frontend/images/side-image06.jpg" alt="Image">
                            </figure>
                        </div>
                        <!-- end col-6 -->
                    </div>
                    <!-- end row inner -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end content-section -->
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-box">
                        <h6>UPDATES DELIVERED STRAIGHT</h6>
                        <h2>Get News & Updates to Your Inbox</h2>
                        <form>
                            <input type="email" placeholder="Enter Your Email Address....">
                            <input type="submit" value="SUBSCRIBE">
                        </form>
                        <small>Your email address will be used in accordance with our <a href="/privacy-policy">Privacy
                                Policy</a></small>
                    </div>
                    <!-- end newsletter-box -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
