@extends('template.template')

@section('body')
<div class="flex flex-col justify-center">
    {{-- hero --}}
    <div class="container py-8  flex flex-col-reverse md:flex-row justify-center items-center px-2 md:px-12 gap-4 relative z-[-1]">
        <img src="{{ url('assets/home/FirstSection/HeroPendant.png')}}" alt="" class="w-[300px] md:w-[400px] absolute top-0 left-0 z-1">
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
                        <img src="{{ url('assets/home/FirstSection/DiscoverIcons.png')}}" alt="" class=" w-[35px] md:w-[50px]">
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
                <img src="{{ url('assets/home/FirstSection/HeroCheck.png')}}" alt="" class="mt-[-60px] w-[40px] md:w-[55px] lg:w-[80px]">
            </div>
        </div>
        <div class="max-w-full relative ">

            <div class="absolute top-[45%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <img src="{{ url('assets/home/FirstSection/HeroBag.png')}}" alt="" class=" absolute w-[40px] md:w-[65px] lg:w-[90px] bottom-0 right-[2%] z-20">
                <img src="{{ url('assets/home/FirstSection/HeroHeadphones.png')}}" alt="" class=" absolute w-[90px] min-[475px]:w-[140px] lg:w-[170px] xl:w-[200px] top-[-30px] left-[-40px] md:left-[-90px] z-10">
                <div class="absolute bottom-[-40px] w-fit left-[-20px] lg:left-[-80px] xl:left-0">
                    <div class="relative z-20">
                        <img src="{{ url('assets/home/FirstSection/HeroLike.png')}}" alt="" class="absolute w-[40px] md:w-[55px] lg:w-[70px] top-[-30px] right-[-30px]">
                        <img src="{{ url('assets/home/FirstSection/HeroUsers.png')}}" alt="" class="w-[120px] md:w-[160px] lg:w-[220px] z-20 ">
                    </div>
                </div>
                <img src="{{ url('assets/home/FirstSection/HeroBm.png')}}" alt="" class="absolute left-[-40px] top-[60%] w-[65px] md:w-[80px] lg:w-[100px] z-10">

                <div class="relative ">
                    <img src="{{ url('assets/home/FirstSection/HeroModel.png')}}" alt="" class=" h-[200px] min-[475px]:h-[350px] md:h-[300px] lg:h-[450px]">
                    <img src="{{ url('assets/home/FirstSection/HeroStage.png')}}" alt="" class="bottom-[-10px] absolute  w-full">
                </div>
            </div>
            <img src="{{ url('assets/home/FirstSection/HeroBG.png')}}" alt="" class="w-full">
        </div>
    </div>

    {{-- Category Below Hero --}}
    <div class="w-[90%] md:w-[720px] mx-auto mt-0 xl:mt-[-50px] z-50 relative">
        <img src="{{ url('assets/home/FirstSection/HeroBag1.png')}}" alt="" class="absolute bottom-[-20px] left-[-30px] w-[50px] min-[460px]:w-[65px]  md:w-[80px]">
        <img src="{{ url('assets/home/FirstSection/HeroBag2.png')}}" alt="" class="absolute top-[-30px] right-[-20px] w-[50px] min-[460px]:w-[65px] md:w-[80px]">
        <img src="{{ url('assets/home/FirstSection/HeroBottomContainer.png')}}" alt="" class="absolute w-full h-full z-[-1]">
        <div class="grid grid-cols-3 min-[460px]:grid-cols-4 z-50  px-2 min-[460px]:px-8  py-4 md:py-8">
            <div class="flex-col gap-4 md:gap-6 hidden min-[460px]:flex  border-r-2 border-white text-white px-1 min-[460px]:px-2 md:px-4">
                <div class=" flex flex-row items-center ">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Styles</h1>
                    <img src="{{ url('assets/home/FirstSection/HeroGroupPic.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                </div>
                <h1 class="regular-10 md:regular-14 lg:regular-16">Choose What you want to buy</h1>
            </div>

            <div class="flex flex-col gap-2 text-white border-r-2 border-white px-1 min-[460px]:px-2  md:px-4">
                <div class=" flex flex-col">
                    <img src="{{ url('assets/home/FirstSection/HeroMan.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Man</h1>
                </div>
                <a href="{{ route('discover', 'Man') }}" class="flex flex-row items-center justify-between w-full rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ">
                    <h1>Shop Now</h1>
                    <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                </a>
            </div>

            <div class="flex flex-col gap-2 text-white border-r-2 border-white px-1 min-[460px]:px-2  md:px-4">
                <div class=" flex flex-col">
                    <img src="{{ url('assets/home/FirstSection/HeroWoman.png')}}" alt="" class=" w-[28px] md:w-[35px] lg:w-[50px]">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Woman</h1>
                </div>
                <a href="{{ route('discover', 'Woman') }}" class="flex flex-row items-center justify-between w-full rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ">
                    <h1>Shop Now</h1>
                    <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                </a>
            </div>

            <div class="flex flex-col gap-2 text-white  px-1 min-[460px]:px-2  md:px-4">
                <div class=" flex flex-col">
                    <img src="{{ url('assets/home/FirstSection/HeroGroupPic1.png')}}" alt="" class=" w-[22px] md:w-[28px] lg:w-[40px]">
                    <h1 class="regular-12 md:regular-16 lg:regular-20">Accessories</h1>
                </div>
                <a href="{{ route('discover', 'Accessory') }}" class="flex flex-row items-center justify-between w-full rounded-lg shadow-2xl p-1 min-[460px]:p-2 bg-primary regular-10 md:regular-14 lg:regular-16 ">
                    <h1>Shop Now</h1>
                    <div class="p-1 bg-white flex flexCenter rounded-full"><i class='bx bx-right-arrow-alt text-primary'></i></div>
                </a>
            </div>
        </div>
    </div>

    {{-- infinite text slide --}}
    @include('partials.infiniteTextSlide')

    {{-- Arrival --}}
    <div class="container w-full relative h-screen overflow-hidden">
        <img src="{{ url('assets/home/SecondSection/SectionBG.png')}}" alt="" class=" min-w-[650px] min-[400px]:w-full h-full rounded-lg">
        <div class="absolute top-[8%] lg:top-[5%] left-[4%] flex flex-col items-center">
            <div class="relative">
                <img src="{{ url('assets/home/SecondSection/TextStroke.png')}}" alt="" class="w-[250px] md:w-[320px] lg:w-[450px]">
                <img src="{{ url('assets/home/SecondSection/TextFill.png')}}" alt="" class="w-[250px] md:w-[320px] lg:w-[450px] absolute top-0 arrival-animate">
            </div>
            <div class="relative mt-12 w-fit">
                <img src="{{ url('assets/home/SecondSection/ArrivalButtonCircle.png')}}" alt="" class="absolute min-w-[170px] md:min-w-[250px] h-[75px] md:h-[95px] top-[-20px] md:top-[-30px] right-[-50px] z-1">
                <a href="/home" class="border-2 rounded-md px-4 md:px-8 py-1 md:py-2 border-primary text-primary bold-18 md:bold-20 lg:bold-24 z-10 relative">
                    New Arrival
                </a>
            </div>
        </div>
        <div class="relative">
            <img src="{{ url('assets/home/SecondSection/Model.png')}}" alt="" class="absolute min-w-[48%] bottom-[-50px] left-[50%] translate-x-[-50%] h-[75%]">
        </div>
    </div>

    {{-- Recommended Section --}}
    <div class="container w-full relative h-screen overflow-hidden">
        <img src="{{ url('assets/home/ThirdSection/BG.png')}}" alt="" class=" min-w-[650px] min-[500px]:w-full h-full rounded-lg">

        <div class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex flex-col items-center justify-center max-w-[900px] w-full px-4">
            <div class="">
                <img src="{{ url('assets/home/ThirdSection/TextStroke.png')}}" alt="" class="max-w-[280px] min-[550px]:max-w-[500px] lg:max-w-[650px] w-full">
                <img src="{{ url('assets/home/ThirdSection/TextFill.png')}}" alt="" class="max-w-[280px] min-[550px]:max-w-[500px] lg:max-w-[650px] w-full absolute top-0 arrival-animate">
                <img src="{{ url('assets/home/ThirdSection/FireIcon.png')}}" alt="" class=" absolute w-[70px] min-[475px]:w-[140px] lg:w-[170px] xl:w-[200px] top-[-60px] min-[475px]:top-[-110px] lg:top-[-150px] left-[-50px] min-[475px]:left-[-90px] md:left-[-150px] z-10 hidden md:block">
                <img src="{{ url('assets/home/ThirdSection/StarIcon.png')}}" alt="" class=" absolute w-[70px] min-[475px]:w-[110px] lg:w-[140px] top-[-60px] min-[475px]:top-[-100px] lg:top-[-120px] right-[-60px] min-[475px]right-[-90px] md:right-[-120px] z-10 hidden md:block">
            </div>

            <div id="slider-box" class='relative flex items-center w-full h-full whitespace-nowrap overflow-y-hidden overflow-x-auto mt-12 gap-4' >

                @forelse ($recommended as $item)

                    <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                        <div id="modal" class="absolute w-full h-full bg-black/70 hidden">
                            <div class="py-3 px-4 flex flex-col gap-4 items-center justify-center bg-white/70 absolute bottom-0 w-full text-center">
                                <a href="{{ route('detailPage', $item->id) }}" class="w-full py-1 bg-primary rounded-sm">Add To Cart</a>
                                <a href="" class="w-full text-primary ">See Details</a>
                            </div>
                        </div>
                        <img src="{{ url('assets/home/ThirdSection/ProductPhoto.png')}}" alt=""  class='w-full h-full'/>
                        <div class="flex flex-col items-center py-3 px-1 md:px-2 w-full text-center ">
                            <p class="regular-10 md:regular-14 lg:regular-18 text-ellipsis overflow-hidden">{{ $item->item_name }}</p>
                            <h2 class="regular-10 md:regular-12 lg:regular-14">Rp. {{ number_format($item->item_price, 2, '.', ',') }}</h2>
                        </div>
                    </div>

                @empty

                @endforelse

            </div>
        </div>
    </div>
    <script>
        const sliderBox = document.querySelector("#slider-box"),
        slides = sliderBox.querySelectorAll("#slide"),
        arrowIcons = document.querySelectorAll(".icon i");
        let isDrag = false;

        const dragging = (e) => {
            if(!isDrag) return;
            sliderBox.scrollLeft -= e.movementX;
        }
        const dragStop = () => {
            isDrag = false;
        }
        sliderBox.addEventListener("mousedown", () => isDrag = true);
        sliderBox.addEventListener("mouseleave", dragStop);
        sliderBox.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);


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

</div>


@endsection

