<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body class="w-full h-screen relative">
        <img 
            src="{{ url('assets/loginBG.webp')}}" alt="" 
            class="w-full h-full">
        <img src="{{ url('assets/Logo.png')}}" alt="" class="w-24 h-16 absolute top-0 mt-12 right-0 mr-12 hidden min-[500px]:block">

        <div class="absolute h-screen min-[500px]:h-auto top-0 min-[500px]:top-[50%] md:left-[5%] min-[500px]:left-[50%] min-[500px]:translate-x-[-50%] md:translate-x-0 min-[500px]:translate-y-[-50%] md:translate-y-0 p-6 rounded-md font-urbanist min-[500px]:max-w-[600px] w-full backdrop-blur-xl bg-white/50">
            @yield('body')
        </div>
    </body>
    @include('partials.authScript')
</html>