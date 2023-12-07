@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center mb-5">
        <h1 class="bold-32 md:bold-52 text-primary mb-5">STORE LOCATION</h1>

        <div class="flex flex-row justify-between gap-14">
            <div class="h-auto bg-primary">
                <h1 class="bold-32 text-white">Office Tower Urbane</h1>
                <p class="w-[652px] regular-28 text-white">Jl. Raya Kebon Jeruk no.27, RT.1/RW. 9, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, 11530, Indonesia</p>
            </div>

            <div>
                <img src="{{ url('assets/location/UrbaneLocation.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection