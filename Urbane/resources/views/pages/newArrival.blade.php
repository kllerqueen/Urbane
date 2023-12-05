@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    {{-- Filter  Selection --}}
    <div class="flex container w-full py-2 md:py-4 text-white bg-primary m-5 px-2 md:px-10 justify-between items-center rounded-[50px]">
        <div class="flex p-1 md:px-3 rounded-[50px] ">
            <a href="{{route('all-items')}}" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">All items</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px] bg-white text-primary">
            <a href="{{route('new-arrival')}}" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">🔥 New Arrival 🔥</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="{{route('new-arrival')}}" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">Man</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">Woman</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]  ">
            <a href="" class="filter-button bold-12 md:bold-24" id="cat">Accessories</a>
        </div>
    </div>
    
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