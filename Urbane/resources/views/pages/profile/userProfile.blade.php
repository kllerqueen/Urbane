@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center w-full py-2">
        <div class="container flex flex-col md:flex-row gap-2 w-full items-center md:items-start">
            {{-- Profile Form --}}
            <div class="p-6 shadow-xl bg-white border flex flex-col items-center max-w-[400px] w-full rounded-md">
                <div class="relative flexCenter flex-col">
                    <img src="{{url('assets/PhotoProfile.png')}}" alt="" class="h-[90px] w-[90px] md:w-[140px] md:h-[140px]">
                    <div class="bg-white text-secondary p-2 rounded-full flexCenter absolute top-1 right-[-15px] shadow-xl border">
                        <i class='bx bxs-pencil text-[25px]' ></i>
                    </div>
                    <h1 class="bold-16 md:bold-20 lg:bold-24">Jay Mansieur</h1>
                    <p class="pt-2 regular-12 md:regular-14 lg:regular-16 text-primary">Member</p>
                </div>
                <div class="p-2 w-full bg-primary rounded-md mt-4 text-center">
                    <p class=" bold-12 md:bold-14 lg:bold-16 text-white">Edit Profile</p>
                </div>

                <form action="" class="flex flex-col w-full pt-2 gap-2">
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary ">Email</p>
                        <input type="text" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none border-b-2 " placeholder="Edit Profile"/>
                    </div>
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary">Gender</p>
                        <input type="text" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none border-b-2" placeholder="Edit Profile"/>
                    </div>
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary">Email</p>
                        <input type="text" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none border-b-2" placeholder="Edit Profile"/>
                    </div>
                    <button class="p-2 w-full border-2 border-primary rounded-md mt-4 text-center bold-12 md:bold-14 lg:bold-16 text-primary">
                        Confirm
                    </button>
                </form>
            </div>

            <div class="flex flex-col py-8 md:py-0">
                <div class="grid grid-cols-3 h-fit gap-2">
                    <div class="flex flex-row gap-2 items-center py-2 px-4  shadow-xl rounded-md border-2 text-green-600 bg-[#00143B]" id="grid">
                        <h1 class="bold-16 min-[350px]:bold-24 md:bold-28 lg:bold-64">0</h1>
                        <div class="flex flex-col">
                            <i class='bx bxs-bar-chart-alt-2 text-[35px] md:text-[50px]'></i>
                            <p class=" bold-12 md:bold-16 lg:bold-24 ">Successful</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 items-center py-2 px-4  shadow-xl rounded-md border-2 text-orange-600" id="grid">
                        <h1 class="bold-16 min-[350px]:bold-24 md:bold-28 lg:bold-64">0</h1>
                        <div class="flex flex-col">
                            <i class='bx bxs-bar-chart-alt-2 text-[35px] md:text-[50px]'></i>
                            <p class=" bold-12 md:bold-16 lg:bold-24 ">On Process</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 items-center py-2 px-4 lg:px-8 shadow-xl rounded-md border-2 text-red-600" id="grid">
                        <h1 class="bold-16 min-[350px]:bold-24 md:bold-28 lg:bold-64">0</h1>
                        <div class="flex flex-col">
                            <i class='bx bxs-bar-chart-alt-2 text-[35px] md:text-[50px]'></i>
                            <p class=" bold-12 md:bold-16 lg:bold-24 ">Failed</p>
                        </div>
                    </div>
                </div>
                <h1 class="bold-16 md:bold-24 lg:bold-32 mt-4">History</h1>
                {{-- Successful container --}}
                <div class="flex flex-col mt-4">
                    {{-- Jika ada item --}}
                    <div class="flex flex-row h-[150px]  gap-4 border-2 p-2 rounded-md">
                        <img src="{{url('assets/product/Dummy 1.png')}}" alt="" class="w-[80px] md:w-[120px] md:h-full">
                        <div class="flex flex-col h-full justify-between w-full">
                            <div class="flex flex-col">
                                <h1 class="bold-12 md:bold-16 lg:bold-20">Oversized shirt popelin bias mode white</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-green-600">Status: You’ve been received the order</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-green-600">Arrived on: 1st December 2023</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-green-600">Qty: 1</h1>
                            </div>
                            <h1 class="self-end bold-12 md:bold-14 lg:bold-16">Total : Rp 188,900</h1>
                        </div>
                    </div>

                {{-- Jika Tidak ada Item--}}
                {{--
                    <div class="flex flex-col items-center py-6">
                        <img src="{{url('assets/profile/EmptyOrder.png')}}" alt="">
                        <h1 class="text-center bold-12 md:bold-16 lg:bold-20 text-secondary/40">You don’t have any successful transaction</h1>
                    </div> 
                --}}
                </div>

                {{-- On proccess container --}}
                <div class="flex flex-col mt-4">
                    {{-- Jika ada item --}}
                    <div class="flex flex-row h-[150px]  gap-4 border-2 p-2 rounded-md">
                        <img src="{{url('assets/product/Dummy 1.png')}}" alt="" class="w-[80px] md:w-[120px] md:h-full">
                        <div class="flex flex-col h-full justify-between w-full">
                            <div class="flex flex-col">
                                <h1 class="bold-12 md:bold-16 lg:bold-20">Oversized shirt popelin bias mode white</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-orange-600">Status: Order will be put on shipping express</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-orange-600">ETA: 1st December 2023</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-orange-600">Qty: 1</h1>
                            </div>
                            <h1 class="self-end bold-12 md:bold-14 lg:bold-16">Total : Rp 188,900</h1>
                        </div>
                    </div>

                {{-- Jika Tidak ada Item--}}
                {{-- 
                    <div class="flex flex-col items-center py-6">
                        <img src="{{url('assets/profile/EmptyOrder.png')}}" alt="">
                        <h1 class="text-center bold-12 md:bold-16 lg:bold-20 text-secondary/40">You don’t have any successful transaction</h1>
                    </div> 
                --}}
                </div>

                {{-- Failed container --}}
                <div class="flex flex-col mt-4">
                    {{-- Jika ada item --}}
                    <div class="flex flex-row h-[150px]  gap-4 border-2 p-2 rounded-md">
                        <img src="{{url('assets/product/Dummy 1.png')}}" alt="" class="w-[80px] md:w-[120px] md:h-full">
                        <div class="flex flex-col h-full justify-between w-full">
                            <div class="flex flex-col">
                                <h1 class="bold-12 md:bold-16 lg:bold-20">Oversized shirt popelin bias mode white</h1>
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-red-600">Status: You’ve not paid the payment</h1>
                            </div>
                            <h1 class="self-end bold-12 md:bold-14 lg:bold-16">Total : Rp 188,900</h1>
                        </div>
                    </div>

                {{-- Jika Tidak ada Item --}}
                {{-- 
                    <div class="flex flex-col items-center py-6">
                        <img src="{{url('assets/profile/EmptyOrder.png')}}" alt="">
                        <h1 class="text-center bold-12 md:bold-16 lg:bold-20 text-secondary/40">You don’t have any failed transaction</h1>
                    </div> 
                --}}
                </div>
            </div>
        </div>
    </div>

<script>
    let grids = document.querySelectorAll('#grid');

    grids.forEach((grid,index) => {
        grid.addEventListener("click", function(){
            grids.forEach((g,i)=>{
                if(i!=index){
                    g.classList.remove('bg-[#00143B]');
                }
            })
            grid.classList.add('bg-[#00143B]');
            console.log(index)
        })
    });
</script>
@endsection