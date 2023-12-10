@extends('template.authTemplate')

@section('body')
    <div class="flex flex-col justify-center">
        <h1 class="text-primary text-3xl font-bold ">Register</h1>
        <h2 class="text-secondary text-xl mb-8">Be a part of Urbanist!</h2>

        <form method="POST" class="flex flex-col gap-4" action="{{ route('register') }} ">
            @csrf
            <div>
                <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2 @error('email') !border-red-500 @enderror">
                    <i class='bx bxs-envelope bx-sm pl-1 pr-2'></i>
                    <input type="text" name="email" class="input border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary @error('email') bg-black @enderror" placeholder="Email" value="{{ old('email') }}">
                </div>
    
                @error('email')
                <div class="invalid-feedback text-red-600 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div>
                <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2 @error('username') !border-red-500 @enderror">
                    <i class='bx bxs-user bx-sm pl-1 pr-2'></i>
                    <input type="text" name="username" class="input border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                </div>
                @error('username')
                <div class="invalid-feedback text-red-600 text-sm">
                    {{$message}}
                </div>
                @enderror
           </div>

            <div>
                <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2 @error('phoneNumber') !border-red-500 @enderror">
                    <i class='bx bxs-phone bx-sm pl-1 pr-2'></i>
                    <input type="text" name="phoneNumber" class="input border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary @error('phoneNumber') is-invalid @enderror"
                    placeholder="(+62) Phone Number"  value="{{ old('phoneNumber') }}">
                </div>
    
                @error('phoneNumber')
                <div class="invalid-feedback text-red-600 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div>
                <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2 @error('password') !border-red-500 @enderror">
                    <i class='bx bxs-lock bx-sm pl-1 pr-2'></i>
                    <input type="password" name="password" class="input w-full border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary @error('password') is-invalid @enderror" placeholder="password" id="passwordInput">
                    <ion-icon name="eye-outline" class="text-[30px] mr-2 text-secondary " id="eye-open" onclick="hidePassword(0)"></ion-icon>
                    <ion-icon name="eye-off-outline" class="text-[30px] mr-2 text-secondary hidden" id="eye-closed" onclick="hidePassword(0)"></ion-icon>
                </div>
                @error('password')
                <div class="invalid-feedback text-red-600 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div>
                <div class="flex items-center gap-2 py-2 border-b-2 text-secondary border-stroke px-2 @error('con-pass') !border-red-500 @enderror">
                    <i class='bx bxs-lock bx-sm pl-1 pr-2'></i>
                    <input type="password" name="con-pass" class="input w-full border-l-2 border-stroke bg-transparent focus:outline-none pl-2 placeholder:text-secondary @error('con-pass') is-invalid @enderror"  placeholder="Confirm Password" id="passwordInput">
                    <ion-icon name="eye-outline" class="text-[30px] mr-2 text-secondary " id="eye-open" onclick="hidePassword(1)"></ion-icon>
                    <ion-icon name="eye-off-outline" class="text-[30px] mr-2 text-secondary hidden" id="eye-closed" onclick="hidePassword(1)"></ion-icon>
                </div>
                @error('con-pass')
                <div class="invalid-feedback text-red-600 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>

            <p class="text-secondary text-sm">By registering your account, you indicate your agreement with the <span class="text-black font-bold">terms and conditions</span> that apply to our website's policy</p>
            <button class="w-full py-2 bg-primary text-lg text-highlight rounded-md mt-4 font-bold" type="submit">Register</button>
            <p class="self-center text-primary text-sm">Already have an account? <span><a href="/login" class="font-bold ">Login here</a></span></p>
        </form>
    </div>
    <script>
        let eyeOpen = document.querySelectorAll('#eye-open');
        let eyeClosed = document.querySelectorAll('#eye-closed');
        let passwordInput = document.querySelectorAll('#passwordInput');

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

        function hidePassword(index){
            if(passwordInput[index].type === 'text'){
                passwordInput[index].type = 'password'
                eyeClosed[index].classList.add('hidden');
                eyeOpen[index].classList.remove('hidden');
            }else{
                passwordInput[index].type = 'text'
                eyeOpen[index].classList.add('hidden');
                eyeClosed[index].classList.remove('hidden');
            }
        }
    </script>
@endsection
