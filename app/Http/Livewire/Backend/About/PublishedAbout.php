<?php

namespace App\Http\Livewire\Backend\About;

use App\Models\About;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PublishedAbout extends DataTableComponent
{
    public function columns(): array
    {
        return [
            Column::make('About Us', 'about_us')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-about', $row->id) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-about', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml(),
            Column::make('Jumlah Cust', 'customer')->format(function ($value, $column) {
                return $value;
            })->asHtml(),
            Column::make('Tahun Mulai', 'start_year')->format(function ($value, $column) {
                return $value;
            })->asHtml(),
            Column::make('Jumlah Pemesanan', 'product_order')->format(function ($value, $column) {
                return $value;
            })->asHtml(),
            Column::make('Quality Produk', 'quality_product')->format(function ($value, $column) {
                return $value;
            })->asHtml(),
            Column::make('History', 'history')->format(function ($value, $column) {
                return $value;
            })->asHtml(),

        ];
    }

    public function query(): Builder
    {
        return About::query();
    }
}
