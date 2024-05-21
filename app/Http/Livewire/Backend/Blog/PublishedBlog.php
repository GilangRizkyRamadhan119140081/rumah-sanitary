<?php

namespace App\Http\Livewire\Backend\Blog;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Support\Facades\Storage;

class PublishedBlog extends DataTableComponent
{
    protected $listeners = ['refresh' => '$refresh'];

    public function columns(): array
    {
        return [
            Column::make('Judul', 'title')->searchable()->format(function ($value, $column, $row) {
                return "
                $value
                <div class='table-links'>
                              <a taret='_blank' href='" . route('detail-blog', $row->slug) . "'>View</a>
                              <div class='bullet'></div>
                              <a href='" . route('edit-blog', $row->id) . "'>Edit</a>
                              <div class='bullet'></div>
                              <a href='#' class='text-danger btnAction' role='button' data-action='confirm' data-id='$row->id' data-force='false'>Hapus</a>
                            </div>
                            ";
            })->asHtml()->addClass('col-3'),
            Column::make('Kategori', 'kategori_blog.title')->searchable()->format(function ($value, $column, $row) {
                return "$value";
            })->asHtml()->addClass('col-3'),
            Column::make('Gambar', 'image')->format(function ($value, $column, $row) {
                if ($value) {
                    $imageUrl = Storage::disk('s3')->url($value);
                    return "<img src='" . $imageUrl . "' alt='' class='img-thumbnail' width='150'>";
                } else {
                    return "<span class='text-muted'>Gambar tidak tersedia</span>";
                }
            })->asHtml()->addClass('col-3'),
            Column::make('Status', 'status')->format(function ($value, $column) {
                return "<span class='badge badge-primary'>$value</span>";
            })->asHtml()->addClass('col-3'),
        ];
    }

    public function query(): Builder
    {
        return Blog::query()->with('kategori_blog')->orderBy('created_at', 'desc');
    }
}
