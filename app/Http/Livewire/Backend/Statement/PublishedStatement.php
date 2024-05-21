<?php

namespace App\Http\Livewire\Backend\Statement;

use App\Models\Statement;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class PublishedStatement extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('Name', 'name')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-statement', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-statement', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml(),
            Column::make('Title', 'title')->format(function ($value, $column) {
                return $value;
            })->asHtml(),
            Column::make('Pernyataan', 'statement')->format(function ($value, $column) {
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
        return Statement::query();
    }
}
