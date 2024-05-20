@if (session('error'))
    <x-alert type="error" :message="session('error')" />
@endif

@if (session('success'))
    <x-alert type="success" :message="session('success')" />
@endif
