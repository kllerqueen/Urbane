@extends('template.template')

@section('body')
    <div class="flex flex-col items-center h-fit">
        <h1 class="bold-64 text-primary">TERMS & CONDITIONS</h1>
        <div class="container w-full my-12 flex flex-col gap-4 md:gap-8 lg:gap-12 h-fit">
            <div class="w-full flex flex-col p-4 gap-4">
                <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                    <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">Acceptance of Terms</h1>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2" id="down" onclick="dropDown()">
                        <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                    </div>
                    <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="up" onclick="dropDown()">
                        <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                    </div>
                </div>
                <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 h-0 overflow-hidden transition-all duration-300">
                    You agree to comply with and be governed by these terms and conditions by accessing and using the Urbane online shop (the "Website"). Please do not use this Website if you do not agree to these terms.
                </h1>
            </div>

        </div>
    </div>
    <script>
        let up = document.getElementById('up');
        let down = document.getElementById('down');
        let dropdown = document.getElementById('dropdown');

        function dropDown(){
            up.classList.toggle('hidden');
            down.classList.toggle('hidden');
            dropdown.classList.toggle('h-0');
        }
    </script>
@endsection