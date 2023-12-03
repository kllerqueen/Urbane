@extends('template.adminTemplate')


@section('body')

    <div class="px-4 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[30px] mb-[50px] text-primary">

            <h1 class="bold-24 md:bold-32">Dashboard</h1>

            <div class="flex flex-col min-[400px]:flex-row w-full md:items-center gap-4 ">

                <a href="{{ route('addProductPage') }}" class="flex items-center justify-between bg-primary px-4 py-2  rounded-md gap-4 max-w-[200px] w-full">
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
                <li><a href="{{ route('adminPage', "All") }}">All items</a></li>
                <li><a href="{{ route('adminPage', "New") }}">New Arrival</a></li>
                @forelse ($categories as $ctg)
                    <li><a href="{{ route('adminPage', $ctg->category_name) }}">{{ $ctg->category_name }}</a></li>
                @empty

                @endforelse
            </ul>

        </div>

        <div class="flex flex-col gap-[10px] text-white overflow-x-auto ">
            <div class="grid grid-cols-7Admin gap-8 items-center p-4 bg-primary rounded-md w-fit">
                <p>Id</p>
                <p>Name</p>
                <p class="col-span-2">Description</p>
                <p>Price</p>
                <p>Qty</p>
                <p>Action</p>
            </div>

            <div class="flex flex-col gap-2">
                @forelse ($items as $item)
                    <div class="grid grid-cols-7Admin gap-8 items-center px-4 border-2 border-solid border-white py-1 rounded-md w-fit relative">
                        <p>{{ $item->id }}</p>
                        <p class="whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->item_name }}</p>
                        <p class="whitespace-nowrap overflow-hidden text-ellipsis col-span-2">{{ $item->item_desc }}</p>
                        <p>Rp. {{ number_format($item->item_price, 2, '.', ',') }}</p>
                        <p>{{ $item->qty }}</p>
                        <div class="flex items-center gap-2">
                            <form action="{{ url('editProductPage', $item->id) }}" method="POST" class="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class='bx bx-edit text-white'></i>
                                </button>
                            </form>
                            <form action="{{ route('deleteItem',  $item->id) }}" method="POST" class="">
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
        window.onload = function() {
            const navLinks = document.querySelectorAll('#nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(navLink => {
                        navLink.parentElement.classList.remove('active')
                    });
                    link.parentElement.classList.add('active');
                });
            });
            navLinks[0].parentElement.classList.add('active');
        }

    </script>

    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
