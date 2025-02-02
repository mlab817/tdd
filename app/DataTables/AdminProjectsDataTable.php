<?php

namespace App\DataTables;

use App\Models\AdminProject;
use App\Models\Project;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class AdminProjectsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('office', function ($row) {
                return $row->office->acronym ?? '';
            })
            ->addColumn('added by', function ($row) {
                $img =  $row->creator ? '<img src="' . $row->creator->avatar .'" class="img-circle" width="40" height="40">' : '';
                return $row->creator ? $img . '<br/><span class="text-muted text-sm">' . $row->creator->name ?? '' . '</span>' ?? '' : '';
            })
            ->addColumn('users', function ($row) {
                // get all users that have access
                $userList = '<ul class="list-inline">';
                foreach ($row->users->take(5) as $user) {
                    $userList .= '<li class="list-inline-item"><img alt="avatar" class="table-avatar img-circle" src="'. $user->avatar .'" width="40" height="40"></li>';
                }
                return $userList . '</ul>' . ($row->users->count() > 5 ? (' +' . ($row->users->count() - 5 )) . ' others' : '');
            })
            ->addColumn('updated_at', function ($row) {
                return $row->updated_at->diffForHumans(null, null, true);
            })
            ->addColumn('action', function ($row) {
                return '
                    <a class="btn btn-info btn-sm" href="'. route('admin.projects.users.index', $row->getRouteKey()) .'">Manage</a>
                ';
            })
            ->rawColumns(['users','added by','action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\AdminProject $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Project $model)
    {
        return $model->with('creator.office','users')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('adminprojects-table')
                    ->columns($this->getColumns())
                    ->parameters([
                        'responsive' => true,
                        'sPaginationType' => 'full_numbers',
                        'order' => [[0, 'asc']],
                        "lengthMenu" => [[10, 25, 50], [10, 25, 50]]
                    ])
                    ->minifiedAjax()
//                    ->dom('Bfrtip')
                    ->orderBy(0, 'desc');
//                    ->buttons(
//                        Button::make('create')
//                            ->text('Import')
//                            ->action("window.location = '" . route('projects.import.index') ."';"),
//                        Button::make('export'),
//                        Button::make('print'),
//                        Button::make('reset'),
//                        Button::make('reload')
//                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
//            Column::make('id')
//                ->addClass('text-sm text-center'),
            Column::make('title')
                ->addClass('text-sm text-center'),
            Column::make('office')
                ->addClass('text-sm text-center'),
            Column::make('added by')
                ->addClass('text-sm text-center'),
            Column::make('users')
                ->addClass('text-sm text-center'),
            Column::make('updated_at')
                ->addClass('text-sm text-center'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-sm text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'AdminProjects_' . date('YmdHis');
    }
}
