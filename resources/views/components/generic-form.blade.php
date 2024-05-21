<div class="card">
    <div class="card-header bg-dark">
        <span class="card-title text-white">
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
    <div class="card-footer bg-dark">
        <button type="submit" class="btn btn-success btn-sm"
            onclick="$('#form-{{ $modelName }}').submit()">Salvar</button>
    </div>
</div>
