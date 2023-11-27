@extends('template.adminTemplate')


@section('body')

    <div class="px-4 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[30px] mb-[50px] text-primary">

            <h1 class="bold-24 md:bold-32">Dashboard</h1>

            <div class="flex flex-col min-[400px]:flex-row w-full md:items-center gap-4 ">

                <a href="/" class="flex items-center justify-between bg-primary px-4 py-2  rounded-md gap-4 max-w-[200px] w-full">
                    <h1 class="text-white bold-16 lg:bold-20 text-start  py-1">Add Product</h1>
                    <div class=" shadow-xl rounded-full p-2 flex justify-center items-center  bg-white w-8 h-8">
                        <h1 class="bold-20">+</h1>
                    </div>
                </a>

                <div class="flex flex-row items-center w-full  bg-white shadow-xl h-fit py-2 px-2 rounded-full border">
                    <i class='bx bx-search bx-sm border-r-2 px-2 border-primary bx-primary text-primary' ></i>
                    <input type="text" class=" outline-none w-full px-2 regular-12 md:regular-16" placeholder="Search Any Product">
                </div>

            </div>

            <ul class="flex flex-row w-full gap-2 md:justify-between px-[20px] font-semibold text-2xl flex-wrap">
                <li>All items</li>
                <li>New Arrival</li>
                @forelse ($categories as $ctg)
                    <li>{{ $ctg->category_name }}</li>
                @empty

                @endforelse
            </ul>

        </div>

        <div class="flex flex-col gap-[10px] text-white overflow-x-auto ">
            <div class="grid grid-cols-7Admin gap-2 items-center p-4 bg-primary rounded-md w-fit">
                <p>Id</p>
                <p>Picture</p>
                <p>Name</p>
                <p>Description</p>
                <p>Price</p>
                <p>Size</p>
                <p>Total Qty</p>
            </div>
        
            <div class="flex flex-col">
                @forelse ($items as $item)
                    <div class="grid grid-cols-7Admin gap-2 items-center  px-4 border-2 border-solid border-white py-1 rounded-md w-fit relative">
                        <p>{{ $item->id }}</p>
                        <p>Picture</p>
                        <p>{{ $item->item_name }}</p>
                        <p class="whitespace-nowrap overflow-hidden max-w-[200px] text-ellipsis">{{ $item->item_desc }}</p>
                        <p>Rp. {{ number_format($item->item_price, 2, '.', ',') }}</p>
                        <div class="flex items-center absolute top-[50%] right-1 translate-y-[-50%] gap-2">
                            <form action="{{ url('admin/delete-item/' . $item->id) }}" method="POST" class="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class='bx bx-edit text-white'></i>
                                </button>
                            </form>
                            <form action="{{ url('admin/delete-item/' . $item->id) }}" method="POST" class="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class='bx bxs-trash-alt text-red-500'></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>No items available</p>
                @endforelse
            </div>
        </div>
        
        

    </div>

    <script>


    </script>
    
    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
