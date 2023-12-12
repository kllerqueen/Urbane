@extends('template.template')

@section('body')
{{-- @if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="bg-red-500 text-white p-4 mb-4">
            {{ $error }}
        </div>
    @endforeach
@endif --}}
<div class="flex flex-col justify-center items-center md:items-start overflow-hidden">
    <img src="{{url('assets/product/productDetailBackground.png')}}" alt="" class="z-[-1] w-full h-[250px] lg:h-[310px] absolute top-24 lg:top-16">
    <div class="relative flex items-center gap-3 self-start ml-3 md:ml-10 text-white mt-3">
        <a href="{{ route('discover', 'All') }}">
            <div class="bg-white rounded-full p-2 flex items-center justify-center border shadow-xl w-fit">
                <i class='bx bx-chevron-left text-[30px] text-black'></i>
            </div>
        </a>
        <h1 class="bold-14 md:bold-18 lg:bold-24">Products</h1>
    </div>

    <div class="container w-full px-2 flex flex-col py-4 h-full">
        <h1 class="text-center regular-20 md:regular-24 lg:regular-40 text-white self-center font-alfa mb-2 w-full">
            {{ $item->item_name }}
        </h1>
        <div class="flex flex-col-reverse md:flex-row w-full gap-2 max-h-[25%] items-center md:items-start">
            <div class="flex flex-col max-w-[450px] gap-2">
                <h1 class="bold-32 md:bold-40 lg:bold-52 md:text-white">Rp {{ number_format($item->item_price, 2, '.', ',') }}</h1>
                <h1 class="mt-4 regular-14 md:regular-20 lg:regular-24">Description</h1>
                <h1 class="regular-8 md:regular-12 lg:regular-14">{{ $item->item_desc }}</h1>

                {{-- form buat color dan size --}}
                <form method="post" class="flex flex-col gap-2" id="product-form" >
                    @csrf
                    {{-- buat Size --}}
                    <input type="text" class="hidden" name="size" id="size">
                    {{-- Buat Color --}}
                    <input type="text" class="hidden" name="color" id="color">
                    <div class="grid grid-cols-4 gap-2 w-fit text-center" id="size-container">
                        <h1 class="bold-16 md:bold-20 lg:bold-28 border-2 p-2 rounded-md">S</h1>
                        <h1 class="bold-16 md:bold-20 lg:bold-28 border-2 p-2 rounded-md">M</h1>
                        <h1 class="bold-16 md:bold-20 lg:bold-28 border-2 p-2 rounded-md">L</h1>
                        <h1 class="bold-16 md:bold-20 lg:bold-28 border-2 p-2 rounded-md">XL</h1>
                    </div>
                    @error('size')
                        <div class="invalid-feedback text-red-600 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    <div class="flex flex-wrap gap-2 w-fit text-center" id="color-container">
                        <div class="bold-10 md:bold-12 lg:bold-14 border-2 px-4 py-1 rounded-md flex gap-1 items-center">
                            <div class="w-4 h-4 bg-blue-600"></div>
                            <h1>Blue</h1>
                        </div>
                        <div class="bold-10 md:bold-12 lg:bold-14 border-2 px-4 py-1 rounded-md flex gap-1 items-center">
                            <div class="w-4 h-4 bg-red-600"></div>
                            <h1>Red</h1>
                        </div>
                        <div class="bold-10 md:bold-12 lg:bold-14 border-2 px-4 py-1 rounded-md flex gap-1 items-center">
                            <div class="w-4 h-4 bg-black"></div>
                            <h1>Black</h1>
                        </div>
                    </div>
                    @error('color')
                        <div class="invalid-feedback text-red-600 text-sm">
                            {{$message}}
                        </div>
                    @enderror

                    <div class="w-full flex flex-col items-center gap-2 mt-2">
                        <button type="submit" class="py-2 max-w-[200px] w-full border-2 border-primary text-primary bold-12 md:bold-16 lg:bold-20 rounded-md px-6" id="addToCartBtn">Add To Cart</button>
                        {{-- <button class="py-2 max-w-[200px] w-full border-2 border-primary text-primary bold-12 md:bold-16 lg:bold-20 rounded-md">Add To Cart</button> --}}
                    </div>

                     <div class="w-full flex flex-col items-center gap-2 mt-2">
                    <button class="py-2 max-w-[200px] w-full bg-primary text-white bold-12 md:bold-16 lg:bold-20 rounded-md" type="submit" id="buyNowBtn">Buy Now</button>
                </div>
                </form>

            </div>
            <div class="flex flex-col lg:flex-row gap-2  min-[400px]:max-w-[70%]  max-w-full max-h-[500px] h-full">
                <div class="h-[300px] lg:h-[400px] w-full lg:w-[35vw] relative">
                    <img src="{{ url('storage/' . $item->pictures->first()->picture_url) }}" alt="" class="w-full h-full rounded-lg" id="main-image">
                    <form action="{{ route('toggleFav', $item->id) }}" method="POST">
                        @csrf
                        <button class="w-12 h-12 absolute bottom-[-5px] right-[-10px] bg-white flex justify-center items-center shadow-xl rounded-full border text-center">
                            @if ($fav)
                                <i class='bx bxs-heart text-[30px] text-red-500' ></i>
                            @else
                                <i class='bx bx-heart text-[30px]' ></i>
                            @endif
                        </button>
                    </form>

                </div>
                <div class="grid grid-cols-1 lg:grid-rows-3 lg:grid-cols-2 h-full lg:h-[400px] w-full gap-4 lg:max-w-[35%]">
                    <div class="col-span-1 lg:row-span-3 lg:col-start-2 gap-2 grid grid-cols-3 lg:grid-cols-none lg:grid-rows-3 ">
                        @forelse ($item->pictures->skip(1) as $pic)
                            <img src="{{ url('storage/' . $pic->picture_url) }}" alt="" class="w-full h-full rounded-lg hover:scale-105 duration-300 transition-all" id="image" onclick="swapImage()">
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-6 w-full">
        @include('partials.infiniteTextSlide')
    </div>

    {{-- recommendation --}}
    <div class=" container flex flex-col md:flex-row justify-start pb-12 px-4">
        <div class="flex flex-col max-w-[300px] self-start pb-4">
            <h1 class="bold-20 md:bold-24 lg:bold-28">Urbane’s Recommendation</h1>
            <p class="regular-16 md:regular-18 lg:regular-20">Choose the matching sylist and get the hype</p>
        </div>

        <div id="slider-box" class='relative flex items-center w-full h-full overflow-y-hidden overflow-x-auto  gap-4 scal'>
            @forelse ($reccomended as $rec)
                <div id="recommended-slide"  class="relative flex flex-row items-center min-w-[200px] md:min-w-[400px]  h-[150px] md:h-[250px]">
                    <div id="modal" class="absolute w-full h-full bg-black/70 hidden ">
                        <div class="py-3 px-4 flex flex-col gap-4 items-center justify-center bg-white/70 absolute bottom-0 w-full text-center">
                            <form method="post" action="{{route('cart.addToCart2', $rec->id)}}">
                                @csrf
                                <button type="submit" href="" class="w-full py-2 bg-primary rounded-md text-white px-6">
                                    Add To Cart
                                </button>
                            </form>
                            <a href="{{ route('detailPage', ["id" => $rec->id]) }}" class="w-full text-primary ">See Details</a>
                        </div>
                    </div>
                    <img src="{{ asset('storage/' . optional($rec->pictures->first())->picture_url) }}" alt=""  class='w-[50%] h-full'/>

                    <div class="flex flex-col justify-center items-center py-3 px-1 md:px-2 w-[50%] text-center bg-secondary/10 h-full max-h-[250px]">
                        <p class="regular-12 md:regular-14 lg:bold-16 text-ellipsis overflow-hidden">{{ $rec->item_name }}</p>
                        <h2 class="regular-10 md:regular-12 lg:regular-14">Rp {{ number_format($rec->item_price, 2, '.', ',') }}</h2>
                    </div>
                </div>
            @empty

            @endforelse

        </div>
    </div>
