<div class="card">
    <div class="card-header card-dark bg-dark">
        <span class="card-title text-white">
            {{ ucfirst($title) }}
        </span>
    </div>
    <div class="card-body table-responsive">
        <x-alert-message />
        <table class="table table-hover" id="{{ $routePrefix }}-table">
            <caption></caption>
            <thead class="table-dark">
                <tr>
                    @foreach ($columnsTitle as $columnTitle)
                        <th {{ $columnTitle == 'Id' ? 'class=text-right' : '' }}>{{ ucfirst($columnTitle) }}</th>
                    @endforeach
                    <th colspan="3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        @foreach ($columns as $column)
                            <td {{ $column == 'id' ? 'class=text-right' : '' }}>{{ $item->$column }}</td>
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
    <div class="card-footer card-dark bg-dark">
        {{ $data->links() }}
    </div>
</div>
