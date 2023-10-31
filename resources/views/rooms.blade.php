@extends('layouts.homelayout')


@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header>
        <x-slot name="header">Our Rooms</x-slot>
        <x-slot name="tagline">Feel the Beauty</x-slot>
    </x-home.header>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-6">
                    <div class="room-type">
                        <div class="price-line">STAY FROM <span>$50.00</span></div>
                        <h3>Deluxe Suites</h3>
                        <small>Kenzi Suites</small>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="recent-testimonial"> <span><strong>Very Good</strong> <i class="lni lni-star-filled"></i><i
                                class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i
                                class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></span> <small>17 guest
                            reviews</small>
                        <p>Second time at this hotel will be going
                            back next year same time.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="room-gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery01.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery01.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery02.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery02.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery03.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery03.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery04.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery04.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery05.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery05.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery06.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery06.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery07.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery07.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                            <div class="swiper-slide"> <a href="/frontend/images/room-gallery08.jpg" data-fancybox><img
                                        src="/frontend/images/room-gallery08.jpg" alt="Image"></a> </div>
                            <!-- end swiper-slide -->
                        </div>
                        <!-- end swiper-wrapper -->
                    </div>
                    <!-- end room-gallery-top -->
                    <div class="room-gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery01.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery02.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery03.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery04.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery05.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery06.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery07.jpg" alt="Image">
                            </div>
                            <div class="swiper-slide">
                                <img src="/frontend/images/room-gallery08.jpg" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p>At the heart of Blackpool's busy South Promenade, this Adults Only hotel (strictly over 18s) is just
                        minutes from the famous
                        Blackpool <u>Pleasure Beach</u> and South Pier. The markets and shops of South Shore are just a
                        short stroll away if you prefer to indulge in some bargain hunting. Linger over an all-you-can-eat buffet breakfast and 3 course dinner
                        in our beautiful sea view restaurant, then make your way to our .</p>
                </div>
                <div class="col-lg-5">
                    <p> <strong>Cabaret nightclub</strong> 'The Talk of the Coast' and let our line up of top acts entertain
                        you,
                        with hilarious comedy and fantastic vocals, featuring the inimitable. </p>
                </div>
                <div class="col-12">
                    <div class="room-info-box">
                        <h6>Room size 15 m²</h6>
                        <p>This room benefits from a TV, tea and coffee making facilities, and <u>nightly entertainment</u>
                            with The Talk of the Coast.
                            Hairdryers and ironing facilities are available from reception.

                        </p>
                    </div>
                    <div class="room-info-box">
                        <h6>Facilities</h6>
                        <ul>
                            <li>
                                <figure><img src="/frontend/images/icon01.png" alt="Image"></figure><b>Room
                                    Type</b><span>Hotel
                                    Non-Smoking Throughout</span>
                            </li>
                            <li>
                                <figure><img src="/frontend/images/icon02.png" alt="Image"></figure><b>Room
                                    services</b><span>24
                                    Hour Reception, Wake Up Call Available</span>
                            </li>
                            <li>
                                <figure><img src="/frontend/images/icon03.png" alt="Image"></figure><b>Parking (charges
                                    may apply)
                                </b><span>Car parking available onsite</span>
                            </li>
                            <li>
                                <figure><img src="/frontend/images/icon04.png" alt="Image"></figure>
                                <b>Business</b><span>Wi-Fi
                                    Available, Wi-Fi Available In Public Areas</span>
                            </li>
                            <li>
                                <figure><img src="/frontend/images/icon05.png" alt="Image"></figure>
                                <b>Dining</b><span>Restaurant,
                                    Bar</span>
                            </li>
                            <li>
                                <figure><img src="/frontend/images/icon06.png" alt="Image"></figure><b>In room
                                    entertainment</b><span>TV, Air Conditioner</span>
                            </li>
                            <li>
                                <figure><img src="/frontend/images/icon07.png" alt="Image"></figure><b>Other
                                    facilities</b><span>Tea/Coffee making facilities in each room, Telephone In Each
                                    Room</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section" data-background="/frontend/images/side-image07.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-box">
                        <a href="#" class="play-btn"><i class="lni lni-play"></i></a>
                        <h2>Great hospitality is the key to Pride of Kenzi's <br>
                            longstanding reputation for excellence.</h2>
                    </div>
                    <!-- end video-box -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="room-info-box">
                        <h6>Useful Informations</h6>
                        <ul>
                            <li><b>Check-in </b><span>From 14:00 hours</span></li>
                            <li><b>Check-out </b><span>Until 10:30 hours</span></li>
                            <li><b>Important information </b><span>The price shown is based on the occupancy and dates you
                                    have searched for. Prices and availability are subject to change based on the arrival
                                    date, number of nights and occupancy searched for. All prices are inclusive of all local
                                    taxes.</span></li>
                            <li><b>Pets</b><span>Pets are not allowed</span></li>
                        </ul>
                    </div>
                    <!-- end room-info-box -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
