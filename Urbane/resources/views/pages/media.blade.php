@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center">
        <h1 class="bold-64 text-primary">MEDIA</h1>

        <div class="flex flex-row overflow-x-auto whitespace-nowrap">
            <div class="top-45 w-full h-20 absolute bg-white rounded-[500px]"></div>
            <img class="py-10 pr-10" src="{{ url('assets/media/ScrollingImage1.png') }}" alt="/">
            <img class="p-10" src="{{ url('assets/media/ScrollingImage2.png') }}" alt="/">
            <img class="p-10" src="{{ url('assets/media/ScrollingImage3.png') }}" alt="/">
            <img class="p-10" src="{{ url('assets/media/ScrollingImage4.png') }}" alt="/">
            <img class="p-10" src="{{ url('assets/media/ScrollingImage5.png') }}" alt="/">
            <img class="p-10" src="{{ url('assets/media/ScrollingImage6.png') }}" alt="/">
            <img class="py-10 pl-10" src="{{ url('assets/media/ScrollingImage7.png') }}" alt="/">
        </div>
    </div>
@endsection