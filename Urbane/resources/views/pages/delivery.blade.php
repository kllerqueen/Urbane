@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center px-5">
        <h1 class="bold-32 md:bold-52 text-primary">Delivery</h1>
        <div class="flex flex-row justify-between gap-14">
            <div class="w-[280px]">
                <h1 class="bold-24 text-secondary mb-5">Various shipping methods, deadlines, and fees</h1>
                <a href="/" class="flex flex-row justify-center items-center w-full outline outline-1 rounded-lg h-auto p-2 text-primary bold-20">Any Questions?</a>
            </div>

            <div>
                <img src="{{ url('assets/delivery/DeliveryBox.png') }}" class="mb-5" alt="/">
                <p class="regular-16 my-2">Delivery options may differ depending on the delivery address, when your order is placed, and the availability of the selected items.</p>
                <p class="regular-16 my-2">When we process your order, we will display you the one <strong>shipping options</strong>, as well as the <strong>fees</strong> and <strong>estimation delivery date.</strong></p>
                <p class="regular-16 my-2">Please keep in mind that deliveries will only be made on <strong>business days</strong>.</p>
                <p class="regular-16 my-2">We remind you that your order's delivery address <strong>must be in the same</strong> market/region as you made your purchase.</p>

                <div>
                    <p class="bold-18 my-2">Deliver to your location</p>
                    <ul class="list-disc px-10">
                        <li class="regular-18"><strong>Delivery within 2-6 business days</strong> - Cost depends on distance</li>
                        <p class="regular-14 my-2">The distance of the delivery place will affect the cost for delivery. And currently there is still a shipping fee.</p>
                    </ul>
                    <div class="flex flex-row items-center gap-1">
                        <p class="regular-14 my-2">You can modify the delivery address by accessing your order details in </p>
                        <a href="/" class="bold-14 text-primary">Account Profile</a>
                    </div>
                </div>

                <div class="flex justify-center items-center my-5 p-3 bg-stroke">
                    <p class="regular-14"><strong>Note: </strong>Depending on when you submit your order, some of the following options may not be available. </p>
                </div>
            </div>
        </div>
    </div>
@endsection