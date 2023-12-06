@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    <img src="{{url('assets/product/productDetailBackground.png')}}" alt="" class="z-[-1] w-full h-[330px] lg:h-[400px] absolute top-24 lg:top-16">
    <div class="relative flex items-center gap-3 self-start ml-3 md:ml-10 text-white mt-3">
        <div class="bg-white rounded-full p-2 flex items-center justify-center border shadow-xl w-fit">
            <i class='bx bx-chevron-left text-[30px] text-black'></i>
        </div>
        <h1 class="bold-14 md:bold-18 lg:bold-24">Products</h1>
    </div>

    <div class="container w-full px-2 flex flex-col py-4">
        <h1 class="text-center regular-24 md:regular-32 lg:regular-40 text-white md:max-w-[600px] self-center font-alfa mb-2">
            Oversized shirt popelin bias mode white
        </h1>
        <div class="flex flex-col-reverse md:flex-row w-full gap-2 max-h-[25%] items-center md:items-start">
            <div class="flex flex-col max-w-[400px] gap-2">
                <h1 class="bold-32 md:bold-40 lg:bold-52 md:text-white">Rp 179,000</h1>
                <h1 class="mt-4 regular-14 md:regular-20 lg:regular-24">Description</h1>
                <h1 class="regular-8 md:regular-12 lg:regular-14">The oversized silhouette of this shirt provides a relaxed fit, allowing for easy movement and a casually cool vibe. The poplin fabric adds a touch of refinement, ensuring that you not only feel great but also look effortlessly chic. This size is fit till XL size.</h1>
                <div class="w-full flex flex-col items-center gap-2 mt-6 md:mt-12 lg:mt-16">
                    <button class="py-2 max-w-[200px] w-full border-2 border-primary text-primary bold-12 md:bold-16 lg:bold-20 rounded-md">Add To Cart</button>
                    <button class="py-2 max-w-[200px] w-full bg-primary text-white bold-12 md:bold-16 lg:bold-20 rounded-md">Buy Now</button>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-2  min-[400px]:max-w-[70%]  max-w-full max-h-[500px] h-full">
                <div class="h-[300px] lg:h-[400px] w-full lg:w-[35vw] relative">
                    <img src="{{url('assets/product/Dummy 1.png')}}" alt="" class="w-full h-full rounded-lg" id="main-image">
                    <div class="p-2 absolute bottom-[-5px] right-[-10px] bg-white flex justify-center items-center shadow-xl rounded-full border">
                        <i class='bx bx-heart text-[30px]'></i>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-rows-3 lg:grid-cols-2 h-[150px] lg:h-[400px] w-full gap-4 lg:max-w-[35%]">
                    <div class="col-span-1 lg:row-span-3 lg:col-start-2 gap-2 grid grid-cols-3 lg:grid-cols-none lg:grid-rows-3 ">
                        <img src="{{url('assets/product/Dummy 2.png')}}" alt="" class="w-full h-full rounded-lg hover:scale-105 duration-300 transition-all" id="image" onclick="swapImage(0)">
                        <img src="{{url('assets/product/Dummy 3.png')}}" alt="" class="w-full h-full rounded-lg hover:scale-105 duration-300 transition-all" id="image" onclick="swapImage(1)">
                        <img src="{{url('assets/product/Dummy 4.png')}}" alt="" class="w-full h-full rounded-lg hover:scale-105 duration-300 transition-all" id="image" onclick="swapImage(2)">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        function swapImage(index){
            let mainImage = document.getElementById('main-image');
            let images = document.querySelectorAll('#image');
            let temp = images[index].src;
            images[index].src = mainImage.src;
            mainImage.src = temp; 
        }
    </script>

@endsection