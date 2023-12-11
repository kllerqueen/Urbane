@extends('template.adminTemplate')


@section('body')

    <div class="px-2 md:px-8 py-2 md:py-4 w-full h-screen relative">

        <div class="flex flex-col gap-[10px] mb-[50px] text-primary max-w-[1300px] h-full">
            <h1 class="bold-24 md:bold-32 w-fit">
                Help
            </h1>
            <div class="flex flex-col justify-between h-full  w-full text-white">
                <div class="w-full flex flex-col">

                    <div class="flex flex-col mt-[40px]">
                        <div class="w-full flex justify-between items-center bg-primary px-4 md:px-6 py-2 rounded-full">
                            <h1 class="regular-12 md:regular-16 lg:regular-20">How do I add a new product to the online shop?</h1>
                            <div class="p-1 bg-white flex items-center justify-center rounded-full" id="slide" onclick="showSlide(0)">
                                <i class='bx bx-chevron-down text-black text-[25px] md:text-[30px] '></i>
                            </div>
                        </div>
                        <h1 class="  mt-[-20px] bg-primary/60 z-[-1] rounded-md overflow-hidden h-0 transition-all duration-300" id="modal"> 
                            To add a new product, navigate to the "Dashboard" section in the admin dashboard. Click on "Add Product," fill in the required details, and save the changes.
                        </h1>
                    </div>

                    <div class="flex flex-col mt-[40px]">
                        <div class="w-full flex justify-between items-center bg-primary px-4 md:px-6 py-2 rounded-full">
                            <h1 class="regular-12 md:regular-16 lg:regular-20">Can I edit product information after it's been added?</h1>
                            <div class="p-1 bg-white flex items-center justify-center rounded-full" id="slide" onclick="showSlide(1)">
                                <i class='bx bx-chevron-down text-black text-[25px] md:text-[30px] '></i>
                            </div>
                        </div>
                        <h1 class="  mt-[-20px] bg-primary/60 z-[-1] rounded-md overflow-hidden h-0 transition-all duration-300" id="modal"> 
                            Yes, you can edit product details at any time. Simply go to the "Dashboard" section, find the product you want to edit, and click on the "Update" button.
                        </h1>
                    </div>

                    <div class="flex flex-col mt-[40px]">
                        <div class="w-full flex justify-between items-center bg-primary px-4 md:px-6 py-2 rounded-full">
                            <h1 class="regular-12 md:regular-16 lg:regular-20">What should I do if I encounter a technical issue?</h1>
                            <div class="p-1 bg-white flex items-center justify-center rounded-full" id="slide" onclick="showSlide(2)">
                                <i class='bx bx-chevron-down text-black text-[25px] md:text-[30px] '></i>
                            </div>
                        </div>
                        <h1 class="  mt-[-20px] bg-primary/60 z-[-1] rounded-md overflow-hidden h-0 transition-all duration-300" id="modal"> 
                            If you experience technical difficulties, please contact our support team at support@example.com for prompt assistance. Be sure to include details about the issue you're facing.
                        </h1>
                    </div>

                    <div class="flex flex-col mt-[40px]">
                        <div class="w-full flex justify-between items-center bg-primary px-4 md:px-6 py-2 rounded-full">
                            <h1 class="regular-12 md:regular-16 lg:regular-20">What browsers are supported?</h1>
                            <div class="p-1 bg-white flex items-center justify-center rounded-full" id="slide" onclick="showSlide(3)">
                                <i class='bx bx-chevron-down text-black text-[25px] md:text-[30px] '></i>
                            </div>
                        </div>
                        <h1 class="  mt-[-20px] bg-primary/60 z-[-1] rounded-md overflow-hidden h-0 transition-all duration-300" id="modal"> 
                            Our platform is optimized for the latest versions of Google Chrome, Mozilla Firefox, Safari, except Microsoft Edge. Please make sure your browser is up to date for the best user experience.
                        </h1>
                    </div>
                    <div class="flex flex-col mt-[40px]">
                        <div class="w-full flex justify-between items-center bg-primary px-4 md:px-6 py-2 rounded-full">
                            <h1 class="regular-12 md:regular-16 lg:regular-20">How often is the system updated?</h1>
                            <div class="p-1 bg-white flex items-center justify-center rounded-full" id="slide" onclick="showSlide(4)">
                                <i class='bx bx-chevron-down text-black text-[25px] md:text-[30px] '></i>
                            </div>
                        </div>
                        <h1 class="  mt-[-20px] bg-primary/60 z-[-1] rounded-md overflow-hidden h-0 transition-all duration-300" id="modal"> 
                            We regularly release updates to improve performance, fix bugs, and introduce new features. Keep an eye on our release notes for information on the latest updates.
                        </h1>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 text-white left-[50%] translate-x-[-50%] w-full text-center">
                Copyright. All Rights Reserved. 2023
            </div>

            
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
            navLinks[2].parentElement.classList.add('active')
        }
        function showSlide(index) {
            let modals = document.querySelectorAll("#modal");

            modals.forEach((modal, ind) => {
                if (index == ind) {
                    modal.classList.toggle('h-0');
                    modal.classList.toggle('p-4');
                    modal.classList.toggle('pt-6');
                } else {
                    modal.classList.add('h-0');
                    modal.classList.remove('p-4', 'pt-6');
                }
            });
        }
    </script>
    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
