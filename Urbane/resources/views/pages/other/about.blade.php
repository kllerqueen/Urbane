@extends('template.template')

@section('body')
    <div class="flex flex-col items-center min-h-screen  px-8 relative">
        <div class="z-[-1] absolute bg-primary w-full h-[620px] top-0"></div>
        <h1 class="bold-24 md:bold-32 lg:bold-52 text-white my-10">ABOUT US</h1>
        <div class="flex flex-col-reverse md:flex-row items-center  justify-center gap-8">
            <div class="max-w-[700px] w-full">
                <p class="regular-16 md:regular-24 lg:regular-28 text-black md:text-white">Welcome to Urbane, an online shopping destination where style meets convenience. Our journey began with a simple concept: to create a location where fashion aficionados and trendsetters could discover curated collections that reflected their own preferences.</p>
            </div>
            <img src="{{ url('assets/aboutUs/AboutUs1.png') }}" alt="" class="h-[500px] cursor-pointer" onclick="changeImage(event)" id="image">
        </div>

        <div class="container flex flex-col">
            {{-- Container 1 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class=" bold-16 md:bold-20 lg:bold-24  ">Urbane’s Story</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <div id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300 flex flex-col items-center">
                    <img src="{{url('assets/aboutUs/About1.png')}}" alt="">
                    <h1 class="pt-2">
                        About Urbane Urbane was founded on a common desire for fusing current trends with classic style. The concept began as a final project for a web programming course and the delight of people when purchasing online. We envisioned Urbane as more than simply a platform; we envisioned it as a fashion-forward community where every click brings you closer to the right outfit.
                    </h1>
                </div>
            </div>

            {{-- Container 2 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class=" bold-16 md:bold-20 lg:bold-24  ">Urbane’s Mission</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <div id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300 flex flex-col items-center">
                    <img src="{{url('assets/aboutUs/About2.png')}}" alt="">
                    <h1 class="pt-2">
                        Our purpose at Urbane is to inspire people to express themselves through fashion. We believe that style is a powerful form of self-expression, and we curate our collections accordingly. The cornerstones of Urbane's dedication to our valued consumers are quality, diversity, and the delight of discovery.
                    </h1>
                </div>
            </div>

            {{-- Container 3 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="bold-16 md:bold-20 lg:bold-24  ">Urbane’s Experience</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <div id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300 flex flex-col items-center">
                    <img src="{{url('assets/aboutUs/About3.png')}}" alt="">
                    <h1 class="pt-2">
                        What distinguishes Urbane is our unwavering commitment to creating an unrivaled shopping experience. Our crew scours the fashion scene for curated apparel, accessories, and lifestyle products. We believe that every object has a story to tell, and we want Urbane to be the canvas for your own.
                    </h1>
                </div>
            </div>

            {{-- Container 4 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class=" bold-16 md:bold-20 lg:bold-24  ">Meet Urbane’s Team</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <div id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300 flex flex-col items-center">
                    <img src="{{url('assets/aboutUs/About4.png')}}" alt="">
                    <h1 class="pt-2">
                        A team of fashion enthusiasts, trend analysts, and customer experience champions power Urbane. We're real individuals who care as much about what we do as you do about what you wear. Meet the people behind Urbane and get to know the personalities that drive our dedication to style and satisfaction.
                    </h1>
                </div>
            </div>

            {{-- Container 5 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class=" bold-16 md:bold-20 lg:bold-24  ">Urbane’s Vision</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <div id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300 flex flex-col items-center">
                    <img src="{{url('assets/aboutUs/About5.png')}}" alt="">
                    <h1 class="pt-2">
                        As we move forward, Urbane hopes to become your go-to spot for all things sleek and trendy. We strive to constantly evolve in order to stay up with the ever-changing fashion world. Our vision is to create a society in which style knows no bounds and every purchase is a step toward self-discovery.
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <script>
        let ups = document.querySelectorAll('#up');
        let downs = document.querySelectorAll('#down');
        let dropdown = document.querySelectorAll('#dropdown');

        downs.forEach((down,index) => {
            down.addEventListener("click", function(){
                ups[index].classList.toggle('hidden');
                down.classList.toggle('hidden');
                dropdown[index].classList.toggle('h-0');
            })
        });

        ups.forEach((up,index) => {
            up.addEventListener("click", function(){
                up.classList.toggle('hidden');
                downs[index].classList.toggle('hidden');
                dropdown[index].classList.toggle('h-0');
            })
        })

        function changeImage(event){
            let image = event.target;
            if(image.src.endsWith('AboutUs1.png')){
                image.src = 'assets/aboutUs/AboutUs2.png'
            }else{
                image.src = 'assets/aboutUs/AboutUs1.png'
            }
        }
    </script>
@endsection