@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center mb-10">
        <h1 class="bold-24 md:bold-32 lg:bold-52 text-primary mb-5">STORE LOCATION</h1>

        <div class="flex flex-col lg:flex-row justify-between gap-5 px-5">
            <div class="w-auto drop-shadow-2xl">
                <div class="h-auto bg-primary text-white p-5">
                    <h1 class="bold-28 lg:bold-32 mb-5">Office Tower Urbane</h1>
                    <h1 class="md:w-[600px] regular-18 lg:regular-28 mb-5">Jl. Raya Kebon Jeruk no.27, RT.1/RW. 9, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, 11530, Indonesia</h1>
                    <p class="regular-16 lg:regular-18 mb-5">( 021 ) 804 169 6969</p>
                    <a href="https://maps.app.goo.gl/jmVsURsQP3DrBNLg8" class="regular-28 lg:regular-32">View Location ></a>
                </div>                
            </div>

            <div>
                <img src="{{ url('assets/location/UrbaneLocation.png') }}" alt="/">
            </div>
        </div>
    </div>
@endsection