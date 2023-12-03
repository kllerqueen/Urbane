@extends('template.forgetTemplate')

@section('body')
<div class="flex flex-col justify-between h-[400px] gap-2 items-center  backdrop-blur-xl bg-white/50 p-10 rounded-md">
    <div class="flex flex-col">
        <h1 class="text-primary bold-28 md:bold-32 lg:bold-40">Security Question</h1>
        <h2 class="text-secondary regular-12 md:regular-16 lg:regular-20">Fill the security question</h2>
    </div>
    
    <div class="flex w-full h-auto border-solid flex-col ">
        
        <p class="text-stroke bg-secondary/60 p-3 w-full rounded-md">Who is your best friend?</p>
        <form action="" method="POST" class="py-4">
            <span class="flex items-center gap-2 py-2 border-b-2">
                <i class="bx bxs-chat bx-sm text-secondary" ></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-4" placeholder="Answer">
            </span>
        </form>
    </div>


    <button class="bg-primary rounded-md text-2xl font-bold text-white p-3 w-full">Submit</button>

    
    
</div>
@endsection