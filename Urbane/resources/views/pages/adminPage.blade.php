
<button>Insert New Item</button>

@if(count($items) > 0)
<div class="card-con">
    @foreach ($items as $item)
        <div class="card">
            <p>{{$item->item_name}}</p>
            {{-- <p>{{$item->item_desc}}</p> --}}
            <p>{{$item->item_price}}</p>
        </div>
    @endforeach
</div>
    
@else
    <p>No items available</p>
@endif


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