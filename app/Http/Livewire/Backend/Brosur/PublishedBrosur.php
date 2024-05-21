<?php

namespace App\Http\Livewire\Backend\Brosur;

use App\Models\Brosur;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedBrosur extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Title', 'title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-brosur', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-brosur', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-3'),
            Column::make('File', 'image')->format(function ($value, $column, $row) {
                if ($value) {
                    $imageUrl = Storage::disk('s3')->url($value);
                    return "<a href='" . $imageUrl . "' target='_blank' class='btn btn-primary btn-sm'>Lihat File</a>";
                } else {
                    return "<span class='text-muted'>File tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-3'),



        ];
    }

    public function query(): Builder
    {
        return Brosur::query();
    }
}
