@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center">
    {{-- Filter  Selection --}}
    <div class="flex w-[1028px] h-[74px] bg-[#00457D] m-5 px-10 justify-between items-center rounded-[50px]">
        <div class="flex bg-[#FFFFFF] p-1 px-3 rounded-[50px]">
            <button class="filter-button text-[#00457D] bold-24">🛍 All items 🛍</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">New Arrival</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">Man</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">Woman</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">Apparel</button>
        </div>
    </div>

    <div class="container w-full relative h-full overflow-hidden">
        <div class="flex flex-row gap-8 justify-center">            
            <div class="flex w-[600px] h-[700px] bg-[#121111] shadow-2xl rounded-[50px]">
                <img src="{{ url('/assets/discover/LeftFramePic.png') }}" class="absolute" alt="/">
                <div class="relative p-5">
                    <h1 class="text-white text-[36px] w-[50%] ml-auto mb-5">Luxury is seen in what you wear on your body. Gold symbolizes prosperity and wealth on your person.</h1>
                    <a href="" class="flex flex-row items-center justify-between w-[35%] rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ml-auto mr-[85px]">
                        <h1 class="text-white">Check Product</h1>
                        <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                    </a>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex w-[600px] h-[350px] bg-[#EEF7FF] shadow-2xl rounded-[50px]">
                    <img src="{{ url('/assets/discover/RightFrameTop.png') }}" class="ml-[76px] rounded-r-[50px] absolute" alt="/">
                    <div class="relative p-5">
                        <a href="" class="flex flex-row items-center justify-between w-[75%] rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ml-5 my-5 mr-[85px]">
                            <h1 class="text-white">Check Product</h1>
                            <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                        </a>
                    </div>
                </div>
                <div class="flex flex-row gap-8">
                    <div class="flex w-[280.5px] h-[317px] bg-[#EAE2B7] shadow-2xl rounded-[50px] overflow-hidden">
                        <img src="{{ url('/assets/discover/RightFrameBottom1.png') }}" class="" alt="/">
                        <div class="relative p-5">
                            {{-- <a href="" class="flex flex-row items-center justify-between w-[70%] rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ml-16 mr-[85px]">
                                <h1 class="text-white">Check Product</h1>
                                <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="flex w-[280.5px] h-[317px] bg-[#A63434] shadow-2xl rounded-[50px] overflow-hidden">
                        <img src="{{ url('/assets/discover/RightFrameBottom2.png') }}" alt="/">
                        <div class="relative p-5">
                            {{-- <a href="" class="flex flex-row items-center justify-between w-[70%] rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ml-16 mr-[85px]">
                                <h1 class="text-white">Check Product</h1>
                                <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- infinite text slide --}}
    <div class="relative block w-[100%] h-[150px] font-bold mt-14">
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

    

    </div>
</div>

<script>
    
</script>

@endsection