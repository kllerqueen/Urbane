
<button>Insert New Item</button>

@if(count($items) > 0)
<div class="card-con">
    @foreach ($items as $item)
        <div class="card">
            <p>{{$item->item_name}}</p>
            {{-- <p>{{$item->item_desc}}</p> --}}
            <p>{{$item->item_price}}</p>
            <form action="/delete-item/{{ $item->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    @endforeach
</div>
    
@else
    <p>No items available</p>
@endif

<div>
    <a href="{{ route('logoutAdminPage') }}"><button class="underline text-white px-0 md:px-2 ">Logout</button></a>
</div>

<style>
    .card{
        border: 2px solid black;
        width: 200px;
        margin: 5px;
       
    }

    .card-con{
        display: flex;
        flex-wrap: wrap;
    }
</style>