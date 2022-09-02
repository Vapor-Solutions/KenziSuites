@extends('layouts.homelayout')

@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header>
        <x-slot name="header">About Kenzi Suites</x-slot>
        <x-slot name="tagline">Get to know us</x-slot>
    </x-home.header>

    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h6>WELCOME TO KENZI SUITES</h6>
                        <h2>
                            Who We are
                        </h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <div class="col-lg-6">
                    {!! File::get(public_path('/text/about_content1.txt')) !!}
                </div>
                <!-- end col-6 -->
                @if (count(App\Models\Testimonial::all()) > 0)
                    <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1">
                        <div class="testimonial-box bottom">
                            <x-rating count="4.5"></x-rating>


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
                        <img src="/frontend/images/content-image01.jpg" alt="Image" />
                    </div>
                    <!-- end image -->
                </div>
                <!-- end col-12 -->
                <div class="clearfix spacing-100"></div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
