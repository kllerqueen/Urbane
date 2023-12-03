@extends('template.forgetTemplate')

@section('body')
    <div class="flex flex-col justify-between  gap-2 items-center relative h-full">
        <img src="{{url('assets/forgetPassword/ChangePasswordSuccess.png')}}" alt="" class="h-[60vh]">
        <h1 class="text-primary bold-20 md:bold-28">Your account has been verified</h1>
        <a href='/login' class="text-secondary regular-16 md:regular-20 ">continue to login page</a>
    </div>  
@endsection