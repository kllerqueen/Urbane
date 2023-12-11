<div class="w-full mx-auto flex flex-col mb-2 z-40">
    <div class=" bg-primary flex lg:hidden px-2">
        <div class="container flex items-center justify-between py-2 text-white">
            <h1 class="font-dancing bold-20 ">Urbane</h1>
            <div class=" flexCenter gap-4">
                {{-- <a href="/profile">
                    <img src="{{url('assets/PhotoProfile.png')}}" alt="" class="w-[50px] h-[50px]">
                </a> --}}
                @auth
                    <a href="{{ route('user.profile') }}"><button class=" rounded-md h-fit ">Welcome, {{ Auth::user()->username }}</button></a>
                    <a href="{{ route('logoutPage') }}"><button class="underline text-white px-0 md:px-2 ">Logout</button></a>
                @else
                    <a href="{{ route('loginPage') }}"><button class="text-white px-0 md:px-2 decoration-none">Login</button></a>
                    <a href="{{ route('registerPage') }}"><button class="underline text-white px-0 md:px-2 ">Register</button></a>
                @endauth
            </div>
        </div>
    </div>
    <div class="container w-full flex flex-row items-center justify-between gap-2 md:gap-4 px-2 py-1">
        <div class="flex-row gap-2 items-center hidden lg:flex">
            {{-- <a href="/profile">
                <img src="{{url('assets/PhotoProfile.png')}}" alt="" class="w-[70px] h-[70px]">
            </a> --}}
             @auth
                <a href="{{ route('user.profile') }}"><button class="px-8 py-2 bg-primary text-white rounded-md h-fit ">Welcome,{{ Auth::user()->username }} </button></a>
                <a href="{{ route('logoutPage') }}" class="bg-red-500 text-white px-8 py-2 rounded-md hover:bg-red-600 hover:text-white">Logout</a>

            @else
                <a href="{{ route('loginPage') }}"><button class="px-8 py-2 bg-primary text-white rounded-md h-fit ">Login</button></a>
                <a href="{{ route('registerPage') }}"><button class="underline text-primary px-0 md:px-2 ">Register</button></a>
            @endauth
        </div>
        <div class="flex flex-row items-center w-full md:w-3/4 lg:w-1/2 bg-white shadow-xl h-fit py-2 px-2 rounded-full border">
            <i class='bx bx-search bx-sm border-r-2 px-2 border-primary bx-primary text-primary' ></i>
            <input type="text" class=" outline-none w-full px-2 regular-12 md:regular-16" placeholder="Search Any Product">
        </div>
        <div class="flex flex-row items-center gap-2">
            <a href="{{ route('wishlist') }}"><i class='bx bxs-heart text-red-700 bg-white p-1 rounded-full border shadow-md text-[25px]' ></i></a>
            <a href="{{route('cart')}}"><i class='bx bxs-shopping-bag text-green-700 bg-white p-1 rounded-full border shadow-md text-[25px]'></i></a>
            <div href="" class="flex justify-center z-50  relative">
                <i class='bx bxs-bell text-yellow-500 bg-white p-1 rounded-full border shadow-md text-[25px]' onclick="showNotif()"></i>

                {{-- notification container --}}
                <div class="w-[250px] md:w-[300px] h-[400px] absolute top-[120%] right-0 bg-white border-2 rounded-md flex flex-col px-4 py-2 gap-1 overflow-y-scroll hidden" id="notification-container">
                    <h1 class="text-primary bold-12 md:bold-16 lg:bold-20">Notifications</h1>
                    <div class="flex border-2 rounded-3xl text-center ">
                        <h1 class="bg-primary text-white bold-14 py-1 px-4 w-full rounded-3xl" id="button" onclick="showDetail(0)">Transaction</h1>
                        <h1 class=" bold-14 py-1 px-4 w-full rounded-3xl" id="button" onclick="showDetail(1)">Update</h1>
                    </div> 

                    {{-- Transaction Container --}}
                    <div class="" id="notif-container" >
                        <h1 class="bold-12 md:bold-16 ">For You</h1>
                        {{-- Transaction Detail --}}
                        <a href="" class="flex flex-row py-2 gap-2 px-2 h-fit hover:bg-gray-200 rounded-md" id="transaction-detail " >
                            <div class=" flex mt-2">
                                <i class='bx bx-receipt text-[20px] text-primary rounded-full bg-white h-fit p-1 shadow-md' id="transaction-icon"></i>
                            </div>
                            <div>
                                <h1 class="text-gray-500 bold-12">2:15 AM</h1>
                                <h1 class="bold-12 md:bold-14 lg:bold-16">Transaction Successful!</h1>
                                <p class="bold-10 md:bold-12 text-secondary">Your transaction is successful. Tap to see you're Product</p>
                            </div>
                        </a>
                       
                    </div> 

                    {{-- Update Container --}}
                    <div class="hidden" id="notif-container">
                        {{-- Update Detail --}}
                        <a href="" class="flex flex-row py-2 gap-2 px-2 h-fit hover:bg-gray-200 " id="update-detail">
                            <div class=" flex mt-2" >
                                <i class='bx bxs-bell text-primary rounded-full bg-white h-fit p-1 shadow-md' id="update-icon"></i>
                            </div>
                            <div>
                                <h1 class="bold-12 md:bold-14 lg:bold-16">Transaction Successful!</h1>
                                <p class="bold-10 md:bold-12 text-secondary">Your transaction is successful. Tap to see you're Product</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a href="{{ route('homePage') }}"><img src="{{ url('assets/Logo.png')}}" alt="" class="h-[60px] hidden lg:flex"></a>
        </div>
    </div>
    <script>
        let notifContainers = document.querySelectorAll('#notif-container')
        let transactions = document.querySelectorAll('#transaction-detail')
        let updates = document.querySelectorAll('#update-detail')
        let tIcons = document.querySelectorAll('#transaction-icon')
        let uIcons = document.querySelectorAll('#update-icon')
        let buttons = document.querySelectorAll('#button')
        let notificationContainer = document.getElementById('notification-container')

        function showNotif(){
            notificationContainer.classList.toggle('hidden')
        }

        function showDetail(index){
            buttons.forEach(button => {
                button.classList.remove('bg-primary', 'text-white');
            })

            notifContainers.forEach(container => {
                container.classList.add('hidden')
            });
            buttons[index].classList.add('bg-primary', 'text-white')
            notifContainers[index].classList.remove('hidden')
        }

    </script>
</div>
