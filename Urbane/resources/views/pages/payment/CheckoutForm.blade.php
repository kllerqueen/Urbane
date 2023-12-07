@include('partials.head')
<div class="flex flex-col justify-center items-center overflow-hidden font-urbanist relative">
    <img src="{{url('assets/purchase/PurchaseSplash1.png')}}" alt="" class="bottom-0 left-0 absolute w-[100px] md:w-[200px] lg:w-[300px]">
    <img src="{{url('assets/purchase/PurchaseSplash2.png')}}" alt="" class="top-0 right-[30%] absolute z-[-1] w-[100px] md:w-[200px] lg:w-[300px]">
    <div class="self-center w-full flex flex-row min-h-screen justify-center">
        <form method="POST" class="flex flex-col max-w-[65%] w-full py-4 relative items-center">
            <a href="{{ route('homePage') }}" class="self-center">
                <img src="{{ url('assets/Logo.png')}}" alt="" class="h-[80px]  hidden lg:flex">
            </a>
            <div class="relative flex items-center gap-3 self-start ml-3 md:ml-10">
                <div class="bg-white rounded-full p-2 flex items-center justify-center border shadow-xl w-fit">
                    <i class='bx bx-chevron-left text-[30px] text-black'></i>
                </div>
                <h1 class="bold-14 md:bold-18 lg:bold-24 text-primary">Payments</h1>
            </div>
            <div class="flex flex-col max-w-[650px] self-center p-2 items-center relative justify-center w-full">
                <div class="w-[75%]  flex justify-between items-center relative text-center">
                    <div class="flex flex-col items-center">
                        <div class="p-8 bg-white border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit"> 
                            <h1 class="absolute">1</h1>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Customer Details</h1>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="p-8  bg-gray-300 border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit"> 
                            <h1 class="absolute">2</h1>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Customer Details</h1>
                    </div>
                    <div class="flex flex-col items-center">
                        <div class="p-8 bg-gray-300 border-2 shadow-xl bold-12 md:bold-16 lg:bold-20 flex items-center justify-center rounded-full w-fit"> 
                            <h1 class="absolute">3</h1>
                        </div>
                        <h1 class="bold-8 md:bold-10 lg:bold-12 text-primary">Customer Details</h1>
                    </div>
                    
                </div>
                <hr class="border-2 w-[80%] border-stroke absolute z-[-1] top-[40%] translate-y-[-50%] left-[50%] translate-x-[-50%]">
            </div>

            <div class="bg-white max-w-[700px] p-4 md:p-6 lg:p-8 shadow-xl border-2 w-full mt-4 flex flex-col gap-8 rounded-3xl text-secondary">
                <div class="flex flex-row w-full justify-between gap-2">
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20">
                        <i class='bx bxs-user px-2 text-[20px]'></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="First name*">
                    </div>
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20">
                        <i class='bx bxs-user px-2 text-[20px]'></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Last name*">
                    </div>
                </div>
                <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20">
                    <i class='bx bxs-map px-2 text-[20px]'></i>
                    <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Last name*">
                </div>
                <div class="flex flex-row w-full justify-between gap-2">
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20">
                        <i class='bx bxs-user px-2 text-[20px]'></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="First name*">
                    </div>
                    <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20">
                        <i class='bx bxs-user px-2 text-[20px]'></i>
                        <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Last name*">
                    </div>
                </div>
                <div class="p-2 flex flex-row items-center border-b-2 border-secondary/20">
                    <i class='bx bxs-user px-2 text-[20px]'></i>
                    <input type="text" class="border-l-2 border-secondary/10 focus:outline-none pl-4" placeholder="Last name*">
                </div>
            </div>
        </form>
        <div class="w-[35%] bg-stroke p-4">
            
        </div>
    </div>  
</div>
