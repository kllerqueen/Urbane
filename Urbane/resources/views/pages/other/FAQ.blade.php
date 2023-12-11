@extends('template.template')

@section('body')
    <div class="flex flex-col justify-center items-center px-5">
        <h1 class="bold-24 md:bold-32 lg:bold-52 text-primary">FREQUENTLY ASKED QUESTIONS</h1>
        <div class="flex flex-col md:flex-row justify-between gap-8 container py-4 items-center md:items-start w-full">
            <div class="flex flex-wrap md:flex-col gap-2  h-fit max-w-[500px] items-center md:items-start justify-center md:justify-start">
                <div class="bg-bgcolor p-4 flex items-center gap-4 rounded-sm shadow-xl border-l-4 border-primary cursor-pointer" onclick="showContent(0)" id="cat">
                    <img src="{{url('assets/FAQ/FAQ1.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="hidden md:flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">Product Information</h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">Need help to know about product? Check here</p>
                    </div>
                </div>
                <div class="bg-bgcolor p-4 flex items-center gap-4 rounded-sm cursor-pointer" onclick="showContent(1)" id="cat">
                    <img src="{{url('assets/FAQ/FAQ2.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="flex-col hidden sm:flex">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">Ordering & Payment</h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">Need help to know about product? Check here</p>
                    </div>
                </div>
                <div class="bg-bgcolor p-4 flex items-center gap-4 rounded-sm cursor-pointer" onclick="showContent(2)" id="cat">
                    <img src="{{url('assets/FAQ/FAQ3.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="hidden sm:flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">Shipping</h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">Need help to know about product? Check here</p>
                    </div>
                </div>
                <div class="bg-bgcolor p-4 flex items-center gap-4 rounded-sm cursor-pointer" onclick="showContent(3)" id="cat">
                    <img src="{{url('assets/FAQ/FAQ4.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="hidden sm:flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">Account & Registration</h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">Need help to know about product? Check here</p>
                    </div>
                </div>
                <div class="bg-bgcolor p-4 flex items-center gap-4 rounded-sm cursor-pointer" onclick="showContent(4)" id="cat">
                    <img src="{{url('assets/FAQ/FAQ5.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="hidden sm:flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">Security & Privacy</h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">Need help to know about product? Check here</p>
                    </div>
                </div>
            </div>
            
            {{-- content 1--}}
            <div class="flex flex-col max-w-[800px] w-full" id="container">
                <div class=" p-4 flex items-center gap-4 rounded-sm">
                    <img src="{{url('assets/FAQ/FAQ1.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">
                            Product Information
                        </h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">
                            Need help to know about product? Check here
                        </p>
                    </div>
                </div>
                {{-- dropdown --}}
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            How do I find detailed information about a specific product?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        To get more information about a product, simply click on the product image or title. This will take you to the product page, where you can find detailed descriptions, specifications, customer reviews, and more.
                    </h1>
                </div>
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            Are your items brand new, or do you sell reconditioned stuff?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        We primarily sell brand-new items.
                    </h1>
                </div>
            </div>

            {{-- content 2--}}
            <div class="flex flex-col max-w-[800px] w-full hidden" id="container">
                <div class=" p-4 flex items-center gap-4 rounded-sm">
                    <img src="{{url('assets/FAQ/FAQ2.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">
                            Ordering & Payment
                        </h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">
                            Need help to know about product? Check here
                        </p>
                    </div>
                </div>
                {{-- dropdown --}}
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            Is it necessary to create an account in order to place a purchase?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        While it is not required to create an account, it does provide perks such as order tracking, faster checkout, and exclusive promotions. If you want, you can also check out as a guest.
                    </h1>
                </div>
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            Can I change or cancel my order once it has been placed?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        When an order is confirmed, it is routed to our processing system. As a result, changes or cancellations may be impossible. Please double-check your order before completing the transaction.
                    </h1>
                </div>
            </div>

            {{-- content 3--}}
            <div class="flex flex-col max-w-[800px] w-full hidden" id="container">
                <div class=" p-4 flex items-center gap-4 rounded-sm">
                    <img src="{{url('assets/FAQ/FAQ3.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="flex-col hidden sm:flex">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">
                            Shipping
                        </h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">
                            Need help to know about product? Check here
                        </p>
                    </div>
                </div>
                {{-- dropdown --}}
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            Can I change my shipping address after placing an order?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        We are unable to amend the mailing address once an order has been placed. Please double-check your shipping information before finishing your purchase. If you have any problems, please contact our customer service as soon as possible.
                    </h1>
                </div>
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            What if my order is declared "delivered," but I haven't received it?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        Check with neighbors and your local post office if your order is marked as delivered but you haven't gotten it.
                    </h1>
                </div>
            </div>

            {{-- content 4--}}
            <div class="flex flex-col max-w-[800px] w-full hidden" id="container">
                <div class=" p-4 flex items-center gap-4 rounded-sm">
                    <img src="{{url('assets/FAQ/FAQ4.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">Account & Registration</h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">Need help to know about product? Check here</p>
                    </div>
                </div>
                {{-- dropdown --}}
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            How do I create an account on your website?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        To create an account, go to our homepage and click the "Sign Up" or "Create Account" link. Fill in the needed information, such as your email address and a strong password. After completing the form, you will receive a confirmation email.
                    </h1>
                </div>
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">What are the benefits of creating an account?</h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        Account members gain access to unique deals and discounts, as well as purchase monitoring and speedier checkout. You may also bookmark shipping addresses for a more convenient purchasing experience.
                    </h1>
                </div>
            </div>

            {{-- content 5--}}
            <div class="flex flex-col max-w-[800px] w-full hidden" id="container">
                <div class=" p-4 flex items-center gap-4 rounded-sm">
                    <img src="{{url('assets/FAQ/FAQ5.png')}}" alt="" class="w-[50px] h-[50px]">
                    <div class="flex flex-col">  
                        <h1 class="bold-16 md:bold-20 lg:bold-24">
                            Security & Privacy
                        </h1>
                        <p class="regular-12 md:regular-14 lg:regular-16 text-secondary">
                            Need help to know about product? Check here
                        </p>
                    </div>
                </div>
                {{-- dropdown --}}
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            How do you ensure the security of my personal information?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        We place a high value on the security of your personal information. To protect data during transmission, our website uses encryption techniques (SSL). Furthermore, we have strong security procedures in place to protect your information within our systems.
                    </h1>
                </div>
                <div class="w-full flex flex-col p-4 gap-4">
                    <div class="flex flex-row justify-between w-full items-center  border-b-4 border-primary p-2">
                        <h1 class="text-primary bold-16 md:bold-20 lg:bold-24  ">
                            What information do you collect, and how is it used?
                        </h1>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 hidden" id="down">
                            <i class='bx bx-chevron-down text-[25px] md:text-[40px]'></i>
                        </div>
                        <div class="rounded-full border-2 border-secondary bg-white shadow-md flex items-center justify-center p-2 " id="up">
                            <i class='bx bx-chevron-up text-[25px] md:text-[40px]'></i>
                        </div>
                    </div>
                    <h1 id="dropdown" class="regular-12 md:regular-16 lg:regular-20 overflow-hidden transition-all duration-300">
                        We only collect the information required to execute your orders and deliver a tailored shopping experience. This information contains your name, address, and contact information. We do not share your information with third parties unless you give us permission.
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <script>
        let ups = document.querySelectorAll('#up');
        let downs = document.querySelectorAll('#down');
        let dropdown = document.querySelectorAll('#dropdown');
        let containers = document.querySelectorAll('#container');
        let cats = document.querySelectorAll('#cat');

        downs.forEach((down,index) => {
            down.addEventListener("click", function(){
                ups[index].classList.toggle('hidden');
                down.classList.toggle('hidden');
                dropdown[index].classList.toggle('h-0');
            })
        });
        ups.forEach((up,index) => {
            up.addEventListener("click", function(){
                up.classList.toggle('hidden');
                downs[index].classList.toggle('hidden');
                dropdown[index].classList.toggle('h-0');
            })
        })
        
        function showContent(index){
            containers.forEach(container=>{
                container.classList.add('hidden');
            })
            cats.forEach(cat=>{
                cat.classList.remove('shadow-xl', 'border-l-4', 'border-primary')
            })
            containers[index].classList.remove('hidden');
            cats[index].classList.add('shadow-xl', 'border-l-4', 'border-primary')
        }

        
        
    </script>
@endsection