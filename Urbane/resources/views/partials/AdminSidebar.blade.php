
<div class="sidebar-container relative active duration-500 pr-5" id="sidebar-container">
    <div class="sidebar active fixed  flex w-[300px] h-screen bg-gradient-to-r from-primary to-emerald-600 duration-500 py-4 overflow-hidden rounded-e-[40px] z-50 left-0" id="sidebar">
        <ul class="relative h-full w-full">
            <div class="logo mb-6 ">
                <div class='flex justify-center gap-2  mb-2'>
                    <img src="{{ url('assets/admin/LogoWhite.png')}}" alt="" class=" max-w-[150px] w-full">
                </div>
            </div>
            <div class="logo ">
                <a href='' class='flex gap-2  mb-2 flex-col items-center '>
                    <img src="{{ url('assets/admin/AdminProfile.png')}}" alt="" class=" max-w-[80px] max-h-[80px] h-full w-full">
                    <h1 class="regular-16 md:regular-18 lg:regular-20 text-white profile-name">Jonathan</h1>
                </a>
            </div>
            <div class="flex flex-col gap-2">
                {{-- active --}}
                <li class="relative active">
                    <a href="{{ route('adminPage', "All") }}" id="nav-link">
                        <i class='bx bxs-home'></i>
                        <div class="text">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#" id="nav-link">
                        <i class='bx bxs-info-circle' ></i>
                        <div class="text">Info</div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('helpPage') }}" id="nav-link">
                        <i class='bx bxs-help-circle' ></i>
                        <div class="text">Help</div>
                    </a>
                </li>
                <li>
                    <a href="#" id="nav-link">
                        <i class='bx bxs-user-circle'></i>
                        <div class="text">Profile</div>
                    </a>
                </li>
            </div>
            <div class="bottom absolute bottom-0 w-full">
                <li>
                    <a href="{{ route('logoutAdminPage') }}" id="nav-link">
                        <i class='bx bx-log-out' ></i>
                        <div class="text">Log Out</div>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</div>

<div id="showSidebar" class="fixed top-2 right-2 p-2 flex items-center justify-center bg-primary rounded-md z-50">
    <i class='bx bx-menu text-[25px] text-white' ></i>
</div>

<script>
    let showSidebar = document.querySelector('#showSidebar');
    let sidebar = document.querySelector('#sidebar');
    let sidebarContainer = document.querySelector('#sidebar-container')
    
    showSidebar.onclick = function(){
        sidebar.classList.toggle('active');
        sidebarContainer.classList.toggle('active');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('#nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                navLinks.forEach(navLink => {
                    navLink.parentElement.classList.remove('active')
                });
                link.parentElement.classList.add('active');
            });
        });
    });
</script>
