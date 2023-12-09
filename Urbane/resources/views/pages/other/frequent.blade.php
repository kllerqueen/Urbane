@extends('template.template');

@section('body')
    <div class="flex flex-col min-h-screen items-center">
        <h1 class="bold-40 lg:bold-52 text-primary">FREQUENTLY ASKED QUESTIONS</h1>
        <div class="flex flex-row">
            <div class="flex flex-col gap-1">
                {{-- First Block --}}
                <div class="w-[400px] h-auto bg-[#EEF7FF] cursor-pointer">
                    <div class="flex flex-row p-5 gap-2">
                        <img src="{{ url('assets/faq/FAQ-1.png') }}" class="w-[52px] h-[52px]" alt="/">
                        <div class="">
                            <p class="bold-18">Product Information</p>
                            <p class="bold-16 text-secondary">Need help to know about product?</p>
                            <p class="bold-16 text-secondary">Check here</p>
                        </div>
                    </div>
                </div>
                
                <div class="w-auto h-auto bg-[#EEF7FF] cursor-pointer">
                    <div class="flex flex-row p-5 gap-2">
                        <img src="{{ url('assets/faq/FAQ-2.png') }}" class="w-[52px] h-[52px]" alt="/">
                        <div class="">
                            <p class="bold-18">Ordering & Payment</p>
                            <p class="bold-16 text-secondary">Need help to know about product?</p>
                            <p class="bold-16 text-secondary">Check here</p>
                        </div>
                    </div>
                </div>

                <div class="w-auto h-auto bg-[#EEF7FF] cursor-pointer">
                    <div class="flex flex-row p-5 gap-2">
                        <img src="{{ url('assets/faq/FAQ-3.png') }}" class="w-[52px] h-[52px]" alt="/">
                        <div class="">
                            <p class="bold-18">Shipping</p>
                            <p class="bold-16 text-secondary">Need help to know about product?</p>
                            <p class="bold-16 text-secondary">Check here</p>
                        </div>
                    </div>
                </div>

                <div class="w-auto h-auto bg-[#EEF7FF] cursor-pointer">
                    <div class="flex flex-row p-5 gap-2">
                        <img src="{{ url('assets/faq/FAQ-4.png') }}" class="w-[52px] h-[52px]" alt="/">
                        <div class="">
                            <p class="bold-18">Account & Registration</p>
                            <p class="bold-16 text-secondary">Need help to know about product?</p>
                            <p class="bold-16 text-secondary">Check here</p>
                        </div>
                    </div>
                </div>

                <div class="w-auto h-auto bg-[#EEF7FF] cursor-pointer">
                    <div class="flex flex-row p-5 gap-2">
                        <img src="{{ url('assets/faq/FAQ-5.png') }}" class="w-[52px] h-[52px]" alt="/">
                        <div class="">
                            <p class="bold-18">Security & Privacy</p>
                            <p class="bold-16 text-secondary">Need help to know about product?</p>
                            <p class="bold-16 text-secondary">Check here</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                Test
            </div>
        </div>
    </div>
@endsection