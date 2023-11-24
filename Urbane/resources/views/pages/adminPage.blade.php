@extends('template.adminTemplate')


@section('body')

    <button>Insert New Item</button>

    <div class="flex flex-wrap">
        @forelse ($items as $item)
            <div class="w-[200px] m-1 border-2 border-solid border-black">
                <p>{{$item->item_name}}</p>
                {{-- <p>{{$item->item_desc}}</p> --}}
                <p>{{$item->item_price}}</p>
                <form action="/delete-item/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @empty
            <p>No items available</p>
        @endforelse
    </div>

    <div>
        <a href="{{ route('logoutAdminPage') }}"><button class="underline text-black px-0 md:px-2 ">Logout</button></a>
    </div>

@endsection
