@extends('admin.layout.app', ['title' => 'Planos'])

@section('breadcrumb')
    {{ Breadcrumbs::render('admin.plans.index') }}
@endsection
@section('content')
    <div class="container-lg">
        <x-alert-message />
        <div class="card">
            <div class="card-header clearfix">
                <span class="card-title text-secondary fw-bold">
                    Planos
                </span>

                <x-create-button routeCreate="{{ route('admin.administration.plans.create') }}" />
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-condensed m-0 mb-0 table-hover" id="plans-table">
                    <thead>
                        <tr>
                            <th class="text-secondary">Id</th>
                            <th class="text-secondary">Nome</th>
                            <th class="text-secondary">Descrição</th>
                            <th class="text-secondary">Valor R$</th>
                            <th class="text-secondary">Status</th>
                            <th class="text-secondary" colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data['plans'] as $plan)
                            <tr>
                                <td class="text-secondary td-ids">{{ $plan->id }}</td>
                                <td class="text-secondary text-uppercase">{{ $plan->name }}</td>
                                <td class="text-secondary text-nowrap text-truncate">
                                    {{ $plan->description }}
                                </td>
                                <td class="text-secondary">R$ {{ str_replace('.', ',', $plan->value) }}</td>
                                <td class="text-secondary">{{ $plan->status ? 'Ativo' : 'Inativo' }}</td>
                                <td class="td-actions">
                                    <x-edit-button
                                        route="{{ route('admin.administration.plans.edit', [
                                            'plan' => $plan,
                                        ]) }}" />
                                </td>
                                <td class="td-actions">
                                    <x-delete-button modalId="deletePlanModal{{ $plan->id }}"
                                        modalLabel="deletePlanModalLabel{{ $plan->id }}"
                                        deleteRoute="{{ route('admin.administration.plans.destroy', ['plan' => $plan]) }}" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($data['plans']->links()->paginator->lastPage() > 1)
                <div class="card-footer">
                    {{ $data['plans']->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
