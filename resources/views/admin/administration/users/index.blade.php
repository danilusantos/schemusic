@extends('admin.layout.app', ['title' => 'Usuários'])

@section('content')
@section('page-header')
    @include('admin.layout.partials.create', [
        'route' => route('admin.administration.users.create'),
    ])
@endsection

<div class="container-lg">

    <div class="card">
        <div class="card-header card-dark bg-dark">
            <span class="card-title text-white">
                Usuários
            </span>
        </div>
        <div class="card-body table-responsive">
            <x-alert-message />
            <table class="table table-striped table-bordered table-sm table-condensed table-hover" id="users-table">
                <caption></caption>
                <thead class="table-dark">
                    <tr>
                        <th colspan="2">Ações</th>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['users'] as $user)
                        <tr>
                            <td class="td-actions">
                                <x-edit-button :route="route('admin.administration.users.edit', ['user' => $user])" />
                            </td>
                            <td class="td-actions">
                                <x-delete-button modalId="deleteUserModal{{ $user->id }}"
                                    modalLabel="deleteUserModalLabel{{ $user->id }}"
                                    deleteRoute="{{ route('admin.administration.users.destroy', ['user' => $user]) }}" />
                            </td>
                            <td>{{ $user->id }}</td>
                            <td class="text-nowrap">{{ $user->name }}</td>
                            <td class="text-nowrap">{{ $user->email }}</td>
                            <td> - </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer card-dark bg-dark">
            {{ $data['users']->links() }}
        </div>
    </div>

</div>

@endsection
