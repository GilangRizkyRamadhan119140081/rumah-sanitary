<?php

namespace App\Http\Livewire\Backend\History;

use App\Models\History;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedHistory extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Title', 'title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-history', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-history', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml(),
            Column::make('Tahun', 'years')->format(function ($value, $column) {
                return $value;
            })->asHtml(),
            Column::make('Image', 'image')->format(function ($value, $column, $row) {
                if ($value) {
                    $imageUrl = Storage::disk('s3')->url($value);
                    return "<img src='" . $imageUrl . "' alt='' class='img-thumbnail' width='150'>";
                } else {
                    return "<span class='text-muted'>Gambar tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-3'),
        ];
    }

    public function query(): Builder
    {
        return History::query();
    }
}
