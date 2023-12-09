@extends('template.template')

@section('body')
<div class="flex flex-col justify-center items-center overflow-hidden">
    <div class="container flex flex-col gap-2 my-6 px-2">
        <h1 class="bold-24 md:bold-40 lg:bold-52 text-center text-primary">Favourite</h1>
        <div class="flex flex-row  flex-wrap gap-2">

            {{-- Card Section --}}
            @forelse ($lists as $fav)
                <div class="w-[150px] md:w-[250px] h-[240px] md:h-[300px] lg:h-[400px] bg-lightblue p-4 rounded-md">
                    <img src="{{ asset('storage/' . optional($fav->item->pictures->first())->picture_url) }}" alt="" class="w-full h-[60%] lg:h-[70%]">
                    <div class="flex flex-col gap-3 py-2 justify-between ">
                        <div class="flex flex-col">
                            <h1 class="bold-12 md:bold-16 lg:bold-20">{{ $fav->item->item_name }}</h1>
                            <h2 class="bold-10 md:bold-14 lg:bold-16">Rp {{ number_format($fav->item->item_price, 2, '.', ',') }}</h2>
                        </div>
                        <div class="flex justify-between">
                            <button class="py-1 px-1 md:px-4 border-2 border-black rounded-md bold-10 md:bold-14 lg:bold-16">Add To Cart</button>
                            <div class="flex items-center gap-2">
                                <form action="{{ route('toggleFav', $fav->item->id) }}" method="POST" class="relative">
                                    @csrf
                                    <button>
                                        <i class='bx bxs-heart text-red-500 text-[12px] md:text-[16px]' ></i>
                                    </button>
                                </form>

                                <h1 class="bold-8 md:bold-12 lg:bold-14">Wishlist</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <h1 class="bold-24 md:bold-40 lg:bold-52 text-center text-primary">You have no item on wishlist</h1>
                </div>
            @endforelse
        </div>
    </div>
</div>

    <script>

    </script>

@endsection
