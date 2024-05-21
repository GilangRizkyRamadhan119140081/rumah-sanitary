<?php

namespace App\Http\Livewire\Backend\Blog;

use App\Models\Blog;
use App\Models\KategoriBlog;
use App\Models\KategoriTags;
use App\Models\Tags;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormBlog extends Component
{
    use WithFileUploads;
    public $gambar, $kategoriLayanan, $tags;
    public Blog $blogs;
    public $content;
    public $kategori;
    public $kategoritags;
    public $selectedTags;


    protected $rules = [
        'blogs.title'        => 'required',
        'blogs.slug'         => 'required',
        'blogs.content'      => '',
        'blogs.excerpt'      => 'required',
        // 'blog.image'        => 'required',
        'blogs.status'       => 'required',
        'blogs.kategori_id'  => '',
        'blogs.published_at' => 'required',
        'blogs.keyword' => '',
        'blogs.created_by'        => 'required',
        // 'blogs.tag_fasilitas.*'        => 'required',
    ];

    public function mount($id = null)
{
    $this->blogs = new Blog();
    $this->blogs->status = 'draft';
    $this->blogs->published_at = now()->format('Y-m-d');
    $this->kategori = KategoriBlog::get();
    $this->kategoriLayanan = KategoriTags::get();

    if ($id) {
        $this->blogs = Blog::with('fasilitas')->findOrFail($id);
        $this->blogs->published_at = \Carbon\Carbon::parse($this->blogs->published_at)->format('Y-m-d');
    }
}

    public function render()
    {
        return view('livewire.backend.blog.form-blog');
    }

    public function updatedBlogs($value, $key)
    {
        if ($key == 'title') {
            $this->blogs->slug = Str::slug($value);
            $this->validateOnly('blogs.slug');
        }
    }


    public function save()
    {
        // Validasi gambar jika tidak ada gambar yang diunggah
        if ($this->gambar && is_object($this->gambar)) {
            $this->validate([
                'gambar' => 'image|mimes:jpg,jpeg,png,webp|max:500',
            ]);
        }

        $this->validate([
            'blogs.slug' => 'required|unique:blogs,slug,' . $this->blogs->id,
        ]);

        $this->blogs->user_id = auth()->user()->id;

        // Jika ada gambar yang diunggah, simpan gambar dan tetapkan path gambar ke properti image
        if ($this->gambar) {
            $gambarPath = $this->gambar->store('sanitary/post', 's3');
            $this->blogs->image = $gambarPath;
        }

        try {
            $this->blogs->save();
            if($this->tags){
                Tags::where('blog_id', $this->blogs->id)->delete();
                $this->blogs->fasilitas()->attach($this->tags);
            }
            $this->dispatchBrowserEvent('success-izi', ['ntitle' => 'Success', 'nmessage' => "Data Layanan berhasil ditambahkan"]);
            return redirect(route('data-blog'));
        } catch (\Throwable $th) {
            Log::error($th);
            $this->dispatchBrowserEvent('error-izi', ['ntitle' => 'Error', 'nmessage' => "Blog gagal ditambahkan"]);
        }
    }

}
//
