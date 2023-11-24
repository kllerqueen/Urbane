@extends('template.template')

@section('body')
<div class="flex flex-col justify-center">
    {{-- hero --}}
    <div class="container py-8  flex flex-col-reverse md:flex-row justify-center items-center px-2 md:px-12 gap-4 relative z-[-1]">
        <img src="{{ url('assets/HeroPendant.png')}}" alt="" class="w-[300px] md:w-[400px] absolute top-0 left-0 z-1">
        <div class="flex flex-col max-w-[550px] z-10">
            <p class="bold-20 lg:bold-32">Update Your Models Be</p>
            <h1 class="bold-32 md:bold-52 lg:bold-80 text-primary md:leading-[50px] lg:leading-[90px]">
                Fashionable 
                <br>
                and Stylish
            </h1>
            <p class="bold-20 lg:bold-32">Deserve various models and trendy</p>
            <div class="lg:pl-12 lg:pr-24">
                <div class="flex justify-between w-full bg-primary px-4 py-2 mt-6 lg:mt-12 rounded-3xl">
                    <button class="text-white bold-16 lg:bold-20 md:bold-28 w-full text-start  py-2">Discover More</button>
                    <div class=" shadow-xl rounded-full p-1 flex items-center m-auto bg-white/30">
                        <img src="{{ url('assets/DiscoverIcons.png')}}" alt="" class=" w-[35px] md:w-[50px]">
                    </div>
                </div>
            </div>
            <div class="w-fit flex flex-row items-center text-center mt-8 md:mt-12 lg:mt-16 self-center z-10">
                <div class="border-r-2 border-black px-2 md:px-4 leading-[25px]">
                    <h1 class="bold-18 md:bold-24">1K++ </h1>
                    <p class="regular-18">Products</p>
                </div>
                <div class="border-r-2 border-black px-2 md:px-4 leading-[25px]">
                    <h1 class="bold-18 md:bold-24">500++ </h1>
                    <p class="regular-18">Users</p>
                </div>
                <div class="pl-2  md:pl-4 leading-[25px]">
                    <h1 class="bold-18 md:bold-24">1K++ </h1>
                    <p class="regular-18">Products</p>
                </div>
                <img src="{{ url('assets/HeroCheck.png')}}" alt="" class="mt-[-60px] w-[40px] md:w-[55px] lg:w-[80px]">
            </div>
        </div>
        <div class="max-w-full relative ">
            
            <div class="absolute top-[45%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <img src="{{ url('assets/HeroBag.png')}}" alt="" class=" absolute w-[40px] md:w-[65px] lg:w-[90px] bottom-0 right-[2%] z-20">
                <img src="{{ url('assets/HeroHeadphones.png')}}" alt="" class=" absolute w-[90px] min-[475px]:w-[140px] lg:w-[170px] xl:w-[200px] top-[-30px] left-[-40px] md:left-[-90px] z-10">
                <div class="absolute bottom-[-40px] w-fit left-[-20px] lg:left-[-80px] xl:left-0">
                    <div class="relative z-20">
                        <img src="{{ url('assets/HeroLike.png')}}" alt="" class="absolute w-[40px] md:w-[55px] lg:w-[70px] top-[-30px] right-[-30px]">
                        <img src="{{ url('assets/HeroUsers.png')}}" alt="" class="w-[120px] md:w-[160px] lg:w-[220px] z-20 ">
                    </div>
                </div>
                <img src="{{ url('assets/HeroBm.png')}}" alt="" class="absolute left-[-40px] top-[60%] w-[65px] md:w-[80px] lg:w-[100px] z-10">
                
                <div class="relative ">
                    <img src="{{ url('assets/HeroModel.png')}}" alt="" class=" h-[200px] min-[475px]:h-[350px] md:h-[300px] lg:h-[450px]">
                    <img src="{{ url('assets/HeroStage.png')}}" alt="" class="bottom-[-10px] absolute  w-full">
                </div>
            </div>
            <img src="{{ url('assets/HeroBG.png')}}" alt="" class="w-full">
        </div>
    </div>
    
    {{-- Category Below Hero --}}
    <div class="w-[90%] md:w-[720px] mx-auto mt-0 xl:mt-[-50px] z-50 relative">
        <img src="{{ url('assets/HeroBag1.png')}}" alt="" class="absolute bottom-[-20px] left-[-30px] w-[50px] min-[460px]:w-[65px]  md:w-[80px]">
        <img src="{{ url('assets/HeroBag2.png')}}" alt="" class="absolute top-[-30px] right-[-20px] w-[50px] min-[460px]:w-[65px] md:w-[80px]">
        <img src="{{ url('assets/HeroBottomContainer.png')}}" alt="" class="absolute w-full h-full z-[-1]">
        <div class="grid grid-cols-3 min-[460px]:grid-cols-4 z-50  px-2 min-[460px]:px-8  py-4 md:py-8">
            <div class="flex-col gap-4 md:gap-6 hidden min-[460px]:flex  border-r-2 border-white text-white px-1 min-[460px]:px-2 md:px-4">
                <div class=" flex flex-row items-center ">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Styles</h1>
                    <img src="{{ url('assets/HeroGroupPic.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                </div>
                <h1 class="regular-10 md:regular-14 lg:regular-16">Choose What you want to buy</h1>
            </div>

            <div class="flex flex-col gap-2 text-white border-r-2 border-white px-1 min-[460px]:px-2  md:px-4">
                <div class=" flex flex-col">
                    <img src="{{ url('assets/HeroMan.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Man</h1>
                </div>
                <a href="" class="flex flex-row items-center justify-between w-full rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ">
                    <h1>Shop Now</h1>
                    <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                </a>
            </div>

            <div class="flex flex-col gap-2 text-white border-r-2 border-white px-1 min-[460px]:px-2  md:px-4">
                <div class=" flex flex-col">
                    <img src="{{ url('assets/HeroWoman.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Woman</h1>
                </div>
                <a href="" class="flex flex-row items-center justify-between w-full rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ">
                    <h1>Shop Now</h1>
                    <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                </a>
            </div>

            <div class="flex flex-col gap-2 text-white  px-1 min-[460px]:px-2  md:px-4">
                <div class=" flex flex-col">
                    <img src="{{ url('assets/HeroGroupPic1.png')}}" alt="" class=" w-[22px] md:w-[28px] lg:w-[40px]">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Apparel</h1>
                </div>
                <a href="" class="flex flex-row items-center justify-between w-full rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ">
                    <h1>Shop Now</h1>
                    <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                </a>
            </div>
        </div>
    </div>

    {{-- infinite text slide --}}
    <div class="relative block w-[100%] h-[200px] font-bold mt-12">
        <div class="absolute block m-auto whitespace-nowrap overflow-hidden w-full marquee bg-[#47008E] rotate-first h-[50px] rotate-[-8deg] md:rotate-[-4deg]">
            <span class=" flex flex-row items-center pl-[100%] text-center whitespace-nowrap w-full h-full ">
                <h1 class="regular-9 lg:regular-16 bg-[#47008E] text-yellow-500">
                    SHOP NOW!! GET THEM FAST!
                </h1>
                <div class="bg-[#47008E] h-full flex  items-center">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center"></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-[#47008E] text-yellow-500">
                    LIMITED STYLE! LIMITED PRICE! FASTER!! 
                </h1>
                <div class="bg-[#47008E] h-full flex  items-center ">
                    <h1 class="bg-yellow-500 p-[2px] rounded-full h-fit self-center "></h1>
                </div>
                <h1 class="regular-9 lg:regular-16 bg-[#47008E] text-yellow-500">BE STYLISH & UNIQUE</h1>
            </span>
        </div>
        <div class="absolute block m-auto whitespace-nowrap overflow-hidden w-full marquee bg-black h-[50px] rotate-[8deg] md:rotate-[4deg]">
            <span class=" flex flex-row items-center pl-[100%] text-center whitespace-nowrap w-full h-full ">
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

  
@endsection

   