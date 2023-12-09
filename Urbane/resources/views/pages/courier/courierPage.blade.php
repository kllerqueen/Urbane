pppppppp@php
    // dd($listOrderComplete, $listOrderUnComplete)
@endphp
@extends('template.courierTemplate')

@section('body')

    <div class="px-4 md:px-8 py-2 md:py-4 w-full">

        <div class="flex gap-[30px] mb-[50px] text-primary justify-between items-center">
            <h1 class="bold-24 md:bold-32">Dashboard</h1>
        </div>
        <div class="flex flex-col space-y-5">
            <h1 class="text-white pb-4 bold-16 md:bold-20 lg:bold-24">Order Complete</h1>
            <div class="flex flex-col gap-[10px] text-white overflow-x-auto ">
            <div class="grid grid-cols-7Admin gap-8 items-center p-4 bg-primary rounded-md w-fit">
                <p>Id</p>
                <p>Name</p>
                <p class="col-span-2">Address</p>
                <p>Postal Code</p>
                <p>Status</p>
                <p>Action</p>
            </div>

            <div class="flex flex-col gap-2">
                @forelse ($listOrderComplete as $orderComplete)
                <form action="{{ route('update.status.order', ['order_id' => $orderComplete->id ]) }}" method="POST">
                    <div class="grid grid-cols-7Admin gap-8 items-center px-4 border-2 border-solid border-white py-1 rounded-md w-fit relative">
                            <p>{{ $orderComplete->id }}</p>
                            <p class="whitespace-nowrap overflow-hidden text-ellipsis">{{ $orderComplete->customer_id }} </p>
                            <p class="whitespace-nowrap overflow-hidden text-ellipsis col-span-2">{{ $orderComplete->address }}</p>
                            <p>{{ $orderComplete->postal_Code }}</p>
                                @csrf
                                <select name="status" id="" class="text-white outline-none bg-black border-none">
                                <option value="Complete" @if($orderComplete->status === 'Complete') selected @endif>Complete</option>
                                <option value="OnProcess" @if($orderComplete->status === 'OnProcess') selected @endif>On Process</option>
                                <option value="Failed" @if($orderComplete->status === 'Failed') selected @endif>Failed</option>
                            </select>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-fit">Save</button>
                        </div>
                    </div>
                    @empty
                    <p>No items available</p>
                </form>
                @endforelse
                
            </div>
        </div>
        <div class="flex flex-col gap-[10px] text-white overflow-x-auto ">
            <h1 class="text-white py-4 bold-16 md:bold-20 lg:bold-24">Order Incomplete</h1>
            <div class="grid grid-cols-7Admin gap-8 items-center p-4 bg-primary rounded-md w-fit">
                <p>Id</p>
                <p>Customer Id</p>
                <p class="col-span-2">Address</p>
                <p>Postal Code</p>
                <p>Status</p>
                <p>Action</p>
            </div>

            <div class="flex flex-col gap-2">
                @forelse ($listOrderUnComplete as $orderUnComplete)
                <form action="{{ route('update.status.order', ['order_id' => $orderUnComplete->id ]) }}" method="POST">
                    <div class="grid grid-cols-7Admin gap-8 items-center px-4 border-2 border-solid border-white py-1 rounded-md w-fit relative">   
                                <p>{{ $orderUnComplete->id }}</p>
                                <p class="whitespace-nowrap overflow-hidden text-ellipsis">{{ $orderUnComplete->customer_id }} </p>
                                <p class="whitespace-nowrap overflow-hidden text-ellipsis col-span-2">{{ $orderUnComplete->address }}</p>
                                <p>{{ $orderUnComplete->postal_Code }}</p>
                                    @csrf <!-- Pastikan untuk menyertakan csrf token -->
                                    <select name="status" class="text-white outline-none bg-black border-none">
                                        <option value="Complete" @if($orderUnComplete->status === 'Complete') selected @endif>Complete</option>
                                        <option value="OnProcess" @if($orderUnComplete->status === 'OnProcess') selected @endif>On Process</option>
                                        <option value="Failed" @if($orderUnComplete->status === 'Failed') selected @endif>Failed</option>
                                    </select>
                                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-fit">Save</button>
                                    
                                </div>
                            </div>
                            @empty
                            <p>No items available</p>
                        </form>
                @endforelse
            </div>
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


@endsection
