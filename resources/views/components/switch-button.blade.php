<input type="checkbox" name="{{ $name }}" {{ $checked ? 'checked' : false }} id="{{ $id }}"
    value="{{ $id }}">
<label for="{{ $id }}" class="form-check-label ms-3">{{ ucfirst($id) }}</label>

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("{{ '#' . $id }}").bootstrapSwitch();
        });
    </script>
@endpush
