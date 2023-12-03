<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.head')
    <body class="w-[100vw] h-screen relative overflow-hidden bg-bgcolor font-urbanist">
        <div class="bg-white absolute top-0 w-full  px-2 md:px-12 lg:px-20 py-2 flex items-center">
            <img src="{{url('assets/Logo.png')}}" alt="" class="w-[75px] md:w-[100px]">
            <h1 class="text-primary px-3 bold-24 md:bold-28 lg:bold-32">Urbane</h1>
        </div>
        <div class="relative overflow-hidden w-full h-full p-2 text-center">
            <img src="{{ url('assets/forgetPassword/SecurityBG.webp') }}" alt="" class="absolute bottom-12 min-w-[1000px]">

            <div class="absolute h-fit  top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]  font-urbanist max-w-[600px] w-full">
                @yield('body')
            </div>
        </div>
    </body>
    @include('partials.authScript')
</html>