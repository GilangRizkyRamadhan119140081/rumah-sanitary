<?php

namespace App\Http\Livewire\Backend\Feedback;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Str;

class PublishedFeedback extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];

    public function columns(): array
    {
        return [
            Column::make('Nama', 'name')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-feedback', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-3'),
            Column::make('Email', 'email')->searchable()->format(function ($value, $column) {
                return $value;
            })->asHtml()->addClass('col-3'), 
            Column::make('Subject', 'subject')->searchable()->format(function ($value, $column) {
                return Str::limit($value, 30, '...');
            })->asHtml()->addClass('col-3'),
            Column::make('Penilaian', 'message')->searchable()->format(function ($value, $column) {
                return Str::limit($value, 30, '...');
            })->asHtml()->addClass('col-3'),
        ];
    }

    public function query(): Builder
    {
        return Feedback::query()->orderBy('created_at', 'desc');
    }
}
