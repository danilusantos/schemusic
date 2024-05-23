@props(['modalId', 'modalLabel', 'deleteRoute'])

<button type="button" class="btn btn-sm sm small btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
    <i class="fas fa-trash-alt"></i>
</button>

<x-delete-modal :modalId="$modalId" :modalLabel="$modalLabel" :deleteRoute="$deleteRoute" />
