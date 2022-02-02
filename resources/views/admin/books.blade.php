<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Libros
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <livewire:live-book-table />
        </div>
    </div>

    @push('modals')
        <livewire:live-modal>
    @endpush

</x-app-layout>
