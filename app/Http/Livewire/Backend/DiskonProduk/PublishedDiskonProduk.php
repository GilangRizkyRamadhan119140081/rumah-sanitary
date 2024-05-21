<?php

namespace App\Http\Livewire\Backend\DiskonProduk;

use App\Models\DiskonProduk;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedDiskonProduk extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];
    
    public function columns(): array
    {
        return [
            Column::make('Diskon Produk', 'data_produk.title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                             <a taret='_blank' href='" . route('detail-diskon-produk', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-diskon-produk', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-6'),
            Column::make('Gambar', 'data_produk.image')->format(function ($value, $column, $row) {
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
        return DiskonProduk::query()->with('data_produk')->orderBy('created_at', 'desc'); 
    }
}
