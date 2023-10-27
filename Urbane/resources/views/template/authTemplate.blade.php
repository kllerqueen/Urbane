<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.head')
    <body class="w-full h-screen relative overflow-hidden">
        <img 
            src="{{ url('assets/loginBG.webp')}}" alt="" 
            class="w-full h-full absolute top-[50%] translate-y-[-50%] object-cover">
        <img src="{{ url('assets/Logo.png')}}" alt="" class="w-24 h-16 absolute top-0 mt-6 right-0 mr-6 hidden min-[500px]:block">

        <div class="absolute h-screen min-[500px]:h-auto top-0 min-[500px]:top-[50%] md:left-[5%] min-[500px]:left-[50%] min-[500px]:translate-x-[-50%] md:translate-x-0 min-[500px]:translate-y-[-50%]  p-10 rounded-md font-urbanist min-[500px]:max-w-[500px] w-full backdrop-blur-xl bg-white/50">
            @yield('body')
        </div>
    </body>
    @include('partials.authScript')
</html>