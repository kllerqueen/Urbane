@extends('template.adminTemplate')


@section('body')

    <div class="w-full min-h-screen">
        <img src="{{url('assets/admin/ProfilePageBG.png')}}" alt="" class="absolute w-[50%] h-screen bottom-0 right-0 z-[-1]">
        <div class="flex flex-col gap-[30px] mb-[50px] text-primary max-w-[1000px] w-full px-4 md:px-8 py-2 md:py-4 ">

            <h1 class="bold-24 md:bold-32 lg:bold-40">Profile</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 grid-rows-4 gap-4 text-white ">
                <div class="row-span-4 flex flex-col items-center bg-primary/30 backdrop-blur-xl rounded-3xl px-8 py-12 gap-6">
                    <img src="{{ url('assets/admin/AdminProfile.png')}}" alt="" class=" max-w-[140px] max-h-[140px] h-full w-full duration-500">
                    <h1 class="bold-16 md:bold-20 lg:bold-28 ">Admin's Profile</h1>

                    <div class="flex flex-col text-secondary w-full gap-6 md:gap-8">
                        <div class="flex flex-row items-center w-full justify-between border-b-2 border-gray-600 px-2 py-1">
                            <h1 class="regular-14 md:regular-16">
                                Admin {{ $admin->username }}
                            </h1>
                            <h1 class="regular-14 md:regular-16">
                                +62 {{ substr($admin->phoneNumber, 1) }}
                            </h1>
                        </div>
                        <h1 class="regular-14 md:regular-16 border-b-2 border-gray-600 px-2 py-1">
                            {{ $admin->email }}
                        </h1>
                    </div>
                    <div class="flex flex-row items-center gap-2 justify-start w-full py-2">
                        <h1>Has been verified!</h1>
                        <div class="flex items-center justify-center p-[2px] bg-green-500 rounded-full">
                            <i class='bx bx-check text-black text-[25px]'></i>
                        </div>
                    </div>
                </div>
                <div class="row-span-4 w-full flex flex-col justify-between h-full">
                    <div class="h-3/4 relative flex justify-center items-center p-16">
                        <img src="{{url('assets/admin/Calendera.png')}}" alt="" class="w-full h-full rounded-3xl absolute top-0 ">
                        <div class="bg-primary/30 backdrop-blur-xl text-center p-4 w-full h-full rounded-3xl mt-4" >
                            <p class="bold-14 md:bold-16 lg:bold-20">November</p>
                            <h1 class="bold-64 md:bold-80 lg:bold-96">28</h1>
                            <p class="regular-12 md:regular-14 lg:regular-16">2023</p>
                        </div>
                    </div>
                    <div class="bg-primary/30 w-full backdrop-blur-xl p-4 flex flex-row gap-2 items-center">
                        <i class='bx bxs-chat text-white text-[40px]' ></i>
                        <div>
                            <h1>Help and information</h1>
                            <p>Need</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="absolute bottom-2 text-white left-[50%] translate-x-[-50%] w-full text-center">
            Copyright. All Rights Reserved. 2023
        </div>
    </div>

    <script>
        window.onload = function() {
            const navLinks = document.querySelectorAll('#nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(navLink => {
                        navLink.parentElement.classList.remove('active')
                    });
                    link.parentElement.classList.add('active');
                });
            });
            navLinks[3].parentElement.classList.add('active');
        }

    </script>

    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
