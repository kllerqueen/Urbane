<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.head')
    <body class="w-[100vw] h-screen relative overflow-hidden bg-bgcolor">
        <div class="relative overflow-hidden w-full h-full p-2 text-center">
            <img src="{{ url('assets/SecurityBG.webp') }}" alt="" class="absolute bottom-12 min-w-[1000px]">

            <div class="absolute h-fit  top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]  p-10 rounded-md font-urbanist max-w-[600px] w-full backdrop-blur-xl bg-white/50">
                @yield('body')
            </div>
        </div>
    </body>
    @include('partials.authScript')
</html>