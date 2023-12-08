@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center">
        <h1 class="bold-32 md:bold-64 text-primary mb-10">RETURNS</h1>
        <p class="bold-16 md:bold-24 text-primary mb-5 text-center">We apologize that returns are currently not available</p>
        <img class="mb-12" src="{{ url('assets/returns/RobotSad.png') }}" alt="">
    </div>
@endsection