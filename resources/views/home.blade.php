@extends('layouts.homelayout')

@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header-two></x-home.header-two>
    <section class="content-section no-spacing bg-kenzi text-white">
        <x-booking-form></x-booking-form>
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
                        <img src="/frontend/images/side-image01.jpg" alt="Image">
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
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <figure class="side-image">
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
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <figure class="side-image">
                                <img src="/frontend/images/side-image05.jpg" alt="Image" class="img-fluid">
                            </figure>
                        </div>
                        <!-- end col-6 -->
                        <div class="col-md-6 mb-4">
                            <figure class="side-image">
                                <img src="/frontend/images/side-image06.jpg" alt="Image" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-md-6 mb-4">
                            <figure class="side-image">
                                <img src="/frontend/images/side-image07.jpg" alt="Image" class="img-fluid">
                            </figure>
                        </div>
                        <!-- end col-6 -->
                        <div class="col-md-6 mb-4">
                            <figure class="side-image">
                                <img src="/frontend/images/side-image08.jpg" alt="Image" class="img-fluid">
                            </figure>
                        </div>
                        <!-- end col-6 -->
                    </div>
                    <!-- end row -->
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
