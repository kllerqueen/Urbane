@extends('template.template')

@section('body')
    <div class="flex flex-col items-center h-fit my-8">
        <h1 class="bold-28 md:bold-40 text-primary w-full text-center">TERMS & CONDITIONS</h1>
        <div class="container w-full flex flex-col gap-4 md:gap-8  h-fit">
            {{-- Container 1 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">Acceptance of Terms</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20  overflow-hidden transition-all duration-300">
                    You agree to comply with and be governed by these terms and conditions by accessing and using the Urbane online shop (the "Website"). Please do not use this Website if you do not agree to these terms.
                </h1>
            </div>

            {{-- Container 2 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">Product Information</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                    We make every effort to offer accurate and up-to-date product information, including descriptions, prices, and availability. We do not, however, guarantee the correctness of this information and retain the right to change or correct it at any time.

                </h1>
            </div>
            
            {{-- Container 3 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">Intellectual Property</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                    All content on the Website is the property of Urbane and is protected by intellectual property laws, including but not limited to text, images, logos, and trademarks. Without our prior written approval, you may not reproduce, distribute, or utilize any content from this Website.
                </h1>
            </div>

            {{-- Container 4 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">Limitation of Liability</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                    Urbane is not liable for any direct, indirect, incidental, special, or consequential damages arising from the use or inability to use the Website or anything acquired from the Website.
                </h1>
            </div>

            {{-- Container 5 --}}
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">Changes to Terms</h1>
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
    </script>
@endsection