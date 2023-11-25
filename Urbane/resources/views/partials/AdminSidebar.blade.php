<div class="h-screen relative w-[300px] rounded-e-[50px] overflow-hidden duration-500 transition-all">
    <div class="sidebar active absolute flex w-full h-full bg-primary duration-500 py-4 overflow-hidden">
        <ul class="relative h-full w-full">
            <div class="logo mb-6">
                <a href='' class='flex justify-center gap-2  mb-2'>
                    <img src="{{ url('assets/admin/LogoWhite.png')}}" alt="" class=" max-w-[150px] w-full">
                </a>
            </div>
            <div class="logo">
                <a href='' class='flex gap-2  mb-2 flex-col items-center '>
                    <img src="{{ url('assets/admin/AdminProfile.png')}}" alt="" class=" max-w-[80px] max-h-[80px] h-full w-full">
                    <h1 class="regular-16 md:regular-18 lg:regular-20 text-white profile-name">Jonathan</h1>
                </a>
            </div>
            <div class="flex flex-col gap-2">
                {{-- active --}}
                <li class="relative active">
                    <a href="#" class="nav-link">
                        <i class='bx bxs-home'></i>
                        <div class="text">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class='bx bxs-info-circle' ></i>
                        <div class="text">Info</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class='bx bxs-help-circle' ></i>
                        <div class="text">Help</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class='bx bxs-user-circle'></i>
                        <div class="text">Profile</div>
                    </a>
                </li>
            </div>
            <div class="bottom absolute bottom-0 w-full">
                <li>
                    <a href="#" class="nav-link">
                        <i class='bx bx-log-out' ></i>
                        <div class="text">Log Out</div>
                    </a>
                </li>
            </div>
        </ul>
    </div>
</div>
<div class="toggleSidebar absolute top-2 right-2 p-2 flex items-center justify-center bg-primary rounded-md">
    <i class='bx bx-menu text-[25px] text-white' ></i>
</div>

<script>
    let toggleSidebar = document.querySelector('.toggleSidebar');
    let sidebar = document.querySelector('.sidebar');

    toggleSidebar.onclick = function(){
        toggleSidebar.classList.toggle('active');
        sidebar.classList.toggle('active');
    }

    document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    // Remove active class from all links
                    navLinks.forEach(navLink => navLink.parentElement.classList.remove('active'));
                    
                    // Add active class to the clicked link's parent (li) element
                    this.parentElement.classList.add('active');
                });
            });
        });
</script>