</div>

    <script>

        let sizeContainer = document.getElementById('size-container');
        let colorContainer = document.getElementById('color-container');
        let sizeInput = document.getElementById('size')
        let colorInput = document.getElementById('color')

        let sizeArray = ['S', 'M', 'L', 'XL'];
        let colorArray = ['blue', 'red', 'black'];
        let sizes = Array.from(sizeContainer.children);
        let colors = Array.from(colorContainer.children);

        sizes.forEach((size,index) => {
            size.addEventListener("click", function(){
                sizes.forEach((s,i) => {
                    s.classList.remove("shadow-2xl", "bg-primary/50", "text-white");
                })
                size.classList.add("shadow-2xl", "bg-primary/50", "text-white");
                sizeInput.value = sizeArray[index];
                console.log(sizeInput.value)
            })
        })

        colors.forEach((color,index) => {
            color.addEventListener("click", function(){
                colors.forEach((c,i) => {
                    c.classList.remove("shadow-2xl", "bg-primary/50", "text-white");
                })
                color.classList.add("shadow-2xl", "bg-primary/50", "text-white");
                colorInput.value = colorArray[index];
                console.log(colorInput.value)
            })
        })



        let mainImage = document.getElementById('main-image');
        let images = document.querySelectorAll('#image');

        images.forEach(image => {
            image.addEventListener("click", function(){
                let temp = image.src;
                image.src = mainImage.src;
                mainImage.src = temp;
            })
        })

        const sliderBox = document.querySelector("#slider-box"),
        slides = sliderBox.querySelectorAll("#recommended-slide"),
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

        // buat soalnya ada dua button add to cart sama buy now dia action routenya beda
        // {{route('cart.addToCart', $item->id)}}"
        const addToCartBtn = document.getElementById('addToCartBtn');
        const buyNowBtn = document.getElementById('buyNowBtn');
        const productForm = document.getElementById('product-form');

        const itemId = "{{ $item->id }}"; // Pastikan variabel $item->id ada di dalam view Anda

        addToCartBtn.addEventListener('click', function(e) {
            console.log(itemId);
            productForm.setAttribute('action', "{{ route('cart.addToCart', $item->id) }}");
            productForm.submit();
        });

        buyNowBtn.addEventListener('click', function(e) {
            // {{ route('checkout.buynow.form', ['id' => $item->id]) }}
            productForm.setAttribute('action', "{{ route('checkout.buynow.form', $item->id) }}");
            productForm.submit();
        });
    </script>

@endsection
