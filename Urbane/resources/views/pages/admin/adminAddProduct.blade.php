@extends('template.adminTemplate')


@section('body')

    <div class="px-2 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[10px] mb-[50px] text-primary">

            <div class=" flex items-center bold-24 md:bold-32">
                <h1 class="">
                    <a href="{{ route('adminPage', 'All') }}">Dashboard</a> <span class="font-vina">> </span> Add Product
                </h1>
            </div>

            <form class="w-full max-w-[1200px] flex flex-col" method="POST" action="{{ route('addItem') }}" enctype="multipart/form-data">
                @csrf
                <div class="w-full grid grid-cols-1 md:grid-cols-2 grid-rows-4 md:grid-rows-6 gap-2">
                    {{-- Product Img Upload --}}
                    <div class="flex flex-col bg-primary/30 p-4 row-span-1 min-[460px]:row-span-2 md:row-span-5 gap-2">
                        <h1 class="text-white regular-16 md:regular-20 lg:regular-24 col-span-3 row-span-1">
                            Picture
                            <span class="text-red-500">*</span>
                        </h1>
                        @error('image')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                        <div class=" grid grid-rows-6 gap-2 w-full h-full">
                            <div class=" row-span-4 relative overflow-hidden">
                                <div id="image0" onclick="triggerFileInput(0)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <h1 class="bold-12 md:bold-14 lg:bold-16">Maximum picture is 500 x 500px</h1>
                                    <p class="regular-10 md:regular-12 lg:regular-14">Upload file in JPEG, JPG, or PNG</p>
                                </div>
                                <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                <img onclick="triggerFileInput(0)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                            </div>

                            <div class="row-span-2 grid grid-cols-3 w-full h-full gap-2 ">
                                <div id="image1" onclick="triggerFileInput(1)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative overflow-hidden">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                    <img onclick="triggerFileInput(1)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                                <div id="image2" onclick="triggerFileInput(2)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative overflow-hidden">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                    <img onclick="triggerFileInput(2)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                                <div id="image3" onclick="triggerFileInput(3)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative overflow-hidden">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden" name="image[]">
                                    <img onclick="triggerFileInput(3)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>
                 

                    {{-- Insert Product Info --}}
                    <div class="flex flex-col w-full gap-2  row-span-2 md:row-span-6">
                        <div class="grid grid-cols-2 w-full gap-2">
                            <div class="bg-primary/30 p-4 flex flex-col gap-1 w-full justify-between">
                                <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Product name<span class="text-red-500">*</span></h1>
                                <p class="text-gray-500 regular-12 ">The name has maximum 150 words</p>
                                <input type="text" placeholder="Input the product’s name " class="bg-white regular-12 lg:regular-16 focus:outline-none rounded-md p-3" name="item_name"/>
                                @error('item_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="bg-primary/30 p-4 flex flex-col gap-1 w-full justify-between">
                                <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Category<span class="text-red-500">*</span></h1>
                                <p class="text-gray-500 regular-12">Add the product category</p>
                                <div class="select relative flex w-full h-full overflow-hidden rounded-sm ">
                                    <select class="px-3 text-gray-400
                                    outline-none border-none bg-white w-full cursor-pointer" name="category_name">
                                        <option value="Man">Man</option>
                                        <option value="Woman">Woman</option>
                                        <option value="Unisex">Unisex</option>
                                        <option value="Accessory">Accessories</option>
                                    </select>
                                </div>
                                @error('category_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="bg-primary/30 p-4 flex flex-col gap-1 w-full justify-between">
                                <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Price<span class="text-red-500">*</span></h1>
                                <p class="text-gray-500 regular-12">Add the product Price</p>
                                <input type="number" id="value" placeholder="Input the product’s Price " class="bg-white regular-12 lg:regular-16 focus:outline-none rounded-md p-3" name="item_price"/>
                                @error('item_name')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="bg-primary/30 p-4 flex flex-col gap-1 w-full justify-between">
                                <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Quantity<span class="text-red-500">*</span></h1>
                                <p class="text-gray-500 regular-12">Add the product quantity</p>
                                <input type="number" id="value2" placeholder="Input the product’s quantity " class="bg-white regular-12 lg:regular-16 focus:outline-none rounded-md p-3" name="qty"/>
                                @error('qty')
                                    <div class="text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="bg-primary/30 p-4 flex flex-col gap-1">
                            <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Description product<span class="text-red-500">*</span></h1>
                            <p class="text-gray-500">Maximum words in description is 1000 words</p>
                            <textarea name="item_desc" id="" cols="30" rows="10" class="bg-white regular-16 focus:outline-none rounded-md p-3 text-grey-500" placeholder="Input your description"></textarea>
                            @error('item_desc')
                                <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="w-full flex justify-center pt-8">
                    <button type="submit" class="px-16 py-3 bg-primary rounded-md text-white bold-14 md:bold-16 lg:bold-20 m-auto self-center w-fit">Submit</button>
                </div>
            </form>
        </div>

    </div>

    <style>
        select {
            -webkit-appearance:none;
            -moz-appearance:none;
            -ms-appearance:none;
        }


        .select::after {
            content: '\25BC';
            position: absolute;
            top: 50%;
            transform: translate(0,-50%);
            right: 0;
            padding: 0 1em;
            cursor:pointer;
            pointer-events:none;
        }

    </style>

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
            navLinks[0].parentElement.classList.add('active')
        }

        let fileInputs = document.querySelectorAll('#fileInput');

        function triggerFileInput(index) {
            fileInputs[index].click();
        }

        function handleFileUpload() {
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

@endsection
