@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    {{-- Filter  Selection --}}
    <div class="flex container w-full py-2 md:py-4 text-white bg-primary m-5 px-2 md:px-10 justify-between items-center rounded-[50px]">
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="{{route('all-items')}}" class="filter-button bold-12 sm:bold-16 md:bold-24">All items </a>
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

    {{-- infinite text slide --}}
    <div class="relative block w-[100%] h-[80px] font-bold">
        <div class="absolute block m-auto whitespace-nowrap overflow-hidden w-full marquee1 md:marquee bg-black h-[50px]">
            <span class=" flex flex-row items-center pl-[100%] text-center whitespace-nowrap w-full h-full gap-4">
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    SHOP NOW!! GET THEM FAST!
                </h1>
                <div class="bg-black h-full flex  items-center">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center"></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    LIMITED STYLE! LIMITED PRICE! FASTER!!
                </h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">BE STYLISH & UNIQUE</h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    SHOP NOW!! GET THEM FAST!
                </h1>
                <div class="bg-black h-full flex  items-center">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center"></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    LIMITED STYLE! LIMITED PRICE! FASTER!!
                </h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">BE STYLISH & UNIQUE</h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    SHOP NOW!! GET THEM FAST!
                </h1>
                <div class="bg-black h-full flex  items-center">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center"></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    LIMITED STYLE! LIMITED PRICE! FASTER!!
                </h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">BE STYLISH & UNIQUE</h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    SHOP NOW!! GET THEM FAST!
                </h1>
                <div class="bg-black h-full flex  items-center">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center"></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    LIMITED STYLE! LIMITED PRICE! FASTER!!
                </h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">BE STYLISH & UNIQUE</h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    SHOP NOW!! GET THEM FAST!
                </h1>
                <div class="bg-black h-full flex  items-center">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center"></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">
                    LIMITED STYLE! LIMITED PRICE! FASTER!!
                </h1>
                <div class="bg-black h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-black text-yellow-500">BE STYLISH & UNIQUE</h1>
            </span>
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
</div>

    <script>
        
    </script>

@endsection