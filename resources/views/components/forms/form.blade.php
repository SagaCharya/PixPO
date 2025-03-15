<form {{ $attributes->merge(['class' => 'max-w-2xl mx-auto space-y-7', 'method' => 'GET']) }}>
    @if ($attributes->get('method') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
{{ $slot }}
</form>