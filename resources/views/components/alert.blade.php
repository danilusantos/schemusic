@props(['type', 'message'])

<div class="alert alert-{{ $type }} bg-{{ $type }}">
    {{ $message }}
</div>
