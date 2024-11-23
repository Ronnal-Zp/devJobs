@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm bg-red-700 text-white font-bold rounded-sm dark:text-red-400 space-y-1 p-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
