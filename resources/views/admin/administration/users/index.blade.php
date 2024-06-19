@extends('admin.layout.app', ['title' => 'Usuários'])

@section('content')
    <div class="container-lg">
        <x-alert-message />
        <div class="card">
            <div class="card-header clearfix">
                <span class="card-title text-secondary fw-bold">
                    Usuários
                </span>

                <x-create-button routeCreate="{{ route('admin.administration.users.create') }}" />
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-condensed m-0 mb-0 table-hover" id="users-table">
                    <thead>
                        <tr>
                            <th class="text-right text-secondary">Id</th>
                            <th class="text-secondary">Nome</th>
                            <th class="text-secondary">E-mail</th>
                            <th class="text-secondary">Grupo</th>
                            <th class="text-secondary" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['users'] as $user)
                            <tr>
                                <td class="text-right text-secondary">{{ $user->id }}</td>
                                <td class="text-secondary">{{ $user->name }}</td>
                                <td class="text-secondary">{{ $user->email }}</td>
                                <td class="text-secondary">{{ $user->group->name }}</td>
                                <td class="td-actions">
                                    <x-edit-button
                                        route="{{ route('admin.administration.users.edit', [
                                            'user' => $user,
                                        ]) }}" />
                                </td>
                                <td class="td-actions">
                                    <x-delete-button modalId="deleteUserModal{{ $user->id }}"
                                        modalLabel="deleteUserModalLabel{{ $user->id }}"
                                        deleteRoute="{{ route('admin.administration.users.destroy', ['user' => $user->id]) }}" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($data['users']->links()->paginator->lastPage() > 1)
                <div class="card-footer">
                    {{ $data['users']->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
