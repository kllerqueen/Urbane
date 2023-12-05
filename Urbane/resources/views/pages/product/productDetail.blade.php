@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    <img src="{{url('assets/product/productDetailBackground.png')}}" alt="" class="z-[-1] w-full h-[60vh] absolute top-20">
    <div class="relative flex items-center gap-3 self-start ml-10 text-white mt-3">
        <div class="bg-white rounded-full p-2 flex items-center justify-center border shadow-xl w-fit">
            <i class='bx bx-chevron-left text-[30px] text-black'></i>
        </div>
        <h1 class="bold-14 md:bold-18 lg:bold-24">Products</h1>
    </div>

    <div class="container w-full px-2"></div>
</div>

    <script>
        
    </script>

@endsection