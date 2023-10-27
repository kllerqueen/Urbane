@extends('template.forgetTemplate')

@section('body')
<div class="flex flex-col justify-stretch ">
    <h1 class="text-primary text-3xl font-bold">Security Question</h1>
    <h2 class="text-secondary text-1xl font-light">Fill the security question</h2>
    
    <div class="flex max-w-620 h-auto border-solid">
        
        <p class="text-stroke">Who is your best friend?</p>
    </div>

    <form action="" method="POST">
        <span class="flex items-center gap-2 py-2 border-b-2">
            <i class="bx bxs-chat bx-sm"></i>
            <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-4" placeholder="Answer">
        </span>
    </form>

    <button class="bg-primary rounded-md text-2xl font-bold text-highlight">Submit</button>

    
    
</div>
@endsection