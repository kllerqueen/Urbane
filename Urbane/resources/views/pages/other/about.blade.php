@extends('template.template')

@section('body')
    <div class="flex flex-col items-center h-screen bg-[#002759]">
        <h1 class="bold-64 text-white my-10">ABOUT US</h1>
        <div class="flex flex-row">
            <div class="w-[768px]">
                <p class="regular-32 text-white">Welcome to Urbane, an online shopping destination where style meets convenience. Our journey began with a simple concept: to create a location where fashion aficionados and trendsetters could discover curated collections that reflected their own preferences.</p>
            </div>

            <div>
                <img src="{{ url('assets/aboutUs/AboutUs1.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection