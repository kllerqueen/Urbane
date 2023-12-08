@extends('template.adminTemplate')

@section('body')

    <div class="px-4 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[30px] mb-[50px] text-primary">
            <h1 class="bold-24 md:bold-32">Dashboard</h1>
        </div>

        <div class="flex flex-col gap-[10px] text-white overflow-x-auto ">
            <div class="grid grid-cols-7Admin gap-8 items-center p-4 bg-primary rounded-md w-fit">
                <p>Id</p>
                <p>Name</p>
                <p class="col-span-2">Address</p>
                <p>Postal Code</p>
                <p>Status</p>
                <p>Action</p>
            </div>

            <div class="flex flex-col gap-2">
                <div class="grid grid-cols-7Admin gap-8 items-center px-4 border-2 border-solid border-white py-1 rounded-md w-fit relative">
                    <p>testing</p>
                    <p class="whitespace-nowrap overflow-hidden text-ellipsis">testing </p>
                    <p class="whitespace-nowrap overflow-hidden text-ellipsis col-span-2">testing</p>
                    <p>Rp. testing</p>
                    <select name="" id="" class="text-white outline-none bg-black border-none">
                        <option value="">Complete</option>
                        <option value="">On Process</option>
                        <option value="">Failed</option>
                    </select>
                        <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-fit">Save</a>
                    </div>
                </div>
                <p>No items available</p>
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
            navLinks[0].parentElement.classList.add('active');
        }

    </script>

    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
