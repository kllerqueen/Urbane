@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center w-full py-2">
        <div class="container flex flex-col md:flex-row gap-2 w-full">
            <div class="p-6 shadow-xl bg-white border flex flex-col items-center max-w-[400px] w-full rounded-md">
                <div class="relative flexCenter flex-col">
                    <img src="{{url('assets/PhotoProfile.png')}}" alt="" class="w-[140px] h-[140px]">
                    <div class="bg-white text-secondary p-2 rounded-full flexCenter absolute top-1 right-[-15px] shadow-xl border">
                        <i class='bx bxs-pencil text-[25px]' ></i>
                    </div>
                    <h1 class="bold-16 md:bold-20 lg:bold-24">Jay Mansieur</h1>
                    <p class="pt-2 regular-12 md:regular-14 lg:regular-16 text-primary">Member</p>
                </div>
                <button class="p-2 w-full border-2 border-primary rounded-md mt-4">
                    <p class=" bold-12 md:bold-14 lg:bold-16 text-primary">Edit Profile</p>
                </button>

                <form action="" class="flex flex-col w-full pt-2 gap-2">
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary ">Email</p>
                        <input type="text" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none" placeholder="Edit Profile"/>
                    </div>
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary">Gender</p>
                        <input type="text" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none" placeholder="Edit Profile"/>
                    </div>
                    <div class="flex flex-col p-3 bg-white rounded-md shadow-xl w-full gap-3 border-2">
                        <p class="regular-12 md:regular-14 lg:regular-16 text-primary">Email</p>
                        <input type="text" class=" bold-14 md:bold-16 lg:bold-18 text-primary focus:outline-none" placeholder="Edit Profile"/>
                    </div>
                </form>
            </div>
            <div class=" col-span-3 grid grid-cols-3 h-fit gap-2">
                <div class="flex flex-row gap-2 items-center py-2 px-4  bg-white shadow-xl rounded-md border-2 text-green-600 ">
                    <h1 class="bold-40 md:bold-64 lg:bold-80">0</h1>
                    <div class="flex flex-col">
                        <i class='bx bxs-bar-chart-alt-2 text-[50px]'></i>
                        <p class=" bold-24 md:bold-28 lg:bold-32 ">Successful</p>
                    </div>
                </div>
                <div class="flex flex-row gap-2 items-center py-2 px-4  bg-white shadow-xl rounded-md border-2 text-orange-600">
                    <h1 class="bold-40 md:bold-64 lg:bold-80">0</h1>
                    <div class="flex flex-col">
                        <i class='bx bxs-bar-chart-alt-2 text-[50px]'></i>
                        <p class=" bold-24 md:bold-28 lg:bold-32 ">On Process</p>
                    </div>
                </div>
                <div class="flex flex-row gap-2 items-center py-2 px-4 lg:px-8 bg-white shadow-xl rounded-md border-2 text-red-600">
                    <h1 class="bold-40 md:bold-64 lg:bold-80">0</h1>
                    <div class="flex flex-col">
                        <i class='bx bxs-bar-chart-alt-2 text-[50px]'></i>
                        <p class=" bold-24 md:bold-28 lg:bold-32 ">Failed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection