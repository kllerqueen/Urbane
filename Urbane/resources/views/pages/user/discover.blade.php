@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    {{-- Filter  Selection --}}
    <div class="flex container w-full py-2 md:py-4 text-white bg-primary m-5 px-2 md:px-10 justify-between items-center gap-2 rounded-[50px] ">
        <div class="flex p-1 md:px-3 rounded-[50px] w-full justify-center">
            <a href="{{route('discover', 'All')}}" class="filter-button bold-12 sm:bold-16 md:bold-24 ">All items </a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]  w-full justify-center">
            <a href="{{route('discover', 'New')}}" class="filter-button bold-12 sm:bold-16 md:bold-24">New Arrival</a>
        </div>
        @forelse ($categories as $ctg)
            {{-- Kalo category nya sama --}}
            @if ($ctg)
                <div class="flex p-1 md:px-3 rounded-[50px] bg-white text-primary  w-full justify-center">
                    <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24">{{ $ctg->category_name }}</a>
                </div>
            @else
                <div class="flex p-1 md:px-3 rounded-[50px]  w-full justify-center">
                    <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24">{{ $ctg->category_name }}</a>
                </div>
            @endif
            
        @empty

        @endforelse
    </div>
    @if (1)
        
    @else
        
    @endif

    {{-- buat All-items --}}
    <div class="container w-full relative h-full overflow-hidden">
        <div class="grid grid-rows-2 grid-cols-1 md:grid-rows-1 md:grid-cols-2 gap-2 md:gap-6 justify-center">   
            {{-- First Image  --}}
            <div class="flex max-h-[450px] md:max-h-[700px] h-full bg-[#121111] shadow-2xl rounded-[50px] relative">
                <img src="{{ url('/assets/discover/LeftFramePic.png') }}" class="absolute w-full h-full" alt="/">
                <div class="absolute top-4 right-4 p-5 ">
                    <h1 class="text-white regular-16 md:regular-24 lg:regular-32 max-w-[300px] mb-5">Luxury is seen in what you wear on your body. Gold symbolizes prosperity and wealth on your person.</h1>
                    <a href="" class="flex justify-between w-fit bg-primary px-2 py-1  rounded-md">
                        <button class="text-white bold-12 md:bold-14 lg:bold-16 w-full text-start  py-2">Check Product</button>
                        <div class=" shadow-xl rounded-full p-1 flex items-center m-auto bg-white/30">
                            <img src="{{ url('assets/home/FirstSection/DiscoverIcons.png')}}" alt="" class="w-[30px] md:w-[35px]">
                        </div>
                    </a>
                </div>
            </div>

            {{-- Second, third, fourth Image container --}}
            <div class="grid grid-cols-2 grid-rows-2 gap-2 md:gap-6">
                {{-- Second Image --}}
                <div class="flex h-[200px] md:h-[350px] bg-[#EEF7FF] shadow-2xl rounded-[50px] relative col-span-2">
                    <img src="{{ url('/assets/discover/RightFrameTop.png') }}" class="w-full h-full absolute" alt="/">
                    <div class="absolute right-2 top-2 p-5">
                        <a href="" class="flex justify-between w-full bg-primary px-2 py-1  rounded-md">
                            <button class="text-white bold-12 md:bold-14 lg:bold-16 w-full text-start py-2">Check Product</button>
                            <div class=" shadow-xl rounded-full p-1 flex items-center m-auto bg-white/30">
                                <img src="{{ url('assets/home/FirstSection/DiscoverIcons.png')}}" alt="" class="w-[30px] md:w-[35px]">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex w-full h-[200px] md:h-[300px] bg-[#EAE2B7] shadow-2xl rounded-[50px] overflow-hidden relative">
                    <img src="{{ url('/assets/discover/RightFrameBottom1.png') }}" class="w-full h-full absolute" alt="/">
                    <div class="absolute right-2 top-2 p-5">
                        <a href="" class="flex justify-between w-full bg-primary px-2 py-1  rounded-md">
                            <button class="text-white bold-12 md:bold-14 lg:bold-16 w-full text-start py-2">Check Product</button>
                            <div class=" shadow-xl rounded-full p-1 flex items-center m-auto bg-white/30">
                                <img src="{{ url('assets/home/FirstSection/DiscoverIcons.png')}}" alt="" class="w-[30px] md:w-[35px]">
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Fourth Image --}}
                <div class="flex w-full h-[200px] md:h-[300px] bg-[#A63434] shadow-2xl rounded-[50px] overflow-hidden relative">
                    <img src="{{ url('/assets/discover/RightFrameBottom2.png') }}" class="w-full h-full absolute"  alt="/">
                    <div class="p-5 absolute right-2 top-2">
                        <a href="" class="flex justify-between w-full bg-primary px-2 py-1  rounded-md">
                            <button class="text-white bold-12 md:bold-14 lg:bold-16 w-full text-start py-2">Check Product</button>
                            <div class=" shadow-xl rounded-full p-1 flex items-center m-auto bg-white/30">
                                <img src="{{ url('assets/home/FirstSection/DiscoverIcons.png')}}" alt="" class="w-[30px] md:w-[35px]">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- buat new-arrival --}}
    <div class="w-full relative h-[85vh] m-2">
        <img src="{{url('assets/discover/newArrival.png')}}" alt="" class="absolute w-full h-full">
        
        <div class="absolute top-[5%] right-[5%]">
            <div class="relative">
                <img src="{{ url('assets/home/SecondSection/TextStroke.png')}}" alt="" class="max-w-[250px] md:max-w-[240px] lg:max-w-[400px] w-full">
                <img src="{{ url('assets/home/SecondSection/TextFill.png')}}" alt="" class="max-w-[250px] md:max-w-[240px] lg:max-w-[400px] w-full absolute top-0 arrival-animate">
            </div>
        </div>
        <div class="absolute top-[25%] md:top-[5%] left-[5%] lg:left-[10%]">
            <div class="relative">
                <img src="{{ url('assets/discover/newArrival2.png')}}" alt="" class="max-w-[250px] md:max-w-[240px] lg:max-w-[450px] w-full">
            </div>
        </div>
        <div class="absolute bottom-[5%] right-[10%]">
            <div class="relative">
                <img src="{{ url('assets/discover/newArrival1.png')}}" alt="" class="max-w-[250px] md:max-w-[240px] lg:max-w-[450px] w-full">
            </div>
        </div>
    </div>

    {{-- infinite text slide --}}
    @include('partials.infiniteTextSlide')

    <div class="max-w-[1200px] mx-auto w-full relative h-full overflow-hidden py-4 text-center px-2 flex flex-col gap-2">

        {{-- First Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center">

            @forelse ($items as $item)
                <div class="flex flex-col h-full relative" id="slide">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                    <div id="modal" class="absolute w-full h-full bg-black/80 hidden">
                        <div class="py-3 px-4 flex flex-col gap-4 items-center justify-center bg-white/70 absolute bottom-0 w-full text-center">
                            <a href="" class="w-full py-2 bg-primary rounded-md text-white ">Add To Cart</a>
                            <a href="" class="w-full text-primary ">See Details</a>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">{{ $item->item_name }}</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp {{ number_format($item->item_price, 2, '.', ',') }}</p>
                    </div>
                </div>
            @empty

            @endforelse

            {{-- kalau mw di foreach pakai ini aja --}}
            <div class="flex flex-col h-full relative" id="slide">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
                <div id="modal" class="absolute w-full h-full bg-black/80 hidden">
                    <div class="py-3 px-4 flex flex-col gap-4 items-center justify-center bg-white/70 absolute bottom-0 w-full text-center">
                        <a href="" class="w-full py-2 bg-primary rounded-md text-white ">Add To Cart</a>
                        <a href="" class="w-full text-primary ">See Details</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>  
</div>

    <script>
        const slides = document.querySelectorAll('#slide')
        const modals = document.querySelectorAll('#modal')
        slides.forEach((slide, index) => {
            slide.addEventListener('mouseenter', () => {
                modals[index].classList.remove('hidden');
            });

            slide.addEventListener('mouseleave', () => {
                modals[index].classList.add('hidden');
            });
        });
    </script>

@endsection