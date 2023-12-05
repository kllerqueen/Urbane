@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center">
    {{-- Filter  Selection --}}
    <div class="flex container w-full py-2 md:py-4 text-white bg-primary m-5 px-2 md:px-10 justify-between items-center rounded-[50px]">
        <div class="flex p-1 md:px-3 rounded-[50px] bg-white text-primary ">
            <a href="{{route('all-items')}}" class="filter-button bold-12 sm:bold-16 md:bold-24">🛍 All items 🛍</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="{{route('new-arrival')}}" class="filter-button bold-12 sm:bold-16 md:bold-24">New Arrival</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24">Man</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24">Woman</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="" class="filter-button bold-12 md:bold-24">Apparel</a>
        </div>
    </div>

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

    {{-- First Catalog Section --}}
    <div class="max-w-[1200px] mx-auto w-full relative h-full overflow-hidden py-4 text-center px-2 flex flex-col gap-2">
        {{-- First Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">
            <div class="flex flex-col h-full">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col h-full col-span-2 md:col-span-1">
                <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
        </div>

        {{-- Second Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">

            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col h-full ">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>

            <div class="grid grid-rows-2 gap-2 h-full col-span-2 md:col-span-1">
                <div class="flex flex-row  h-full w-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row   w-full">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="{{url('assets/discover/FirstCatalog.png')}}" alt="" class="min-w-[1000px] md:min-w-full md:w-full h-[50vh]">
    {{-- Second Catalog Section --}}
    <div class="max-w-[1200px] mx-auto w-full relative h-full overflow-hidden py-4 text-center px-2 flex flex-col gap-2">
        {{-- First Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">
            <div class="flex flex-col h-full">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col h-full col-span-2 md:col-span-1">
                <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
        </div>

        {{-- Second Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">

            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col h-full ">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>

            <div class="grid grid-rows-2 gap-2 h-full col-span-2 md:col-span-1">
                <div class="flex flex-row  h-full w-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row   w-full">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <img src="{{url('assets/discover/SecondCatalog.png')}}" alt="" class="min-w-[1000px] md:min-w-full md:w-full h-[50vh]">

    {{-- Third Catalog Section --}}
    <div class="max-w-[1200px] mx-auto w-full relative h-full overflow-hidden py-4 text-center px-2 flex flex-col gap-2">
        {{-- First Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">
            <div class="flex flex-col h-full">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col h-full col-span-2 md:col-span-1">
                <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
        </div>

        {{-- Second Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">

            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col h-full ">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>

            <div class="grid grid-rows-2 gap-2 h-full col-span-2 md:col-span-1">
                <div class="flex flex-row  h-full w-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row   w-full">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <img src="{{url('assets/discover/ThirdCatalog.png')}}" alt="" class="min-w-[1000px] md:min-w-full md:w-full h-[50vh]">

    {{-- Fourth Catalog Section --}}
    <div class="max-w-[1200px] mx-auto w-full relative h-full overflow-hidden py-4 text-center px-2 flex flex-col gap-2">
        {{-- First Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">
            <div class="flex flex-col h-full">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col h-full col-span-2 md:col-span-1">
                <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>
        </div>

        {{-- Second Section --}}
        <div class="grid grid-cols-2 md:grid-cols-3 h-full gap-2 justify-center grid-rows-2grid md:grid-rows-1grid">

            <div class="grid grid-rows-2 gap-2 h-full">
                <div class="flex flex-row  h-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row  ">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full">
                        <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                        <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col h-full ">
                <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" min-h-[80%] w-full">
                <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full">
                    <h1 class="bold-10 min-[380px]:bold-14 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-8 md:regular-16 lg:regular-20">Rp 150,000</p>
                </div>
            </div>

            <div class="grid grid-rows-2 gap-2 h-full col-span-2 md:col-span-1">
                <div class="flex flex-row  h-full w-full">
                    <img src="{{url('assets/discover/ProductPhoto2.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
                <div class="flex flex-row   w-full">
                    <img src="{{url('assets/discover/ProductPhoto.png')}}" alt="" class=" h-full min-w-[50%]">
                    <div class="flex flex-col justify-center  bg-secondary/10 py-1 h-full  w-full">
                        <h1 class="bold-16 md:bold-20 lg:bold-24 ">Sweater Sport Jumper XYZ</h1>
                    <p class="regular-14 md:regular-16 lg:regular-20">Rp 150,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>

<script>
    
</script>

@endsection