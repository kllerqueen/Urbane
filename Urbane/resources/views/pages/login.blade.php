@extends('template.authTemplate')

@section('body')
    <div class="font-urbanist h-screen w-full">
        <div class="flex justify-center items-center w-full h-full">
            <div class="max-w-620 h-auto border-solid bg-bgcolor">
                <div>
                    <h1 class="text-3xl text-primary font-bold">Login</h1>
                    <h2 class="text-xl text-secondary font-medium">Welcome back Urbanist</h2>
                </div>

                <form action="" class="flex flex-col justify-center items-center gap-8">
                    <div class="flex justify-start items-center border-b-2">
                        <i></i>
                        <input type="text" name="email" id="emailInput">
                    </div>
                    <div class="flex justify-start items-center border-b-2">
                        <i></i>
                        <input type="text" name="password" id="passwordInput">
                    </div>
                </form>

                <div class="flex flex-col justify-center items-center">
                    <button class="text-2xl font-bold text-highlight bg-primary w-[90%] rounded-lg">Login</button>
                    <p>Don't have an account ? <span><a href="">Register here</a></span></p>
                </div>
            </div>
        </div>
    </div>
@endsection