@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    {{-- Filter  Selection --}}
    <div class="flex container w-full py-2 md:py-4 text-white bg-primary m-5 px-2 md:px-10 justify-between items-center rounded-[50px]">
        <div class="flex p-1 md:px-3 rounded-[50px] ">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">All items</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px] bg-white text-primary">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">🔥 New Arrival 🔥</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">Man</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]">
            <a href="" class="filter-button bold-12 sm:bold-16 md:bold-24" id="cat">Woman</a>
        </div>
        <div class="flex p-1 md:px-3 rounded-[50px]  ">
            <a href="" class="filter-buttonbold-12 md:bold-24" id="cat">Accessories</a>
        </div>
    </div>
    

</div>

    <script>
        
    </script>

@endsection