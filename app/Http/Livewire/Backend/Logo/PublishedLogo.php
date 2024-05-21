<?php

namespace App\Http\Livewire\Backend\Logo;

use App\Models\Logo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class PublishedLogo extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];

    // public function columns(): array
    // {
    //     return [
    //         Column::make('Logo', 'logo')->searchable()->format(function ($value, $column, $row) {
    //             return "
    //             $value
    //             <div class='table-links'>
    //                           <a taret='_blank' href='" . route('detail-logo', $row->id) . "'>View</a>
    //                           <div class='bullet'></div>
    //                           <a href='" . route('edit-logo', $row->id) . "'>Edit</a>
    //                           <div class='bullet'></div>
    //                           <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
    //                         </div>
    //                         ";
    //         })->asHtml()->addClass('col-4'),
    //         Column::make('Logo Footer')->format(function ($value, $column, $row) {
    //             $imageUrl = Storage::disk('s3')->url($row->imagelogo);
    //             return "
    //                 <img src='$imageUrl' alt='' class='img-thumbnail' width='250' height='180'>";
    //         })->asHtml()->addClass('col-4'),
    //         Column::make('Favicon')->format(function ($value, $column, $row) {
    //             $imageUrl = Storage::disk('s3')->url($row->imagefooter);
    //             return "
    //                 <img src='$imageUrl' alt='' class='img-thumbnail' width='150' height='150'>";
    //         })->asHtml()->addClass('col-4'),
    //     ];
    // }
    public function columns(): array
    {
        return [
            Column::make('Logo')->format(function ($value, $column, $row) {
                if ($row->logo) {
                    $logoUrl = Storage::disk('s3')->url($row->logo);
                    return "
                    <img src='$logoUrl' alt='Logo' class='img-thumbnail' width='250' height='180'>
                    <div class='table-links'>
                        <a target='_blank' href='" . route('detail-logo', $row->id) . "'>View</a>
                        <div class='bullet'></div>
                        <a href='" . route('edit-logo', $row->id) . "'>Edit</a>
                        <div class='bullet'></div>
                        <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                    </div>";
                } else {
                    return "<span class='text-muted'>Logo tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-4'),
            Column::make('Logo Footer')->format(function ($value, $column, $row) {
                if ($row->logo_footer) {
                    $imageUrl = Storage::disk('s3')->url($row->logo_footer);
                    return "
                    <img src='$imageUrl' alt='Logo' class='img-thumbnail' width='250' height='180'>
                    <div class='table-links'>
                        <a target='_blank' href='" . route('detail-logo', $row->id) . "'>View</a>
                        <div class='bullet'></div>
                        <a href='" . route('edit-logo', $row->id) . "'>Edit</a>
                        <div class='bullet'></div>
                        <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                    </div>";
                } else {
                    return "<span class='text-muted'>Logo tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-4'),
            Column::make('Favicon')->format(function ($value, $column, $row) {
                if ($row->favicon) {
                    $imageUrl = Storage::disk('s3')->url($row->favicon);
                    return "
                    <img src='$imageUrl' alt='Logo' class='img-thumbnail' width='250' height='180'>
                    <div class='table-links'>
                        <a target='_blank' href='" . route('detail-logo', $row->id) . "'>View</a>
                        <div class='bullet'></div>
                        <a href='" . route('edit-logo', $row->id) . "'>Edit</a>
                        <div class='bullet'></div>
                        <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                    </div>";
                } else {
                    return "<span class='text-muted'>Logo tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-4'),

        ];
    }


    public function query(): Builder
    {
        return Logo::query()->latest();
    }
}
