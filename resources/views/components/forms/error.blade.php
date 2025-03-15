@props(['error'])

@if ($error)
    <p class="mt-2 text-red-500 text-sm">{{ $error }}</p>
@endif
