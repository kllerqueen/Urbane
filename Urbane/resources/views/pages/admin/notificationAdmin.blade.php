<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('partials.head')
    <body class="w-full h-screen bg-gradient-to-br from-primary/60 to-white ">
        <div class="relative w-full h-full overflow-hidden">
            <div class="absolute w-[80%] md:w-[45%] lg:w-[30%] top-[45%] left-[50%] translate-x-[-50%] translate-y-[-50%] flex flex-col items-center justify-center z-50 text-primary ">
                <img src="{{ url('assets/admin/SuccessAvatar.png')}}"  alt="" class=" w-full">
                <h1 class="bold-18 md:bold-24 lg:bold-28">Product Added!</h1>
                <p class="regular-14 md:regular-16 lg:regular-18">Something</p>
            </div>
            <img src="{{ url('assets/admin/BubbleBigLeftBottom.png')}}" alt="" class="absolute bottom-0 left-0 hidden md:block">
            <img src="{{ url('assets/admin/BubbleBigRightTop.png')}}" alt="" class="absolute h-full top-0 right-[-40px] md:right-0">
            <a href="/admin/dashboard/All" class="absolute top-4 right-4 bg-white text-black p-2 rounded-full z-50 flex items-center justify-center">
                <i class='bx bx-x text-[30px] '></i>
            </a>
            
        </div>
    </body>
</html>