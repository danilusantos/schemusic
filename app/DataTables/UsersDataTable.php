<?php

namespace App\DataTables;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    public const DATA_FORMAT = 'd/m/Y H:i:s';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format(self::DATA_FORMAT);
            })
            ->editColumn('updated_at', function ($row) {
                return Carbon::parse($row->updated_at)->format(self::DATA_FORMAT);
            });
    }

    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('users-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(0, 'desc')
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload'),
                    ]);
    }
    public function getColumns(): array
    {
        return [
            $this->getId(),
            $this->getName(),
            $this->getEmail(),
            $this->getCreatedAt(),
            $this->getUpdatedAt()
        ];
    }

    protected function filename(): string
    {
        return 'Users_'.date('YmdHis');
    }

    protected function getId()
    {
        return Column::make('id')
            ->title('Id');
    }

    protected function getName()
    {
        return Column::make('name')
            ->title('Nome');
    }

    protected function getEmail()
    {
        return Column::make('email')
            ->title('E-mail');
    }

    protected function getCreatedAt()
    {
        return Column::make('created_at')
            ->title('Data de Criação')
            ->exportRender(function ($row, $data) {
                return date('d/m/Y H:i:s', strtotime($data));
            });
    }

    protected function getUpdatedAt()
    {
        return Column::make('updated_at')
            ->title('Atualizado')
            ->exportRender(function ($row, $data) {
                return date('d/m/Y H:i:s', strtotime($data));
            });
    }
}
