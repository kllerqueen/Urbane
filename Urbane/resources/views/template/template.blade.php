<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    
    <body class="w-full mx-auto font-urbanist">
        @include('partials.navbar')
        @yield('body')
        @include('partials.footer')
        @include('partials.AddScript')
    </body>
</html>