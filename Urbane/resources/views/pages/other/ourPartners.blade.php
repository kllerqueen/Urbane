@extends('template.template')

@section('body')
    <div class="flex flex-col items-center   px-8 relative">
        <div class="z-[-1] absolute bg-black w-full h-full top-0"></div>
        <h1 class="bold-40 lg:bold-52 text-white my-10">OUR PARTNERS</h1>
        <div class="flex flex-col md:flex-row items-center  justify-center gap-8">
            <iframe src="https://www.youtube.com/embed/z_WoiAkh9xo?si=5wt7XwYyZtyTB9mo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="w-full h-[300px]"></iframe>
            <div class="max-w-[700px] w-full">
                <p class="regular-16 md:regular-20 lg:regular-24 text-white">At Urbane, we believe that working with a partner is a long-term commitment. A voyage made possible by everyone's participation. A journey that needs us all to question everything we do and how we do it in order to always grow and progress. That is the path we have walked since 2023.</p>
            </div>
            
        </div>
        <div class="relative w-[100vw] h-[80px] sm:h-[140px] lg:h-[180px] mt-12">
            <img src="{{url('assets/ourPartner/OurPartnerBG.png')}}" alt="" class="absolute w-full h-full">
        </div>
    </div>
@endsection