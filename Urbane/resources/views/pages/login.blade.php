@extends('template.authTemplate')

@section('body')

    {{-- @if(Session::has('error'))
        <script>
            alert('{{ Session::get("error") }}');
        </script>
    @endif --}}

    @if(session()->has('error'))
        <script>
            alert('{{ session('error') }}')
        </script>
    @endif

    <div class="flex flex-col justify-center items-start w-full h-full p-4">

            <div>
                <h1 class="text-3xl text-primary font-bold">Login</h1>
                <h2 class="text-xl text-secondary font-medium">Welcome back Urbanist</h2>
            </div>

        <div class="flex flex-col w-full">
            <form action="{{ route('login') }}" method="POST" class="flex flex-col justify-center gap-8 py-8">
                @csrf
                <div>
                    <div class="flex justify-start items-center border-b-2 py-2 border-stroke w-full @error('email') border-red-500 @enderror">
                        <i class="bx bxs-envelope bx-sm pl-1 pr-2 text-secondary"></i>
                        <input class="input border-l-2 border-stroke bg-transparent w-full text-secondary placeholder-secondary pl-2 focus:outline-none @error('email') is-invalid @enderror" type="email" name="email" id="emailInput" placeholder="Email" value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror 
                </div> 

                <div>
                    <div class="flex justify-start items-center border-b-2 py-2 border-stroke w-full @error('password') border-red-500 @enderror">
                        <i class="bx bxs-lock bx-sm pl-1 pr-2 text-secondary"></i>
                        <input class="input border-l-2 border-stroke bg-transparent w-full text-secondary placeholder-secondary pl-2 focus:outline-none @error('password') is-invalid @enderror" type="password" name="password" id="passwordInput" placeholder="Password">
                        <ion-icon name="eye-outline" class="text-[30px] mr-2 text-secondary " id="eye-open" onclick="hidePassword()"></ion-icon>
                        <ion-icon name="eye-off-outline" class="text-[30px] mr-2 text-secondary hidden" id="eye-closed" onclick="hidePassword()"></ion-icon>
                    </div>
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                

                <a class="font-semibold mt-[-10px] w-full text-right" href="#">Forgot password?</a>

                <button class="text-2xl font-bold text-highlight bg-primary w-full rounded-lg py-2" type="submit">Login</button>
            </form>

            <div class="flex flex-col justify-center items-center gap-4">
                <p>Don't have an account ? <span class="text-primary font-semibold"><a href="{{ route('registerPage') }}">Register here</a></span></p>
            </div>
        </div>
    </div>
    <script>
        let eyeOpen = document.getElementById('eye-open');
        let eyeClosed = document.getElementById('eye-closed');
        let passwordInput = document.getElementById('passwordInput');

        function hidePassword(){
            if(passwordInput.type === 'text'){
                passwordInput.type = 'password'
                eyeClosed.classList.add('hidden');
                eyeOpen.classList.remove('hidden');
            }else{
                passwordInput.type = 'text'
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            }
        }
        let inputs = document.querySelectorAll('.input')

        inputs.forEach(input => {
            input.addEventListener("click", function(){
                inputs.forEach(input => {
                    let inputParent = input.parentNode;
                    inputParent.classList.add('border-stroke')
                    inputParent.classList.remove('border-black')
                })
                let inputParent = input.parentNode;
                inputParent.classList.remove('border-stroke')
                inputParent.classList.add('border-black')
                console.log("masuk")
            })
        });
    </script>
@endsection
