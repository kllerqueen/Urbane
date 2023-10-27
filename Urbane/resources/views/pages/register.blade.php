@extends('template.authTemplate')

@section('body')
    <div class="flex flex-col justify-center">
        <h1 class="text-primary text-3xl font-bold ">Register</h1>
        <h2 class="text-secondary text-xl mb-8">Be a part of Urbanist!</h2>
        <form action="" method="POST">
            <span class="flex items-center gap-2 py-2 border-b-2">
                <i class='bx bxs-envelope bx-sm'></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-4 " placeholder="Email">
            </span>
            
        </form>
    </div>
@endsection