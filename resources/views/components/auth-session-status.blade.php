@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm font-bold text-yellow-500 bg-yellow-100 p-3 rounded-md shadow-sm']) }}>
        {{ $status }}
    </div>
@endif
