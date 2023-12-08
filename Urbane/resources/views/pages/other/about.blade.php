@extends('template.template')

@section('body')
    <div class="flex flex-col items-center min-h-screen  px-8 relative">
        <div class="z-[-1] absolute bg-primary w-full h-[620px] top-0"></div>
        <h1 class="bold-64 text-white my-10">ABOUT US</h1>
        <div class="flex flex-col-reverse md:flex-row items-center  justify-center gap-8">
            <div class="max-w-[700px] w-full">
                <p class="regular-16 md:regular-24 lg:regular-32 text-black md:text-white">Welcome to Urbane, an online shopping destination where style meets convenience. Our journey began with a simple concept: to create a location where fashion aficionados and trendsetters could discover curated collections that reflected their own preferences.</p>
            </div>
            <img src="{{ url('assets/aboutUs/AboutUs1.png') }}" alt="" class="h-[500px]" onclick="changeImage(event)" id="image">
        </div>

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
            <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                Urbane retains the right, at any moment and without notice, to alter or modify these terms and conditions. It is your duty to examine these conditions on a regular basis.
            </h1>
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
            <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                Urbane retains the right, at any moment and without notice, to alter or modify these terms and conditions. It is your duty to examine these conditions on a regular basis.
            </h1>
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
            <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                Urbane retains the right, at any moment and without notice, to alter or modify these terms and conditions. It is your duty to examine these conditions on a regular basis.
            </h1>
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
            <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                Urbane retains the right, at any moment and without notice, to alter or modify these terms and conditions. It is your duty to examine these conditions on a regular basis.
            </h1>
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
            <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                Urbane retains the right, at any moment and without notice, to alter or modify these terms and conditions. It is your duty to examine these conditions on a regular basis.
            </h1>
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