@extends('layouts.homelayout')


@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header>
        <x-slot name="header">Contact Us</x-slot>
        <x-slot name="tagline">Get in Touch with Us</x-slot>
    </x-home.header>

    <section class="content-section">
        <div class="container">
            <div class="row">
                <x-contact-section></x-contact-section>
            </div>
        </div>
        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.515946350515!2d34.76567016391104!3d-0.7054009338009728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182b399afd757131%3A0x8529b669330d3cde!2sKenzi%20Suites!5e0!3m2!1sen!2ske!4v1662169039957!5m2!1sen!2ske"
                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <i class="lni lni-map-marker"></i>
        </div>
    </section>
@endsection
