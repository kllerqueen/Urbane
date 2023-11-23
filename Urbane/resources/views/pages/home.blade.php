@extends('template.template')

@section('body')
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
                <img src="{{ url('assets/HeroHeadphones.png')}}" alt="" class=" absolute w-[90px] min-[475px]:w-[140px] lg:w-[180px] xl:w-[230px] top-[-30px] left-[-40px] md:left-[-90px] z-10">
                <div class="absolute bottom-[-40px] w-fit left-[-20px] lg:left-[-80px] xl:left-0">
                    <div class="relative z-20">
                        <img src="{{ url('assets/HeroLike.png')}}" alt="" class="absolute w-[40px] md:w-[55px] lg:w-[70px] top-[-30px] right-[-30px]">
                        <img src="{{ url('assets/HeroUsers.png')}}" alt="" class="w-[120px] md:w-[160px] lg:w-[220px] z-20 ">
                    </div>
                </div>
                <img src="{{ url('assets/HeroBm.png')}}" alt="" class="absolute left-[-40px] top-[60%] w-[65px] md:w-[80px] lg:w-[100px] z-10">
                
                <div class="relative ">
                    <img src="{{ url('assets/HeroModel.png')}}" alt="" class=" h-[200px] min-[475px]:h-[350px] md:h-[30vw] lg:w-[25vw]">
                    <img src="{{ url('assets/HeroStage.png')}}" alt="" class="bottom-[-10px] absolute  w-full">
                </div>
            </div>
            <img src="{{ url('assets/HeroBG.png')}}" alt="" class="w-full">
        </div>
        
    </div>
    <div>
        <div class="w-[50%] mx-auto mb-4 mt-[-50px] z-50 relative overflow-hidden">
            <img src="{{ url('assets/HeroBottomContainer.png')}}" alt="" class="absolute w-full z-[-1]">
            <div class="flex flex-row z-50  px-8 py-8">
                <div class="text-white flex flex-row items-center ">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Styles</h1>
                    <img src="{{ url('assets/HeroGroupPic.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                </div>
            </div>
        </div>
    </div>
@endsection