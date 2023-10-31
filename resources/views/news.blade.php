@extends('layouts.homelayout')

@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header>
        <x-slot name="header">Latest News and Events</x-slot>
        <x-slot name="tagline">Stay Updated with Our Latest News and Events</x-slot>
    </x-home.header>

    <div class="container blog-container">
        <div class="row">
            <div class="col-12 col-md-8">
                <section class="content-section blog-content">

                    <div class="blog__item">
                        <img src="/frontend/images/news01.jpg" alt="Image">
                        <div class="blog__item__text">
                            <h3>Mastering the Art of Home Gardening</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt itaque, et quam quo
                                explicabo tenetur. At doloribus, tenetur, debitis iusto itaque quasi cumque eaque incidunt
                                facilis similique, dolorem corrupti placeat.</p>
                            <button class="btn btn-primary">Read More</button>
                        </div>
                    </div>

                    <div class="blog-post">
                        <hr>
                    </div>

                    <div class="blog__item">
                        <img src="/frontend/images/news02.jpg" alt="Image">
                        <div class="blog__item__text">
                            <h3>Mindful Living: Finding Balance in a Hectic World</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolore officia nulla provident
                                soluta ad vitae obcaecati incidunt nam quis totam dolores aperiam magnam veritatis ipsam
                                nobis ab, numquam amet.</p>
                            <button class="btn btn-primary">Read More</button>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-4" style="padding-top: 50px;">
                <!-- Categories Panel -->
                <div class="blog__sidebar__item">
                    <h3>Categories</h3>
                    <div class="blog__sidebar__item__categories">
                        <ul>
                            <li><a href="#">Repice</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Trending</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Popular Posts -->
                <div class="blog__sidebar__item">
                    <h3>Popular posts</h3>
                    <div class="blog__sidebar__recent">
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="/frontend/images/news01.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <h4>Secret To Cooking Vegetables</h4>
                                <span>13 Nov 2020</span>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="/frontend/images/news02.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <h4>Bbq Myths Getting You Down</h4>
                                <span>13 Nov 2020</span>
                            </div>
                        </a>
                        <a href="#" class="blog__sidebar__recent__item">
                            <div class="blog__sidebar__recent__item__pic">
                                <img src="/frontend/images/news03.jpg" alt="">
                            </div>
                            <div class="blog__sidebar__recent__item__text">
                                <h4>Save Money The Crock Pot Way</h4>
                                <span>13 Nov 2020</span>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>

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
                    <small>Your email address will be used in accordance with our <a href="#">Privacy
                            Policy</a></small>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
