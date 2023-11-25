<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')

    <body class="w-full font-urbanist flex relative bg-black">
        @include('partials.AdminSidebar')
        @yield('body')
    </body>
</html>
