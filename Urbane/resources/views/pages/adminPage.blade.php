@extends('template.adminTemplate')


@section('body')

    <div class="p-4">

        <div class="flex flex-col gap-[50px] mb-[50px]">

            <h1>Dahsboard</h1>

            <div class="flex flex-row w-full">

                <button>Add Product</button>

                <div class="flex flex-row items-center w-full md:w-3/4 lg:w-1/2 bg-white shadow-xl h-fit py-2 px-2 rounded-full border">
                    <i class='bx bx-search bx-sm border-r-2 px-2 border-primary bx-primary text-primary' ></i>
                    <input type="text" class=" outline-none w-full px-2 regular-12 md:regular-16" placeholder="Search Any Product">
                </div>

            </div>

            <li class="flex flex-row w-full justify-between px-[20px] font-semibold text-2xl">
                <ul>All items</ul>
                <ul>New Arrival</ul>
                @forelse ($categories as $ctg)
                    <ul>{{ $ctg->category_name }}</ul>
                @empty

                @endforelse
            </li>

        </div>

        <div class="flex flex-col gap-[10px]">

            <div class="flex flex-row justify-between items-center p-4">
                <p>Id</p>
                <p>Picture</p>
                <p>Name</p>
                <p>Description</p>
                <p>Price</p>
                <p>Total Qty</p>
            </div>

            @forelse ($items as $item)
                <div class="flex flex-row justify-between items-center w-full px-4 border-2 border-solid border-black">
                    <p>{{ $item->id }}</p>
                    <p>Picture</p>
                    <p>{{ $item->item_name }}</p>
                    <p class="whitespace-nowrap overflow-hidden max-w-[200px] text-ellipsis">{{ $item->item_desc }}</p>
                    <p>Rp. {{ number_format($item->item_price, 2, '.', ',') }}</p>
                    <form action="/delete-item/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @empty
                <p>No items available</p>
            @endforelse

        </div>

    </div>

@endsection
