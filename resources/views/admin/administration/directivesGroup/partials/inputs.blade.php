<div class="col-12 col-md-12">
    <div class="form-group">
        <h6>
            Grupo: <span class="fw-bold">{{ $group->name }}</span>
        </h6>
    </div>
</div>

@foreach ($permissions as $permission)
    <div class="col-12 col-md-4">
        <div class="form-group form-check">
            <x-switch-button :checked="$group->hasPermission($permission['name'])" name="permissions[]" id="{{ $permission['name'] }}" />
        </div>
    </div>
@endforeach
