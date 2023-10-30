@extends('layouts.homelayout')


@section('content')
    <x-home.hamburger></x-home.hamburger>
    <x-home.header>
        <x-slot name="header">Latest News and Events</x-slot>
        <x-slot name="tagline">Stay Updated with Our Latest News and Events</x-slot>
    </x-home.header>

    <section>
        
    </section>
@endsection
