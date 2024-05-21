<?php

namespace App\Http\Livewire\Backend\KategoriBlog;

use App\Models\KategoriBlog;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedKategoriBlog extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];

    public function columns(): array
    {
        return [
            Column::make('Kategori Blog', 'title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-kategori-blog', $row->slug) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-kategori-blog', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-6'),
            Column::make('Gambar', 'image')->format(function ($value, $column, $row) {
                if ($value) {
                    $imageUrl = Storage::disk('s3')->url($value);
                    return "<img src='" . $imageUrl . "' alt='' class='img-thumbnail' width='150'>";
                } else {
                    return "<span class='text-muted'>Gambar tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-6'),
        ];
    }

    public function query(): Builder
    {
        return KategoriBlog::query()->orderBy('created_at', 'desc');
    }
}
