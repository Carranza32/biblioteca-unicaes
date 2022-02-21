<div>
    {{-- wire:submit.prevent='actualizar' --}}
    <form method="post" action="{{ route( $updateMode ? 'books.update' : 'books.store', $book ?? null) }}">
        @csrf
        @if ($updateMode)
            @method('Put')
        @endif
        <x-book-form-modal :showModal="$showModal">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    {{($updateMode) ? "Editar libro" : "Agregar libro"}}
                </h3>
                <div class="mt-5">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="mb-3">
                        <x-label for="title">Titulo</x-label>
                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" required
                            :value="$book->title ?? ''" />
                    </div>
                    <div class="mb-3">
                        <x-label for="autor">Autor</x-label>
                        <x-select id="autor" class="block mt-1 w-full" name="author_id" required >
                            @foreach ($autores as $item)
                                <option value="{{ $item->id }}"
                                    wire:key="lang{{$loop->index}}"
                                    {{ $item->id == ($book->author->id ?? '') ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="mb-3">
                        <x-label for="categoria">Categoria</x-label>
                        <x-select id="categoria" class="block mt-1 w-full" name="category_id" required >
                            @foreach ($categorias as $item)
                                <option value="{{ $item->id }}"
                                    wire:key="{{$item->id}}"
                                    {{ $item->id == ($book->category->id ?? '') ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    <div class="mb-3">
                        <x-label for="editorial">Editorial</x-label>
                        <x-select id="editorial" class="block mt-1 w-full" name="editorial" required >
                            @foreach ($editoriales as $item)
                                <option value="{{ $item->id }}"
                                    wire:key="{{$item->id}}"
                                    {{ $item->id == ($book->editorial->id ?? '') ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        </x-select>
                    </div>
                    {{-- <div class="mb-3">
                        <x-label for="idioma">Idioma</x-label>
                        <x-select id="idioma" class="block mt-1 w-full" name="language" required >
                            @foreach ($idiomas as $item)
                                <option value="{{ $item }}"
                                    wire:key="{{$item}}"
                                    {{ $item == ($idioma ?? '') ? 'selected' : '' }}>
                                    {{ $item->idioma }}</option>
                            @endforeach
                        </x-select>
                    </div> --}}
                    <div class="mb-3">
                        <x-label for="paginas">Paginas</x-label>
                        <x-input id="paginas" class="block mt-1 w-full" type="number" min="0" name="pages" required
                            {{-- wire:model="book.pages" --}}
                            :value="$book->pages ?? ''" />
                    </div>
                    <div class="mb-3">
                        <x-label for="description">Descripcion</x-label>
                        <textarea id="description" name="description" rows="3"
                            {{-- wire:model="book.description" --}}
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md">{{ $book->description ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <x-label for="existencias">Existencias</x-label>
                        <x-input id="existencias" class="block mt-1 w-full" type="number" min="0" name="stock" required
                            {{-- wire:model="book.stock" --}}
                            :value="$book->stock ?? 'vacio'" />
                    </div>
                </div>
            </div>
        </x-book-form-modal>
    </form>
</div>
