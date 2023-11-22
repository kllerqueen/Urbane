<div class="w-full mx-auto flex flex-col mb-2">
    <div class=" bg-primary flex lg:hidden px-2">
        <div class="container flex items-center justify-between py-2 text-white">
            <h1 class="font-dancing bold-20 ">Urbane</h1>
            <div class=" flexCenter gap-4">
                <button class=" rounded-md h-fit ">Login</button>
                <button class="underline  px-0 md:px-2 ">Register</button>
            </div>
        </div>
    </div>
    <div class="container w-full flex flex-row items-center justify-between gap-2 md:gap-4 px-2 py-1">
        <div class="flex-row gap-2 items-center hidden lg:flex">
            <button class="px-8 py-2 bg-primary text-white rounded-md h-fit ">Login</button>
            <button class="underline text-primary px-0 md:px-2 ">Register</button>
        </div>
        <div class="flex flex-row items-center w-full md:w-3/4 lg:w-1/2 bg-white shadow-xl h-fit py-2 px-2 rounded-full border">
            <i class='bx bx-search bx-sm border-r-2 px-2 border-primary bx-primary text-primary' ></i>
            <input type="text" class=" outline-none w-full px-2 regular-12 md:regular-16" placeholder="Search Any Product">
        </div>
        <div class="flex flex-row items-center gap-2">
            <i class='bx bxs-heart text-red-700 bg-white p-1 rounded-full border shadow-md text-[25px]' ></i>
            <i class='bx bxs-shopping-bag text-green-700 bg-white p-1 rounded-full border shadow-md text-[25px]'></i>
            <i class='bx bxs-bell text-yellow-500 bg-white p-1 rounded-full border shadow-md text-[25px]'></i>
            <img src="{{ url('assets/Logo.png')}}" alt="" class="h-[60px] hidden lg:flex">
        </div>
    </div>
</div>