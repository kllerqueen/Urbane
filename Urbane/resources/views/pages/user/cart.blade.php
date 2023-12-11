@extends('template.template')

@section('body')
@if(session('NoItem'))
    <div class="bg-red-500 text-white p-4 mb-4">
        {{ session('NoItem') }}
    </div>
@endif
<div class="flex flex-col justify-center items-center overflow-hidden">
    <div class="container flex flex-col gap-2 my-6 px-2">
        <h1 class="bold-24 md:bold-40 lg:bold-52 text-center text-primary">Cart</h1>
        <div class="flex flex-col md:flex-row gap-2">
            {{-- Item Card Section--}}
            <div class="max-w-[850px] w-full  flex flex-col gap-2">

                @foreach ($lists as $CartItem)
                <div class="flex  items-center p-4 bg-[#008DFF]/30 rounded-md gap-4 relative max-h-[220px]">
                    <div class="h-full flex items-center gap-2 ">
                        <div class="h-6 w-6 border-2 border-black/30 rounded-md overflow-hidden relative" onclick="setChecked()" id="check-button">
                            <div class="flex hidden justify-center items-center bg-green-500 w-full h-full" id="check-box">
                                <i class='bx bx-check text-white text-[25px]' ></i>
                            </div>
                        </div>
                    </div>

                    <div class="w-[30%] min-[400px]:w-[20%] md:w-[30%] lg:w-[20%] h-[100px] md:h-[180px]">
                        <img src="{{ asset('storage/' . $CartItem->item->pictures->first()->picture_url) }}" alt="" class="w-full h-full">
                    </div>

                   <div class="flex flex-col justify-between h-full">
                        <div class="flex flex-col py-2">
                            <h1 class="bold-12 md:bold-20 lg:bold-24">{{$CartItem->item->item_name}}</h1>
                            <h1 class="bold-8 md:bold-16 lg:bold-20 text-secondary">ID: {{$CartItem->item->id}}</h1>
                            <h1 class="bold-8 md:bold-16 lg:bold-20 text-secondary">Rp {{ number_format($CartItem->item->item_price * $CartItem->qty, 0, ',', '.') }}</h1>

                            {{-- qty increment dec --}}
                            <form action="{{route('update.cart.qty', ['item_id' => $CartItem->item_id, 'size' => $CartItem->size, 'color' => $CartItem->color])}}" method="post">
                                @csrf
                                @method("PATCH")
                                <input type="hidden" name="_method" value="PATCH">
                                <div class="d-flex gap-10 items-center space-x-2">
                                    <span>Qty  </span>
                                    <button type="submit" name="operation" value="decrease" class="bg-white text-black font-bold py-1 px-2 rounded">-</button>
                                    <span id="qty-display" class="bold-8 md:bold-16 lg:bold-20 text-secondary">{{ $CartItem->qty }}</span>
                                    <button type="submit" name="operation" value="increase" class="bg-black text-white font-bold py-1 px-2 rounded">+</button>
                                </div>
                            </form>

                        </div>
                   </div>
                   <form method="POST" action="{{ route('cart.delete', ['item_id' => $CartItem->item_id, 'size' => $CartItem->size, 'color' => $CartItem->color]) }}">
                        @csrf
                        <button type="submit" class="absolute top-2 right-2">
                            <i class='bx bx-x text-[35px] '></i>
                        </button>
                   </form>
                </div>
                @endforeach
            </div>

            <div class="text-red-500">
                @if($errors->has('error'))
                    {{ $errors->first('error') }}
                @endif
            </div>

            {{-- Order Summary Section --}}
            <div class="max-w-[450px] bg-secondary/30 w-full p-4 rounded-md flex flex-col shadow-2xl border-2">
                @php
                    $subtotal = 0;
                @endphp

                @foreach ($lists as $CartItem)
                    @php
                        $subtotal += $CartItem->item->item_price * $CartItem->qty;
                    @endphp
                @endforeach

                <h1 class="bold-16 md:bold-24">Order Summary</h1>
                <div class="w-full flex justify-between mt-2">
                    <h1 class="regular-12 md:regular-14 lg:regular-16">Subtotal</h1>
                    <h1>Rp {{ number_format($subtotal, 0, ',', '.') }}</h1>
                </div>
                <div class="w-full flex justify-between mt-2">
                    <h1 class="regular-12 md:regular-14 lg:regular-16">Estimated Shipping Payment</h1>
                    <h1>Rp {{ number_format(10000, 0, ',', '.') }}</h1>
                </div>

                @php
                    $total = $subtotal + 10000;
                @endphp

                <hr class="h-[3px] w-full bg-black mt-2 ">
                <div class="w-full flex justify-between mt-2 text-secondary/80 ">
                    <h1 class="bold-12 md:bold-16 lg:bold-20 ">Estimated Total</h1>
                    <h1>Rp {{ number_format($total, 0, ',', '.') }}</h1>
                </div>
                <a href="{{ route('checkout.form') }}"><button type="submit" class="mt-12 w-full py-2 bg-primary text-white bold-12 md:bold-16 lg:bold-20 rounded-md">Checkout</button></a>
            </div>
        </div>
    </div>
</div>

    <script>

    </script>

@endsection
