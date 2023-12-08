@include('partials.head')
<div class="flex flex-col justify-center items-center overflow-hidden font-urbanist relative w-full">
    <img src="{{url('assets/purchase/PurchaseSplash1.png')}}" alt="" class="bottom-0 left-0 absolute w-[100px] md:w-[200px] lg:w-[300px]">
    <img src="{{url('assets/purchase/PurchaseSplash2.png')}}" alt="" class="top-0 right-[-100px] lg:right-[30%] absolute z-[-1] w-[250px] md:w-[200px] lg:w-[300px]">
    <div class="self-center w-full flex flex-row min-h-screen justify-center relative">
        <form method="POST" class="flex flex-col px-4 md:max-w-[65%] w-full py-4 relative items-center">
            <a href="{{ route('homePage') }}" class="self-center">
                <img src="{{ url('assets/Logo.png')}}" alt="" class="h-[80px]  hidden lg:flex">
            </a>
            <div class="relative flex items-center gap-3 self-start ml-3 md:ml-10">
                <div class="bg-white rounded-full p-2 flex items-center justify-center border shadow-xl w-fit">
                    <i class='bx bx-chevron-left text-[30px] text-black'></i>
                </div>
                <h1 class="bold-14 md:bold-18 lg:bold-24 text-primary">Payments</h1>
            </div>
            <div class="flex flex-col max-w-[650px] self-center p-2 items-center relative justify-center w-full mt-12 lg:mt-0">
                <div class="w-full lg:w-[75%]  flex justify-between items-center relative text-center">
                    <div class="flex flex-col items-center">
                        <div class="p-4 md:p-8 bg-white border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit relative"> 
                            <h1 class="absolute">1</h1>
                            {{-- Check --}}
                            <div class="w-full h-full absolute bg-black/70 rounded-full flexCenter" id="check">
                                <i class='bx bx-check text-[30px] md:text-[50px] text-green-600'></i>
                            </div>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Customer Details</h1>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="p-4 md:p-8  bg-gray-300 border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit relative"> 
                            <h1 class="absolute">2</h1>
                            {{-- Check --}}
                            <div class="w-full h-full absolute bg-black/70 rounded-full flexCenter" id="check">
                                <i class='bx bx-check text-[30px] md:text-[50px] text-green-600'></i>
                            </div>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Payment Method</h1>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="p-4 md:p-8 bg-gray-300 border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit relative"> 
                            <h1 class="absolute">3</h1>
                            {{-- Check --}}
                            <div class="w-full h-full absolute bg-black/70 rounded-full flexCenter" id="check">
                                <i class='bx bx-check text-[30px] md:text-[50px] text-green-600'></i>
                            </div>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Confirmation</h1>
                    </div>
                    
                </div>
                <hr class="border-2 w-[80%] border-stroke absolute z-[-1] top-[40%] translate-y-[-50%] left-[50%] translate-x-[-50%]">
            </div>

            <div class="max-w-[700px] w-full flex flex-col items-center">
                {{-- Customer Detail Container --}}
                <div class="bg-white p-4 md:p-6 lg:p-8 shadow-xl border-2 w-full mt-4 flex flex-col gap-8 rounded-3xl text-secondary">
                    <div class="flex flex-col min-[500px]:flex-row w-full min-[500px]:justify-between gap-8 min-[500px]:gap-4">
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full ">
                            <i class='bx bxs-user px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4 w-full" placeholder="First name*">
                        </div>
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                            <i class='bx bxs-user px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4 w-full" placeholder="Last name*">
                        </div>
                    </div>
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                        <i class='bx bxs-map px-2 text-[20px]'></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Last name*">
                    </div>
                    <div class="flex flex-col min-[500px]:flex-row w-full min-[500px]:justify-between gap-8 min-[500px]:gap-4">
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full ">
                            <i class='bx bxs-user px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4  w-full" placeholder="First name*">
                        </div>
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                            <i class='bx bxs-phone px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4  w-full" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                        <i class='bx bxs-note px-2 text-[20px]' ></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Notes">
                    </div>
                </div>

                {{-- Payment Method Container --}}
                <div class="p-4 md:p-6 lg:p-8 w-full mt-4 grid grid-cols-2 grid-rows-2 gap-8  text-secondary ">
                    <div class="">

                    </div>
                </div>  
                <div class="flex flex-row items-center mt-8 gap-6">
                    <button class="self-center w-fit m-auto  bg-primary text-white bold-12 md:bold-16 lg:bold-20 rounded-md py-2 px-12 md:px-20 ">
                        Continue
                    </button>
                    <div class="h-full flex items-center justify-center lg:hidden" onclick="showPopup()">
                        <i class='bx bx-cart text-[30px] bg-white shadow-2xl border-2 rounded-md px-4 py-2' ></i>
                    </div>
                </div>
            </div>
        </form>
        
        
        
        <div class="w-full h-full bg-black/10 absolute hidden " id="bg-popup"></div>
        <div class="hidden absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] lg:translate-x-0 lg:translate-y-0 lg:left-0 lg:top-0 lg:relative lg:flex w-[90%] lg:w-[35%] bg-stroke flex-col justify-between overflow-y-auto" id="popup" onclick="showPopup()">
            <div class="flex flex-col gap-2 py-4 px-8">
                <h1 class="bold-12 md:bold-16 lg:bold-20 py-2 border-b-2 border-black">Your Item</h1>
                <div class="flex flex-col w-full gap-2 overflow-y-scroll h-[65vh]">

                    {{-- item card --}}
                    @foreach ($lists as $list)
                    <div class="h-[75px] md:h-[100px] lg:h-[140px] flex flex-row gap-4">
                        <img src="{{ asset('storage/' . $list->item->pictures->first()->picture_url) }}" alt=""  class="w-[40%] md:w-[25%] lg:w-[40%]">
                        <div class="flex flex-col justify-between">
                            <div class="flex flex-col">
                                <h1 class="bold-8 md:bold-12 lg:bold-16">{{$list->item->item_name}}</h1>
                                <p class="regular-8 md:regular-8 lg:regular-12">Qty: {{$list->qty}} pcs</p>
                            </div>
                            <h1 class="self-end bold-12 md:bold-16 lg:bold-20">Rp. {{ number_format($list->item->item_price, 0, ',', '.') }}</h1>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- dummy item wt --}}
                    <div class="h-[75px] md:h-[100px] lg:h-[140px] flex flex-row gap-4">
                        <img src="{{url('assets/product/Dummy 1.png')}}" alt=""  class="w-[40%] md:w-[25%] lg:w-[40%]">
                        <div class="flex flex-col justify-between">
                            <div class="flex flex-col">
                                <h1 class="bold-8 md:bold-12 lg:bold-16">Oversized shirt popelin bias mode white</h1>
                                <p class="regular-8 md:regular-8 lg:regular-12">Qty: 1pcs</p>
                            </div>
                            <h1 class="self-end bold-12 md:bold-16 lg:bold-20">Rp. 198.000</h1>
                        </div>
                    </div>
                 
            
                @php
                    $subtotal = 0;
                    $total = $subtotal + 10000;
                @endphp

                @foreach ($lists as $CartItem)
                    @php
                        $subtotal += $list->item->item_price * $list->qty;
                    @endphp
                @endforeach

                
                  
            <div class="py-4 px-8 bg-primary flex-col regular-8 md:regular-12 lg:regular-14 text-white">
                <div class="flex flex-row justify-between ">
                    <h1 class="">Product Price</h1>
                    <h1>Rp {{ number_format($subtotal, 0, ',', '.') }}</h1>
                </div>
                <div class="flex flex-row justify-between ">
                    <h1 class="">Shipping Price</h1>
                    <h1>Rp 10.000</h1>
                </div>
                <div class="flex flex-row justify-between bold-12 md:bold-16 lg:bold-20 mt-8">
                    <h1 class="">Total Price</h1>
                    <h1>Rp. {{ number_format($total, 0, ',', '.') }}</h1>
                </div>
            </div>
            
        </div>
    </div>  
</div>

<script>
    let BGpopup = document.getElementById('bg-popup');
    let popup = document.getElementById('popup');

    function showPopup(){
        if(BGpopup.classList.contains('hidden')){
            BGpopup.classList.remove('hidden');
            popup.classList.remove('hidden')
        }else{
            BGpopup.classList.add('hidden');
            popup.classList.add('hidden')
        }
    }

    
</script>