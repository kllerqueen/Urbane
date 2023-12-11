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
                    <h1 class="bold-16 md:bold-20 lg:bold-24">{{ Auth::user()->username }}</h1>
                    <p class="pt-2 regular-12 md:regular-14 lg:regular-16 text-primary">Member</p>
                </div>
                <div class="p-2 w-full bg-primary rounded-md mt-4 text-center">
                    <p class=" bold-12 md:bold-14 lg:bold-16 text-white">Edit Profile</p>
                </div>

                <form action="{{ route('user.update.profile') }}" class="flex flex-col w-full pt-2 gap-2" method="POST">
                    @csrf
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary ">Username</p>
                        <input type="text" name="username" class="bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none border-b-2" placeholder="{{ Auth::user()->username }}" />
                        @error('username')
                        <div class="invalid-feedback text-red-600 text-sm">
                            {{$message}}
                            <script>
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 2000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.onmouseenter = Swal.stopTimer;
                                        toast.onmouseleave = Swal.resumeTimer;
                                    }
                                });
                                Toast.fire({
                                    icon: "error",
                                    title: "Update Profile information incorrect"
                                });
                            </script>
                        </div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary">Email</p>
                        <input type="text" name="email" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none border-b-2" placeholder="{{ Auth::user()->email }}" />
                        @error('email')
                        <div class="invalid-feedback text-red-600 text-sm">
                            {{$message}}
                            <script>
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 2000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.onmouseenter = Swal.stopTimer;
                                        toast.onmouseleave = Swal.resumeTimer;
                                    }
                                });
                                Toast.fire({
                                    icon: "error",
                                    title: "Update Profile information incorrect"
                                });
                            </script>
                        </div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary">Password</p>
                        <input type="text" name="password" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none border-b-2" placeholder="********"/>
                        @error('password')
                        <div class="invalid-feedback text-red-600 text-sm">
                            {{$message}}
                            <script>
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 2000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.onmouseenter = Swal.stopTimer;
                                        toast.onmouseleave = Swal.resumeTimer;
                                    }
                                });
                                Toast.fire({
                                    icon: "error",
                                    title: "Update Profile information incorrect"
                                });
                            </script>
                        </div>
                        @enderror
                    </div>
                    <button class="p-2 w-full border-2 border-primary rounded-md mt-4 text-center bold-12 md:bold-14 lg:bold-16 text-primary" type="submit">
                        Confirm
                    </button>
                </form>
            </div>

            <div class="flex flex-col py-8 md:py-0">
                <div class="grid grid-cols-3 h-fit gap-2">
                    <div class="flex flex-row gap-2 items-center py-2 px-4  shadow-xl rounded-md border-2 text-green-600 bg-[#00143B]" id="grid">
                        <h1 class="bold-16 min-[350px]:bold-24 md:bold-28 lg:bold-64">{{$completeTransactions->pluck('id')->unique()->count();}}</h1>
                        <div class="flex flex-col">
                            <i class='bx bxs-bar-chart-alt-2 text-[35px] md:text-[50px]'></i>
                            <p class=" bold-12 md:bold-16 lg:bold-24 ">Successful</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 items-center py-2 px-4  shadow-xl rounded-md border-2 text-orange-600" id="grid">
                        <h1 class="bold-16 min-[350px]:bold-24 md:bold-28 lg:bold-64">{{$onProcessOrders->pluck('id')->unique()->count();}}</h1>
                        <div class="flex flex-col">
                            <i class='bx bxs-bar-chart-alt-2 text-[35px] md:text-[50px]'></i>
                            <p class=" bold-12 md:bold-16 lg:bold-24 ">On Process</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2 items-center py-2 px-4 lg:px-8 shadow-xl rounded-md border-2 text-red-600" id="grid">
                        <h1 class="bold-16 min-[350px]:bold-24 md:bold-28 lg:bold-64">{{$failedOrders->pluck('id')->unique()->count();}}</h1>
                        <div class="flex flex-col">
                            <i class='bx bxs-bar-chart-alt-2 text-[35px] md:text-[50px]'></i>
                            <p class=" bold-12 md:bold-16 lg:bold-24 ">Failed</p>
                        </div>
                    </div>
                </div>
                <h1 class="bold-16 md:bold-24 lg:bold-32 mt-4">History</h1>
                {{-- Successful container --}}
                <div class="flex flex-col mt-4 gap-10" id="container">
                    {{-- Jika ada item --}}
                    @if (!$completeTransactions->isEmpty())
                        @php
                            $prevId1 = null;
                        @endphp
                        @foreach ($completeTransactions as $item)
                        @if ($item->id !== $prevId1)
                            <div class="flex flex-col gap-3 p-4 rounded-md shadow-lg">
                                <h1 class="bold-10 md:bold-12 lg:bold-12">INVOICE ID: URBN/{{$item->created_at}}/{{$item->id}}</h1>

                                {{-- foreach container product detail disini --}}
                                @foreach ($completeTransactions as $itemDetail)
                                @if ($itemDetail->id === $item->id)
                                <div class="flex flex-row gap-2 md:gap-4">
                                    <div class="flex flex-row items-center gap-2">
                                        <img src="{{ asset('storage/' . $itemDetail->picture_url) }}" alt="" class="w-[65px] h-[80px]">
                                        <h1 class="bold-12 md:bold-16 lg:bold-20">x {{$itemDetail->qty}}</h1>
                                    </div>
                                    <div class="flex flex-col h-full justify-center">
                                        <h1 class="bold-14 md:bold-16 lg:bold-20">{{$itemDetail->item_name}}</h1>
                                        <h1 class="regular-10 md:regular-12 lg:regular-14">Color : {{$itemDetail->color}}</h1>
                                        <h1 class="regular-10 md:regular-12 lg:regular-14">Size : {{$itemDetail->size}}</h1>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @php
                                    $prevId1 = $item->id;
                                @endphp
                                
                                <div class="flex flex-col">
                                    <h1 class="bold-10 md:bold-12 lg:bold-14 text-green-600">
                                        Status: You've been received the order
                                    </h1>

                                    <h1 class="bold-10 md:bold-12 lg:bold-14 text-green-600">
                                        Arrived On : {{$item->created_at}}
                                    </h1>
                                    <h1 class="bold-12 md:bold-14 lg:bold-16 text-right w-full">
                                        Total : Rp. {{ number_format($item->total_price, 0, ',', '.') }}
                                    </h1>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    @else
                    {{-- Jika Tidak ada Item --}}
                        <div class="flex flex-col items-center py-6">
                            <img src="{{url('assets/profile/EmptyOrder.png')}}" alt="">
                            <h1 class="text-center bold-12 md:bold-16 lg:bold-20 text-secondary/40">You don’t have any successful transaction</h1>
                        </div>  
                    @endif

               
                </div>



                {{-- On proccess container --}}
                <div class="flex-col mt-4 hidden" id="container">
                    {{-- Jika ada item --}}
                    @if (!$onProcessOrders->isEmpty())
                        @php
                            $prevId = null;
                        @endphp
                        @foreach ($onProcessOrders as $order)
                        @if ($order->id !== $prevId)
                            <div class="flex flex-col gap-3 p-4 rounded-md shadow-lg">
                                <h1 class="bold-10 md:bold-12 lg:bold-12">INVOICE ID: URBN/{{$order->created_at}}/{{$order->id}}</h1>

                                {{-- foreach container product detail disini --}}
                                @foreach ($onProcessOrders as $orderDetail)
                                @if ($orderDetail->order_id === $order->id)
                                <div class="flex flex-row gap-2 md:gap-4">
                                    <div class="flex flex-row items-center gap-2">
                                        <img src="{{ asset('storage/' . $orderDetail->picture_url) }}" alt="" class="w-[65px] h-[80px]">
                                        <h1 class="bold-12 md:bold-16 lg:bold-20">x {{$orderDetail->qty}}</h1>
                                    </div>
                                    <div class="flex flex-col h-full justify-center">
                                        <h1 class="bold-14 md:bold-16 lg:bold-20">{{$orderDetail->item_name}}</h1>
                                        <h1 class="regular-10 md:regular-12 lg:regular-14">Color : {{$orderDetail->color}}</h1>
                                        <h1 class="regular-10 md:regular-12 lg:regular-14">Size : {{$orderDetail->size}}</h1>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                
                               

                                <div class="flex flex-col">
                                    <h1 class="bold-10 md:bold-12 lg:bold-14 text-orange-600">
                                        Status: Order will be put on shipping express
                                    </h1>

                                    <h1 class="bold-10 md:bold-12 lg:bold-14 text-orange-600">
                                        Arrived On : {{$order->updated_at}}
                                    </h1>
                                    <h1 class="bold-12 md:bold-14 lg:bold-16 text-right w-full">
                                        Total : Rp. {{ number_format($order->total_price, 0, ',', '.') }}
                                    </h1>
                                </div>
                            </div>

                            @php
                                $prevId = $order->id;
                            @endphp
                            @endif
                        @endforeach
                        
                        
                    @else
                    {{-- Jika Tidak ada Item--}}
                        <div class="flex flex-col items-center py-6">
                            <img src="{{url('assets/profile/EmptyOrder.png')}}" alt="">
                            <h1 class="text-center bold-12 md:bold-16 lg:bold-20 text-secondary/40">You don’t have any On Process Order</h1>
                        </div>  
                    @endif
                    
                </div>

                {{-- Failed container --}}
                <div class="flex-col mt-4 hidden" id="container">
                    {{-- Jika ada item --}}
                    @if (!$failedOrders->isEmpty())
                    @php
                        $prevId3 = null;
                    @endphp
                    @foreach ($failedOrders as $order)
                    @if ($order->id !== $prevId3)
                        <div class="flex flex-col gap-3 p-4 rounded-md shadow-lg">
                            <h1 class="bold-10 md:bold-12 lg:bold-12">INVOICE ID: URBN/{{$order->created_at}}/{{$order->id}}</h1>

                            {{-- foreach container product detail disini --}}
                            @foreach ($failedOrders as $orderDetail)
                            @if ($orderDetail->order_id === $order->id)
                                <div class="flex flex-row gap-2 md:gap-4">
                                    <div class="flex flex-row items-center gap-2">
                                        <img src="{{ asset('storage/' . $orderDetail->picture_url) }}" alt="" class="w-[65px] h-[80px]">
                                        <h1 class="bold-12 md:bold-16 lg:bold-20">x {{$orderDetail->qty}}</h1>
                                    </div>
                                    <div class="flex flex-col h-full justify-center">
                                        <h1 class="bold-14 md:bold-16 lg:bold-20">{{$orderDetail->item_name}}</h1>
                                        <h1 class="regular-10 md:regular-12 lg:regular-14">Color : {{$orderDetail->color}}</h1>
                                        <h1 class="regular-10 md:regular-12 lg:regular-14">Size : {{$orderDetail->size}}</h1>
                                    </div>
                                </div>
                             @endif
                            @endforeach

                            @php
                                $prevId3 = $order->id;
                            @endphp
                            <div class="flex flex-col">
                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-red-600">
                                    Status: You’ve not paid the payment
                                </h1>

                                <h1 class="bold-10 md:bold-12 lg:bold-14 text-red-600">
                                    Arrived On : {{$order->updated_at}}
                                </h1>
                                <h1 class="bold-12 md:bold-14 lg:bold-16 text-right w-full">
                                    Total : Rp. {{ number_format($order->total_price, 0, ',', '.') }}
                                </h1>
                            </div>
                        </div>

                        @endif
                    @endforeach
                    
                    @else
                    {{-- Jika Tidak ada Item --}}
                        <div class="flex flex-col items-center py-6">
                            <img src="{{url('assets/profile/EmptyOrder.png')}}" alt="">
                            <h1 class="text-center bold-12 md:bold-16 lg:bold-20 text-secondary/40">You don’t have any failed transaction</h1>
                        </div> 
                        
                    @endif
                </div>

            </div>
        </div>
    </div>

<script>
    let grids = document.querySelectorAll('#grid');
    let containers = document.querySelectorAll('#container');
    grids.forEach((grid,index) => {
        grid.addEventListener("click", function(){
            grids.forEach((g,i)=>{
                if(i!=index){
                    containers[i].classList.remove('flex');
                    containers[i].classList.add('hidden');
                    g.classList.remove('bg-[#00143B]');
                }
            })
            containers[index].classList.add('flex');
            containers[index].classList.remove('hidden')
            grid.classList.add('bg-[#00143B]');
            console.log(index)
        })
    });
</script>
@endsection