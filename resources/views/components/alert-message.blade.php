@if (session('error'))
    <x-alert type="danger" :message="session('error')" />
@endif

@if (session('success'))
    <x-alert type="olive" :message="session('success')" />
@endif
