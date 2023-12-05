@extends('template.adminTemplate')


@section('body')

    <div class="px-2 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[10px] mb-[50px] text-primary">
            <h1 class="bold-24 md:bold-32">
                <a href="{{ route('adminPage', 'All') }}">Dashboard <span class="font-vina">></span> Edit Products
            </h1>


            <form class="w-full max-w-[1200px] flex flex-col" action="{{ route('editItem', ['id' => $item->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-6 md:grid-rows-4  gap-2 text-white">
                    <div class="bg-primary/30 p-4 flex flex-row w-full items-center  gap-4 col-span-1 row-span-1 md:col-start-1 md:row-start-1">
                        <img src="{{url('assets/admin/widgets.png')}}" alt="" class="w-10 h-10 p-1 bg-black rounded-full flex items-center justify-center">
                        <div class="flex-col">
                            <p class="regular-12 md:regular-14 lg:regular-16">Product ID</p>
                            <h1 class="bold-16 md:bold-18 lg:bold-20">#{{ $item->id }}</h1>
                        </div>
                    </div>
                    {{-- Product Img Upload --}}
                    <div class="flex flex-col bg-primary/30 p-4 row-span-5 md:row-span-2 lg:row-span-3  gap-2 col-span-1 md:col-start-1 md:row-start-2">
                        <h1 class="text-white regular-16 md:regular-20 lg:regular-24">
                            Picture
                        </h1>
                        <div class=" grid grid-rows-6 gap-2 w-full h-full">
                            <div class=" row-span-4 relative">
                                <div id="uploadTrigger" onclick="triggerFileInput(0)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black text-center">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <h1 class="bold-12 md:bold-14 lg:bold-16">Maximum picture is 500 x 500px</h1>
                                    <p class="regular-10 md:regular-12 lg:regular-14">Upload file in JPEG, JPG, or PNG</p>
                                </div>
                                <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                <img onclick="triggerFileInput(0)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                            </div>

                            <div class="row-span-2 grid grid-cols-3 w-full h-full gap-2">
                                <div id="uploadTrigger" onclick="triggerFileInput(1)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                    <img onclick="triggerFileInput(1)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                                <div id="uploadTrigger" onclick="triggerFileInput(2)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                    <img onclick="triggerFileInput(2)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                                <div id="uploadTrigger" onclick="triggerFileInput(3)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                    <img onclick="triggerFileInput(3)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" bg-primary/30 w-full flex items-center px-4 lg:col-span-2 md:col-start-2 row-start-1 row-span-1">
                        <img src="{{ url('assets/admin/AdminProfile.png')}}" alt="" class=" w-14 h-14">
                        <h1 class="pl-4 bold-14 md:bold-18 lg:bold-24">HI, Admin {{ $admin->username }} 👋 !</h1>
                    </div>

                    <div class="lg:col-span-2 row-span-4 md:row-span-2 bg-primary/30 w-full flex flex-col  gap-4 p-4 ">
                        <div class="flex w-full justify-between items-center">
                            <div class="flex flex-col gap-2 md:w-1/2">
                                <h1 class="text-white-70 bold-14 md:bold-16 lg:bold-20">Product name</h1>
                                <input  type="text" placeholder="{{ $item->item_name }}" class="input px-2 py-2 rounded-md w-full bg-transparent focus:outline-none" id="input1" name="item_name" disabled >
                            </div>
                            <button type="button" class="self-end px-12 py-2 bg-black border border-white rounded-md hover:scale-105 transition-all duration-300" id="edit-button" onclick="toggleInput('input1')">Edit Button</button>
                        </div>
                        <div class="flex w-full justify-between items-center">
                            <div class="flex flex-col gap-2 md:w-1/2">
                                <h1 class="text-white-70 bold-14 md:bold-16 lg:bold-20">Category</h1>
                                <div class="select relative flex w-full h-full overflow-hidden rounded-sm ">
                                    <select class="input py-2 px-3 text-gray-400
                                    outline-none border-none  w-full cursor-pointer" id="input2" name="category_name" disabled>
                                        <option value="Man" {{ $item->category->category_name == 'Man' ? 'selected' : ''}}>Man</option>
                                        <option value="Woman" {{ $item->category->category_name == 'Woman' ? 'selected' : ''}}>Woman</option>
                                        <option value="Unisex" {{ $item->category->category_name == 'Unisex' ? 'selected' : ''}}>Unisex</option>
                                        <option value="Accessory" {{ $item->category->category_name == 'Accessory' ? 'selected' : ''}}>Accessories</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="self-end px-12 py-2 bg-black border border-white rounded-md hover:scale-105 transition-all duration-300" id="edit-button" onclick="toggleInput('input2')">Edit Button</button>
                        </div>
                        <div class="flex w-full justify-between items-center">
                            <div class="flex flex-col gap-2 md:w-1/2">
                                <h1 class="text-white-70 bold-14 md:bold-16 lg:bold-20">Price</h1>
                                <input type="text" placeholder="Rp {{ number_format($item->item_price, 2, '.', ',') }}" class="input px-2 py-2 rounded-md w-full bg-transparent focus:outline-none" id="input3" name="item_price" disabled >
                            </div>
                            <button type="button" class="self-end px-12 py-2 bg-black border border-white rounded-md hover:scale-105 transition-all duration-300" id="edit-button" onclick="toggleInput('input3')">Edit Button</button>
                        </div>
                        <div class="flex w-full justify-between items-center">
                            <div class="flex flex-col gap-2 md:w-1/2">
                                <h1 class="text-white-70 bold-14 md:bold-16 lg:bold-20">Quantity</h1>
                                <input type="text" placeholder="{{ $item->qty }}" class="input px-2 py-2 rounded-md w-full bg-transparent focus:outline-none" id="input4" name="qty" disabled >
                            </div>
                            <button type="button" class="self-end px-12 py-2 bg-black border border-white rounded-md hover:scale-105 transition-all duration-300" id="edit-button" onclick="toggleInput('input4')">Edit Button</button>
                        </div>
                    </div>

                    <div class="lg:col-span-2 row-span-1 bg-primary/30 w-full flex flex-col px-4 py-2 md:col-start-2">
                        <h1 class="regular-12 md:regular-14 lg:regular-16">Description</h1>
                        <textarea
                            disabled
                            name="item_desc"
                            id="input5"
                            cols="30"
                            rows="10"
                            class="input w-full h-[80px] bg-transparent focus:outline-none text-gray-600 overflow-y-auto"
                            placeholder="{{ $item->item_desc }}"></textarea>
                        <button type="button" class="self-end px-12 py-2 bg-black border border-white rounded-md hover:scale-105 transition-all duration-300 mt-2"onclick="toggleInput('input5')">Edit Button</button>
                    </div>
                </div>

                <div class="w-full flex justify-center pt-8 col-span-1 md:col-span-2 ">
                    <button type="submit" class="px-16 py-3 bg-primary rounded-md text-white bold-14 md:bold-16 lg:bold-20 m-auto self-center w-fit">Submit</button>
                </div>
            </form>
        </div>

    </div>


    <script>
        let inputForm = document.querySelectorAll('.input');
        let inputButton = document.querySelectorAll('#edit-button');

        function toggleInput(ID) {
            var inputElement = document.getElementById(ID);

            if (inputElement.hasAttribute('disabled')) {
                inputForm.forEach(input => {
                    input.disabled = true;
                    input.classList.remove('bg-white')
                })
                inputElement.disabled = false;
                inputElement.classList.add('bg-white')
            } else {
                inputElement.disabled = true;
                inputElement.classList.remove('bg-white');
            }
        }

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
            navLinks[0].parentElement.classList.add('active')
        }
        function handleFileUpload() {
            let uploadTriggers = document.querySelectorAll('#uploadTrigger');
            let fileInputs = document.querySelectorAll('#fileInput');
            let uploadedImages = document.querySelectorAll('#uploadedImage');

            fileInputs.forEach((fileInput, index) => {
                let selectedFiles = fileInput.files;

                if (selectedFiles.length > 0) {
                    let selectedFile = selectedFiles[0];
                    let srcImage = new FileReader();

                    srcImage.onload = function (e) {
                        uploadedImages[index].src = e.target.result;
                        uploadedImages[index].classList.remove('hidden');
                    };
                    srcImage.readAsDataURL(selectedFile);
                }
            });
        }


      </script>

    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
