<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')

    <body class="w-full mx-auto font-urbanist flex relative">
        @include('partials.AdminSidebar')
        @yield('body')
    </body>
</html>
