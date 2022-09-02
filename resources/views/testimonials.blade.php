@extends('layouts.homelayout')


@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header></x-home.header>

    <section class="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h6>WELCOME TO KENZI SUITES</h6>
                        <h2>Here are the <br>Testimonials from <br>Previous Clients</h2>
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-6 -->
                @if (count(App\Models\Testimonial::all()) > 0)
                    @foreach (App\Models\Testimonial::all() as $testimonial)
                        <div class="col-md-3 col-6 my-3">
                            <div class="testimonial-box">
                                <x-rating count="{{ $testimonial->rating }}"></x-rating>
                                <h6 class="text-uppercase"><strong>{{ $testimonial?->client->name }}</strong></h6>
                                <p style="font-weight:100">{{ $testimonial?->testimonial }}</p>
                            </div>
                            <!-- end testimonial-box -->
                        </div>
                    @endforeach
                @else
                    <div class="m-5">
                        <h1 class="text-center">
                            No Testimonials Input Yet
                        </h1>
                    </div>
                @endif
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection
