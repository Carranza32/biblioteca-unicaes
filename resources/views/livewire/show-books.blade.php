<div>
    <div class="container mx-auto">
        <div>
            <x-label for="search" :value="__('Buscar')" />
            <x-input id="search" class="border-gray-50 border-opacity-30 rounded-md block mt-1 w-full" type="text" name="search" wire:model="search" placeholder="Buscar libros por título..."/>
        </div>
    </div>
    <div class="container mx-auto mt-5">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-4">
            @foreach ($books as $item)
                <div class="my-5 mx-3 relative">
                    <a href="{{ route('books.show', $item->id) }}">
                        <img src="{{ asset('images/book-image.jpg')}}" class="shadow-lg rounded-lg" alt="Imagen del libro">
                    </a>

                    @if ($item->has_loan != null)
                        <span class="px-2 py-1 absolute right-2 top-2 leading rounded-full text-white text-xs text-white bg-red-500 font-medium">No Disponible</span>
                    @endif

                    <div class="mt-3 antialiased">
                        <p class="font-semibold">{{$item->title}}</p>
                        <p class="capitalize text-gray-500"><small>{{$item->author->name}}</small></p>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $books->links() }}
    </div>
</div>
