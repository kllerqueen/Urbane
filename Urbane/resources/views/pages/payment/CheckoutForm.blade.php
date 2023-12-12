@include('partials.head')
<div class="flex flex-col justify-center items-center overflow-hidden font-urbanist relative w-full">
    <img src="{{url('assets/purchase/PurchaseSplash1.png')}}" alt="" class="bottom-0 left-0 absolute w-[100px] md:w-[200px] lg:w-[300px]">
    <img src="{{url('assets/purchase/PurchaseSplash2.png')}}" alt="" class="top-0 right-[-100px] lg:right-[30%] absolute z-[-1] w-[250px] md:w-[200px] lg:w-[300px]">
    <div class="self-center w-full flex flex-row min-h-screen justify-center relative">
        {{-- {{route('add.order', ['listItem' => $lists]))}} --}}

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ isset($id) ? route('add.buynow.order', ['id' => $id, 'size' => $size, 'color' => $color]) : route('add.order') }}" method="POST" class="flex flex-col px-4 md:max-w-[65%] w-full py-4 relative items-center">
            @csrf
            <a href="{{ route('homePage') }}" class="self-center">
                <img src="{{ url('assets/Logo.png')}}" alt="" class="h-[80px]  hidden lg:flex">
            </a>
           
            <div class="relative flex items-center gap-3 self-start ml-3 md:ml-10">
                <a href="{{route('cart')}}">
                    <div class="bg-white rounded-full p-2 flex items-center justify-center border shadow-xl w-fit">
                        <i class='bx bx-chevron-left text-[30px] text-black'></i>
                    </div>
                </a>
                <h1 class="bold-14 md:bold-18 lg:bold-24 text-primary">Payments</h1>
            </div>
            <div class="flex flex-col max-w-[650px] self-center p-2 items-center relative justify-center w-full mt-12 lg:mt-0">
                <div class="w-full lg:w-[75%]  flex justify-between items-center relative text-center">
                    <div class="flex flex-col items-center">
                        <div class="p-4 md:p-8 bg-white border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit relative " id="steps"> 
                            <h1 class="absolute">1</h1>
                            {{-- Check --}}
                            <div class="w-full h-full absolute bg-black/70 rounded-full flexCenter opacity-0 duration-300 transition-all" id="check">
                                <i class='bx bx-check text-[30px] md:text-[50px] text-green-600'></i>
                            </div>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Customer Details</h1>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="p-4 md:p-8  bg-gray-300 border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit relative" id="steps"> 
                            <h1 class="absolute">2</h1>
                            {{-- Check --}}
                            <div class="w-full h-full absolute bg-black/70 rounded-full flexCenter opacity-0" id="check">
                                <i class='bx bx-check text-[30px] md:text-[50px] text-green-600'></i>
                            </div>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Payment Method</h1>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="p-4 md:p-8 bg-gray-300 border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit relative" id="steps"> 
                            <h1 class="absolute">3</h1>
                            {{-- Check --}}
                            <div class="w-full h-full absolute bg-black/70 rounded-full flexCenter opacity-0" id="check">
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
                <div class="bg-white p-4 md:p-6 lg:p-8 shadow-xl border-2 w-full mt-4 flex flex-col gap-8 rounded-3xl text-secondary" id="form">
                    <div class="flex flex-col min-[500px]:flex-row w-full min-[500px]:justify-between gap-8 min-[500px]:gap-4">
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full ">
                            <i class='bx bxs-user px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4 w-full" placeholder="First name*" name="first_name">
                            @error('first_name')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                      

                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                            <i class='bx bxs-user px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4 w-full" placeholder="Last name*" name="last_name">
                            @error('last_name')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                       
                    </div>
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                        <i class='bx bxs-map px-2 text-[20px]'></i>
                        <input id="addInput" type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Address*" name="address">
                        @error('address')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col min-[500px]:flex-row w-full min-[500px]:justify-between gap-8 min-[500px]:gap-4">
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full ">
                            <img src="{{url('assets/checkout/Mailbox.png')}}" alt="" class="px-2 w-[40px] h-[20px]">
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4  w-full" placeholder="Postal code*" name="postal">
                            @error('postal')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                            <i class='bx bxs-phone px-2 text-[20px]'></i>
                            <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4  w-full" placeholder="Phone Number" name="phone">
                            @error('phone')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20  w-full">
                        <i class='bx bxs-note px-2 text-[20px]' ></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Notes" name="notes">
                        @error('notes')
                                <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- Payment Method Container --}}
                <div class="py-4 md:py-6 px-6 md:px-12 lg:px-20 w-full grid grid-cols-2 grid-rows-2 gap-8  text-secondary hidden" id="form">
                    <div class="bg-white p-2 border-2 flexCenter flex-col rounded-3xl">
                        <h1 class="pb-1 border-black border-b-2 w-full text-center bold-12 md:bold-16 lg:bold-20">COD</h1>
                        <img src="{{url('assets/checkout/COD.png')}}" alt="" class="py-4 w-[80px] h-[100px]">
                        <h1 class="bold-12 md:bold-14 lg:bold-16 text-green-600">Available</h1>
                    </div>
                    <div class="bg-secondary/70 p-2 border-2 flexCenter flex-col rounded-3xl text-gray-200">
                        <h1 class="pb-1 border-gray-200 border-b-2 w-full text-center bold-12 md:bold-16 lg:bold-20">Credit Card</h1>
                        <img src="{{url('assets/checkout/COD.png')}}" alt="" class="py-4 w-[80px] h-[100px]">
                        <h1 class="bold-12 md:bold-14 lg:bold-16 text-red-600">Not Available</h1>
                    </div>
                    <div class="bg-secondary/70 p-4 border-2 flexCenter flex-col rounded-3xl text-gray-200">
                        <h1 class="pb-1 border-gray-200 border-b-2 w-full text-center bold-12 md:bold-16 lg:bold-20">Debit Card</h1>
                        <img src="{{url('assets/checkout/COD.png')}}" alt="" class="py-4 w-[80px] h-[100px]">
                        <h1 class="bold-12 md:bold-14 lg:bold-16 text-red-600">Not Available</h1>
                    </div>
                    <div class="bg-secondary/70 p-4 border-2 flexCenter flex-col rounded-3xl text-gray-200">
                        <h1 class="pb-1 border-gray-200 border-b-2 w-full text-center bold-12 md:bold-16 lg:bold-20">COD</h1>
                        <img src="{{url('assets/checkout/COD.png')}}" alt="" class="py-4 w-[80px] h-[100px]">
                        <h1 class="bold-12 md:bold-14 lg:bold-16 text-red-600">Not Available</h1>
                    </div>
                </div>  

                {{-- Confirmation --}}
                <div class="py-4 md:py-6 px-6 md:px-12 lg:px-20 w-full grid  grid-rows-2 gap-8  text-secondary hidden" id="form">
                    <div class="flex flex-col border-2 border-black rounded-3xl overflow-hidden">
                        <div class="flex items-center w-full p-4  justify-between px-4 n">
                            <div class="flex flex-row items-center gap-4  w-full">
                                <i class='bx bxs-home text-[40px] text-black/80'></i>
                                <div class="flex flex-col w-full">
                                    <h1 class="bold-12 md:bold-16 lg:bold-20">Standard Shipping</h1>
                                    <input type="text" class="regular-8 md:regular-10 lg:regular-12 focus:outline-none w-full bg-transparent rounded-md p-1" placeholder="" disabled id="addOutput">Jl. Pantai Indah Kapuk , Long Beach Jakarta Utara. 14460
                                </div>
                            </div>
                            <i class='bx bxs-pencil text-[30px]' onclick="setDisabled()"></i>
                        </div>
                        <div class="bg-red-500 py-2 px-4 flex items-center">
                            <img src="{{url('assets/checkout/Warning.png')}}" alt="" class="w-[25px] h-[20px]">
                            <h1 class="bold-10 md:bold-12 lg:bold-16 text-white pl-6 ">Please check your detail information carefully!</h1>
                        </div>
                    </div>

                    <div class="flex flex-col border-2 border-black rounded-3xl overflow-hidden justify-center">
                        <div class="flex items-center w-full p-4  justify-between px-4 n">
                            <div class="flex flex-row items-center gap-4  w-full">
                                <img src="{{url('assets/checkout/payments.png')}}" alt="">
                                <div class="flex flex-col w-full">
                                    <h1 class="bold-12 md:bold-16 lg:bold-20">Payment Method</h1>
                                    <h1 class="regular-10 md:regular-12 lg:regular-16">Cash On Delivery</h1>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex flex-row items-center mt-8 gap-6">
                    <button type="button" class="self-center w-fit m-auto  bg-primary text-white bold-12 md:bold-16 lg:bold-20 rounded-md py-2 px-12 md:px-20 " onclick="showNext()" id="continue-button">
                        Continue
                    </button>
                    <button type="submit" class="hidden self-center w-fit m-auto  bg-primary text-white bold-12 md:bold-16 lg:bold-20 rounded-md py-2 px-12 md:px-20" id="confirm-button">
                        Confirm
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
                    @foreach ($items as $item)
                    <div class="h-[75px] md:h-[100px] lg:h-[140px] flex flex-row gap-4">
                        <img src="{{ asset('storage/' . $item->pictures->first()->picture_url) }}" alt=""  class="w-[40%] md:w-[25%] lg:w-[40%]">
                        <div class="flex flex-col justify-between">
                            <div class="flex flex-col">
                                <h1 class="bold-8 md:bold-12 lg:bold-16">{{$item->item_name}}</h1>
                                <h1>size : {{ $item->size }}  | color : {{ $item->color }}</h1>
                                <p class="regular-8 md:regular-8 lg:regular-12">Qty: {{ $item->qty }} pcs</p>
                            </div>
                            <h1 class="self-end bold-12 md:bold-16 lg:bold-20">Rp. {{ number_format($item->item_price * $item->qty, 0, ',', '.') }}</h1>
                        </div>
                    </div>
                    @endforeach
                    
                    {{-- dummy item wt --}}
                    {{-- <div class="h-[75px] md:h-[100px] lg:h-[140px] flex flex-row gap-4">
                        <img src="{{url('assets/product/Dummy 1.png')}}" alt=""  class="w-[40%] md:w-[25%] lg:w-[40%]">
                        <div class="flex flex-col justify-between">
                            <div class="flex flex-col">
                                <h1 class="bold-8 md:bold-12 lg:bold-16">Oversized shirt popelin bias mode white</h1>
                                <p class="regular-8 md:regular-8 lg:regular-12">Qty: 1pcs</p>
                            </div>
                            <h1 class="self-end bold-12 md:bold-16 lg:bold-20">Rp. 198.000</h1>
                        </div>
                    </div> --}}
                 
            
                 @php
                    $subtotal = 0;
                    
                @endphp

                @foreach ($items as $item)
                    @php
                        $subtotal += $item->item_price * $item->qty;
                    @endphp
                @endforeach
                @php
                    $total = $subtotal + 10000;
                    session(['total' => $total]);
                @endphp
                
                  
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

    let input = document.getElementById('input');

    function setDisabled(){
        if(input.disabled){
            input.disabled = false;
        }else{
            input.disabled = true;
            input.classList.toggle('border');
        }
    }

    let count = 0;
    let steps = document.querySelectorAll('#steps');
    let checks = document.querySelectorAll('#check');
    let forms = document.querySelectorAll('#form');
    let continueBTN = document.getElementById('continue-button');
    let confirmBTN = document.getElementById('confirm-button');
    function showNext(){
        count++;
        if(count==2){
            steps[count].classList.add('bg-white');
            check[count-1].classList.remove('opacity-0');
            forms[count-1].classList.add('hidden');
            form[count].classList.remove('hidden');
            continueBTN.classList.add('hidden');
            confirmBTN.classList.remove('hidden')
        }else{
            steps[count].classList.add('bg-white');
            check[count-1].classList.remove('opacity-0');
            forms[count-1].classList.add('hidden');
            form[count].classList.remove('hidden');
            console.log(count);
        }     
    }

   
</script>