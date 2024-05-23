<div class="card">
    <div class="card-header d-flex">
        <x-back-button :route="$backRoute" />
        <span class="card-title ms-3 text-secondary fw-bold">
            {{ $title }}
        </span>
    </div>
    <div class="card-body">
        <x-alert-message />
        <form method="POST" action="{{ $action }}" id="form-{{ $modelName }}">
            @csrf
            @if ($method !== 'POST')
                @method($method)
            @endif

            <div class="row mx-auto">
                @include($fieldView, ['data' => $model])
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success" onclick="$('#form-{{ $modelName }}').submit()">Salvar</button>
    </div>
</div>
