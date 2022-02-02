<div class="mr-1 mb-3">
    <div class="mt-1 relative rounded-md shadow-sm">
        <select {!! $attributes->merge(['class' => "mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"]) !!}>
            {{$slot}}
        </select>
    </div>
</div>
