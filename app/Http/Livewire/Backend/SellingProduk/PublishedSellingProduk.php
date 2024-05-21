<?php

namespace App\Http\Livewire\Backend\SellingProduk;

use App\Models\SellingProduk;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedSellingProduk extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];
    
    public function columns(): array
    {
        return [
            Column::make('Selling Produk', 'data_produk.title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                             <a taret='_blank' href='" . route('detail-selling-produk', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-selling-produk', $row->id) . "'>Edit</a>
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
        return SellingProduk::query()->with('data_produk')->orderBy('created_at', 'desc'); 
    }
}
