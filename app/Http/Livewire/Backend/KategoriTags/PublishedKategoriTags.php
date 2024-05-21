<?php

namespace App\Http\Livewire\Backend\KategoriTags;

use App\Models\KategoriTags;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedKategoriTags extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];

    public function columns(): array
    {
        return [
            Column::make('Kategori Tags', 'title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-kategori-tags', $row->slug) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-kategori-tags', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-6'),
        ];
    }

    public function query(): Builder
    {
        return KategoriTags::query()->orderBy('created_at', 'desc');
    }
}
