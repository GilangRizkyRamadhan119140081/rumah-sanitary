<?php

namespace App\Http\Livewire\Backend\Gallery;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PublishedGallery extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];
    
    public function columns(): array
    {
        return [
            Column::make('Gambar')->format(function ($value, $column, $row) {
                $imageUrl = Storage::disk('s3')->url($row->image);
                return "
                    <img src='$imageUrl' alt='' class='img-thumbnail' width='150'>
                    <div class='table-links'>
                        <a href='" . route('detail-gallery', $row->id) . "'>View</a>
                        <div class='bullet'></div>
                        <a href='" . route('edit-gallery', $row->id) . "'>Edit</a>
                        <div class='bullet'></div>
                        <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                    </div>";
            })->asHtml()->addClass('col-12'),

        ];
    }

    public function query(): Builder
    {
        return Gallery::query()->latest();
    }
}
