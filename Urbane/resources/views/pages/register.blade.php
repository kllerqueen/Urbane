@extends('template.authTemplate')

@section('body')
    <div class="flex flex-col justify-center">
        <h1 class="text-primary text-3xl font-bold ">Register</h1>
        <h2 class="text-secondary text-xl mb-8">Be a part of Urbanist!</h2>
        <form method="POST" class="flex flex-col gap-4" action="/register-user">
            @csrf
            <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2">
                <i class='bx bxs-envelope bx-sm pl-1 pr-2'></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary" placeholder="Email" name="email">
            </div>

            <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2">
                <i class='bx bxs-user bx-sm pl-1 pr-2'></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary" placeholder="Username" name="username">
            </div>

            <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2">
                <i class='bx bxs-phone bx-sm pl-1 pr-2'></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary" 
                placeholder="(+62) Phone Number" name="phoneNumber">
            </div>

            <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2">
                <i class='bx bxs-lock bx-sm pl-1 pr-2'></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary" placeholder="password" name="password">
            </div>

            <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2">
                <i class='bx bxs-lock bx-sm pl-1 pr-2'></i>
                <input type="text" class="border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary" placeholder="Confirm Password">
            </div>
            <p class="text-secondary text-sm">By registering your account, you indicate your agreement with the <span class="text-black font-bold">terms and conditions</span> that apply to our website's policy</p>
            <button class="w-full py-2 bg-primary text-lg text-highlight rounded-md mt-4" type="submit">Register</button>
            <p class="self-center text-secondary text-sm">Already have an account? <span><a href="/login" class="font-bold ">Login here</a></span></p>
        </form>
    </div>
@endsection
