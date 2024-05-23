@extends('admin.layout.app', ['title' => 'Grupos'])

@section('content')
@section('page-header')
    <x-create-button :route="route('admin.administration.groups.create')" />
@endsection

<div class="container-lg">
    <div class="card">
        <div class="card-header card-dark bg-dark">
            <span class="card-title text-white">
                Grupos
            </span>
        </div>
        <div class="card-body table-responsive">
            <x-alert-message />
            <table class="table table-hover" id="groups-table">
                <caption></caption>
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th colspan="3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['groups'] as $group)
                        <tr>
                            <td class=text-right>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>
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
        <div class="card-footer card-dark bg-dark">
            {{ $data['groups']->links() }}
        </div>
    </div>
</div>

@endsection
