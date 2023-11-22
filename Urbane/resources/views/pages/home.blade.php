@extends('template.template')

@section('body')
    @if($user)
        <h1>Hello Bang, {{ $user->username }}</h1>
    @endif
@endsection