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
                <div class="col-lg-12">
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
                        <img src="/frontend/images/about.jpg" alt="Image" />
                    </div>
                    <!-- end image -->
                </div>
                <!-- end col-12 -->
                {{-- <div class="clearfix spacing-100"></div> --}}

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <x-contact-section></x-contact-section>

    <div class="google-maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.515946350515!2d34.76567016391104!3d-0.7054009338009728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b399afd757131%3A0x8529b669330d3cde!2sKenzi%20Suites!5e0!3m2!1sen!2ske!4v1662169039957!5m2!1sen!2ske"
            frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <i class="lni lni-map-marker"></i>
    </div>

    @if (count(App\Models\Question::all()) > 0)
        <x-faq></x-faq>
    @endif
@endsection
