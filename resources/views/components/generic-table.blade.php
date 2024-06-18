<x-alert-message />
<div class="card">
    <div class="card-header clearfix">
        <span class="card-title text-secondary fw-bold">
            {{ ucfirst($title) }}
        </span>

        <x-create-button :routeCreate="$routeCreate" />
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-condensed m-0 mb-0 table-hover" id="{{ $routePrefix }}-table">
            <thead>
                <tr>
                    @foreach ($columnsTitle as $columnTitle)
                        <th class="{{ $columnTitle == 'Id' ? 'text-right ' : '' }}text-secondary">
                            {{ ucfirst($columnTitle) }}</th>
                    @endforeach
                    <th class="text-secondary" colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        @foreach ($columns as $column)
                            <td class="{{ $column == 'id' ? 'text-right td-ids ' : '' }}text-secondary">
                                {{ $item->$column }}
                            </td>
                        @endforeach
                        <td class="td-actions">
                            <x-edit-button :route="route('admin.administration.' . $routePrefix . '.edit', [
                                $model => $item,
                            ])" />
                        </td>
                        <td class="td-actions">
                            <x-delete-button modalId="delete{{ ucfirst($model) }}Modal{{ $item->id }}"
                                modalLabel="delete{{ ucfirst($model) }}ModalLabel{{ $item->id }}"
                                deleteRoute="{{ route('admin.administration.' . $routePrefix . '.destroy', [$model => $item->id]) }}" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if ($data->links()->paginator->lastPage() > 1)
        <div class="card-footer">
            {{ $data->links() }}
        </div>
    @endif
</div>
