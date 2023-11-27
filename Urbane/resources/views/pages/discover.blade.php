@extends('template.template')

@section('body')
<div class="flex justify-center">
    <div class="flex w-[1028px] h-[74px] bg-[#00457D] m-5 px-10 justify-between items-center rounded-[50px]">
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">All items</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">New Arrival</button>
        </div>
        <div class="flex bg-[#FFFFFF] p-1 px-3 rounded-[50px]">
            <button class="filter-button text-[#00457D] bold-24">👨‍🎓 Man 👨‍🎓</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">Woman</button>
        </div>
        <div class="flex p-1 px-3 rounded-[50px]">
            <button class="filter-button text-white bold-24">Apparel</button>
        </div>
    </div>
</div>

<script>
    
</script>

@endsection