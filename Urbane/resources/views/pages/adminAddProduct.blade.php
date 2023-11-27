@extends('template.adminTemplate')


@section('body')

    <div class="px-4 md:px-8 py-2 md:py-4 w-full">

        <div class="flex flex-col gap-[30px] mb-[50px] text-primary">

            <div class=" flex items-center bold-24 md:bold-32">
                <h1 class="">
                    Dashboard 
                </h1>
                <div class="flex items-center">
                    <i class='bx bx-chevron-right' ></i> 
                    <h1>Add Product</h1>
                </div>
            </div>

            <form class="max-w-[1000px] w-full grid grid-cols-2">
                <div class="">
                    <input type="file" name="" id="" class="hidden">
                </div>
                <div class="flex flex-col w-full gap-4">
                    <div class="bg-primary/30 p-4 flex flex-col gap-1">
                        <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Name product<span class="text-red-500">*</span></h1>
                        <p class="text-gray-500">The name has maximum 150 words</p>
                        <input type="text" placeholder="Input the product’s name " class="bg-white regular-16 focus:outline-none rounded-md p-3"/>    
                    </div>
                    <div class="bg-primary/30 p-4 flex flex-col gap-1">
                        <h1 class="text-white regular-16 md:regular-20 lg:regular-24">Description product<span class="text-red-500">*</span></h1>
                        <p class="text-gray-500">Maximum words in description is 1000 words</p>
                        <textarea name="" id="" cols="30" rows="10" class="bg-white regular-16 focus:outline-none rounded-md p-3 text-grey-500" placeholder="Input your description">
                        
                        </textarea>    
                    </div>
                </div>

            </form>
            

           

           

        </div>

    
        
        

    </div>

    <script>


    </script>
    
    {{-- <a href="{{ route('logoutAdminPage') }}">
        <button type="button">Logout Admin</button>
    </a> --}}

@endsection
