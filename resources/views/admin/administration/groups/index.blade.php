@extends('admin.layout.app', ['title' => 'Grupos'])

@section('content')
    <div class="container-lg">
        <x-alert-message />
        <div class="card">
            <div class="card-header">
                <span class="card-title text-secondary fw-bold">
                    Grupos
                </span>
                <x-create-button :routeCreate="route('admin.administration.groups.create')" />
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table mb-0 table-hover" id="groups-table">
                    <thead>
                        <tr>
                            <th class="text-secondary text-right">Id</th>
                            <th class="text-secondary ">Nome</th>
                            <th colspan="3" class="text-secondary text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['groups'] as $group)
                            <tr>
                                <td class="text-secondary text-right td-ids">{{ $group->id }}</td>
                                <td class="text-secondary">{{ $group->name }}</td>
                                <td class="td-actions">
                                    <a href="{{ route('admin.administration.directivesGroup.edit', ['group' => $group->id]) }}"
                                        class="btn btn-sm btn-dark border-secondary">
                                        <i class="fas fa-cog"></i>
                                    </a>
                                </td>
                                <td class="td-actions">
                                    <x-edit-button :route="route('admin.administration.groups.edit', [
                                        'group' => $group,
                                    ])" />
                                </td>
                                <td class="td-actions">
                                    <x-delete-button modalId="deleteGroupModal{{ $group->id }}"
                                        modalLabel="deleteGroupModalLabel{{ $group->id }}"
                                        deleteRoute="{{ route('admin.administration.groups.destroy', ['group' => $group->id]) }}" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($data['groups']->links()->paginator->lastPage() > 1)
                <div class="card-footer">
                    {{ $data['groups']->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
