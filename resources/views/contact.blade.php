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

    </section>
@endsection
