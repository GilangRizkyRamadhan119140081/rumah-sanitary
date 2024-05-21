<?php

namespace App\Http\Livewire\Backend\Produk;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedProduk extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];

    public function columns(): array
    {
        return [
            Column::make('Produk', 'title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-produk', $row->slug) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-produk', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-2'),
            Column::make('Kategori', 'kategori_produk.title')->searchable()->format(function ($value, $column) {
                return "$value";
            })->asHtml()->addClass('col-2'),
            Column::make('Label', 'label_produk.title')->searchable()->format(function ($value, $column) {
                return "$value";
            })->asHtml()->addClass('col-2'),
            Column::make('Brand', 'brand_produk.title')->searchable()->format(function ($value, $column) {
                return "$value";
            })->asHtml()->addClass('col-2'),
            Column::make('Harga', 'price')->format(function ($value, $column) {
                if ($value) {
                    return "Rp. $value,-";
                } else {
                    return "-";
                }
            })->asHtml()->addClass('col-1'),
            Column::make('Harga Disc', 'price_disc')->format(function ($value, $column) {
                if ($value) {
                    return "Rp. $value,-";
                } else {
                    return "-";
                }
            })->asHtml()->addClass('col-2'),
            Column::make('Diskon', 'product')->format(function ($value, $column) {
                if ($value) {
                   $discountPercentage = $this->calculateDiscountPercentage($row->price, $row->price_disc);

                    return number_format($discountPercentage, 2) . "%";
                } else {
                    return "-";
                }
            })->asHtml()->addClass('col-1'),
            Column::make('Rating', 'rating')->searchable()->format(function ($value, $column) {
                return $value;
            })->asHtml()->addClass('col-1'),
            Column::make('Gambar', 'image')->format(function ($value, $column, $row) {
                if ($value) {
                    $imageUrl = Storage::disk('s3')->url($value);
                    return "<img src='" . $imageUrl . "' alt='' class='img-thumbnail' width='150'>";
                } else {
                    return "<span class='text-muted'>Gambar tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-2'),
            Column::make('Sales', 'sales_produk.name')->searchable()->format(function ($value, $column, $row) {
                if ($value) {
                    if($row->sales_produk->telp){
                        return $value . '<br> ( ' . $row->sales_produk->telp . ' )';
                    }else{
                        return $value;
                    }
                } else {
                    return "-";
                }
            })->asHtml()->addClass('col-2'),


        ];
    }

     private function calculateDiscountPercentage($price, $price_disc)
    {
        if ($price > 0) {
            return (($price - $price_disc) / $price) * 100;
        } else {
            return 0;
        }
    }

    public function query(): Builder
    {
        return Produk::query()->with('kategori_produk')->with('label_produk')->with('brand_produk')->with('sales_produk')->orderBy('created_at', 'desc');

    }

}
