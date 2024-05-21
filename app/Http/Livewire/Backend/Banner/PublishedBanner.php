<?php

namespace App\Http\Livewire\Backend\Banner;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PublishedBanner extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];
    
    public function columns(): array
    {
        return [
            Column::make('Posisi Banner', 'posisi')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-banner', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-banner', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-4'),
            Column::make('Banner Web')->format(function ($value, $column, $row) {
                $imageUrl = Storage::disk('s3')->url($row->imageweb);
                return "
                    <img src='$imageUrl' alt='' class='img-thumbnail' width='250' height='180'>";
            })->asHtml()->addClass('col-4'),
            Column::make('Banner Mobile')->format(function ($value, $column, $row) {
                $imageUrl = Storage::disk('s3')->url($row->imagemobile);
                return "
                    <img src='$imageUrl' alt='' class='img-thumbnail' width='150' height='150'>";
            })->asHtml()->addClass('col-4'),
        ];
    }

    public function query(): Builder
    {
        return Banner::query()->latest();
    }
}
