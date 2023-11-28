@extends('template.adminTemplate')


@section('body')

    <div class="px-2 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[10px] mb-[50px] text-primary">
            <h1 class="bold-24 md:bold-32">
                Dashboard > Edit Products
            </h1>


            <form class="w-full max-w-[1200px] flex flex-col">
                <div class="w-full grid grid-cols-1 md:grid-cols-3 grid-rows-5 md:grid-rows-7 gap-2 text-white">
                    <div class="bg-primary/30 p-4 flex flex-row w-full items-center col-span-1 row-span-1 col-start-1 gap-4">
                        <img src="{{url('assets/admin/widgets.png')}}" alt="" class="w-10 h-10 p-1 bg-black rounded-full flex items-center justify-center">
                        <div class="flex-col">
                            <p class="regular-12 md:regular-14 lg:regular-16">Product ID</p>
                            <h1 class="bold-16 md:bold-18 lg:bold-20">#9823743</h1>
                        </div> 
                    </div>
                    {{-- Product Img Upload --}}
                    <div class="flex flex-col bg-primary/30 p-4 row-span-4 md:row-span-6 gap-2 col-span-1 col-start-1">
                        <h1 class="text-white regular-16 md:regular-20 lg:regular-24 col-span-3 row-span-1">
                            Picture
                        </h1>
                        <div class=" grid grid-rows-6 gap-2 w-full h-full">
                            <div class=" row-span-4 relative">
                                <div id="uploadTrigger" onclick="triggerFileInput(0)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <h1 class="bold-12 md:bold-14 lg:bold-16">Maximum picture is 500 x 500px</h1>
                                    <p class="regular-10 md:regular-12 lg:regular-14">Upload file in JPEG, JPG, or PNG</p>
                                </div>
                                <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden">
                                <img onclick="triggerFileInput(0)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                            </div>
                            
                            <div class="row-span-2 grid grid-cols-3 w-full h-full gap-2">
                                <div id="uploadTrigger" onclick="triggerFileInput(1)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden">
                                    <img onclick="triggerFileInput(1)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                                <div id="uploadTrigger" onclick="triggerFileInput(2)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden">
                                    <img onclick="triggerFileInput(2)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                                <div id="uploadTrigger" onclick="triggerFileInput(3)" class="w-full h-full bg-white rounded-md flex flex-col gap-2 justify-center items-center text-black relative">
                                    <div class="bg-black p-2 rounded-md flex justify-center items-center">
                                        <i class='bx bx-plus text-[30px] text-white' ></i>
                                    </div>
                                    <input type="file" id="fileInput" onchange="handleFileUpload()" class="hidden">
                                    <img onclick="triggerFileInput(3)" id="uploadedImage" alt="Uploaded Image" class="absolute w-full h-full top-0 hidden rounded-md">
                                </div>
                            </div>
                        </div> 
                    </div>  
                    <div class="col-span-2 row-span-1 bg-primary/30 w-full row-start-1 col-start-2 flex items-center px-4">
                        <img src="{{ url('assets/admin/AdminProfile.png')}}" alt="" class=" w-14 h-14">
                        <h1 class="pl-4 bold-14 md:bold-18 lg:bold-24">HI, Admin Girlys 👋 !</h1>
                    </div>

                    <div class="col-span-2 row-span-1 bg-primary/30 w-full col-start-2 flex items-center px-4">
                        <h1 class="pl-4 bold-14 md:bold-18 lg:bold-24">HI, Admin Girlys 👋 !</h1>
                    </div>

                    <div class="col-span-2 row-span-1 bg-primary/30 w-full col-start-2 flex flex-col px-4 py-2">
                        <h1 class="regular-12 md:regular-14 lg:regular-16">Description</h1>
                        <p class="bold-14 md:bold-16 ">The oversized silhouette of this shirt provides a relaxed fit, allowing for easy movement and a casually cool vibe. The poplin fabric adds a touch of refinement, ensuring that you not only feel great but also look effortlessly chic.</p>
                        <button class="self-end px-12 py-2 bg-black border border-white rounded-md">Edit Button</button>
                    </div>
                </div>

                <div class="w-full flex justify-center pt-8 col-span-1 md:col-span-2 ">
                    <button type="submit" class="px-16 py-3 bg-primary rounded-md text-white bold-14 md:bold-16 lg:bold-20 m-auto self-center w-fit">Submit</button>
                </div>
            </form>
        </div>

    </div>
    

    <script>     
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
