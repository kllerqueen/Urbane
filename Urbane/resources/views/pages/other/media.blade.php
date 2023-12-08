@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center px-5">
        <h1 class="bold-32 md:bold-64 text-primary">MEDIA</h1>
        <div id="slider-box" class='relative flex items-center w-full h-full whitespace-nowrap overflow-y-hidden overflow-x-auto my-12 gap-4 ' >
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage1.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage2.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage3.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage4.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage5.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage6.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
                <div id="slide"  class=" relative flex flex-col bg-white/20 text-white min-w-[140px] min-[500px]:min-w-[200px] lg:min-w-[250px] min-h-[160px] md:min-h-[240px] lg:min-h-[300px] ">
                    <img src="{{ url('assets/media/ScrollingImage7.png') }}" alt=""  class='w-full h-[150px] md:h-[250px]'/>
                </div>
        </div>
    </div>
@endsection