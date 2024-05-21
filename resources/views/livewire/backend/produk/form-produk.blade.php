<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Produk') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-produk') }}">{{ __('Produk') }}</a>
                    </div>
                    <div class="breadcrumb-item">{{ __('Tambah') }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Nama Produk <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('produk.title') is-invalid @enderror"
                                                wire:model="produk.title">
                                            @error('produk.title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Slug <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('produk.slug') is-invalid @enderror"
                                                wire:model="produk.slug">
                                            @error('produk.slug')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Meta Deskripsi <span
                                                    class="text-danger">*</span></label>
                                            <textarea wire:model="produk.excerpt" class="form-control @error('produk.excerpt') is-invalid @enderror"></textarea>

                                            @error('produk.excerpt')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori Produk <span
                                                    class="text-danger">*</span></label>
                                            <select wire:model="produk.kategori_id"
                                                class="form-control @error('produk.kategori_id') is-invalid @enderror"
                                                name="" id="">
                                                <option value="">-- Pilih Kategori --
                                                </option>

                                                @foreach ($kategori as $kategori)
                                                    <option value="{{ $kategori->id }}">
                                                        {{ $kategori->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('produk.kategori_id')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori Label <span
                                                    class="text-danger"></span></label>
                                            <select wire:model="produk.label_id"
                                                class="form-control @error('produk.label_id') is-invalid @enderror"
                                                name="" id="">
                                                <option value="">-- Pilih Kategori --
                                                </option>

                                                @foreach ($label as $label)
                                                    <option value="{{ $label->id }}">
                                                        {{ $label->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('produk.label_id')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Brand Produk</label>
                                            <select wire:model="produk.brand_id"
                                                class="form-control @error('produk.brand_id') is-invalid @enderror"
                                                name="" id="">
                                                <option value="">-- Pilih Brand --
                                                </option>

                                                @foreach ($brand as $brand)
                                                    <option value="{{ $brand->id }}">
                                                        {{ $brand->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('produk.brand_id')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div wire:ignore class="form-group">
                                                <label for="">Tag Produk</label>
                                                <select class="form-control" name="tag_fasilitas[]" multiple
                                                    data-placeholder="--- Pilih Tag ---" data-allow-clear="1"
                                                    id="multiple-select">
                                                    @foreach ($kategoriLayanan as $key => $tag)
                                                        <option value="{{ $tag->id }}"
                                                            {{ in_array($tag->id, $produk->fasilitas->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                            {{ $tag->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga</label>
                                            <input type="text"
                                                class="form-control @error('produk.price') is-invalid @enderror"
                                                wire:model="produk.price">
                                            @error('produk.price')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Diskon</label>
                                            <input type="text"
                                                class="form-control @error('produk.price_disc') is-invalid @enderror"
                                                wire:model="produk.price_disc">
                                            @error('produk.price_disc')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kontak Sales</label>
                                            <select wire:model="produk.users_id"
                                                class="form-control @error('produk.users_id') is-invalid @enderror"
                                                name="" id="">
                                                <option value="">-- Pilih Sales --
                                                </option>

                                                @foreach ($user as $user)
                                                    <option value="{{ $user->id }}">
                                                        {{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('produk.users_id')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="">Tambahkan Marketplace</label> --}}

                                            {{-- @if (!empty($informasi)) --}}
                                            {{-- @foreach ($informasi as $index => $info)
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        wire:model="informasi.{{ $index }}.name"
                                                        placeholder="Judul">
                                                    <input type="text" class="form-control"
                                                        wire:model="informasi.{{ $index }}.value"
                                                        placeholder="Info">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-danger"
                                                            wire:click="removeInfo({{ $index }})">Remove</button>
                                                    </div>
                                                </div>
                                            @endforeach --}}
                                            {{-- @endif --}}
                                            {{-- <button class="btn btn-primary" wire:click="addInfo">Add
                                                Marketplace</button>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="">Rating Produk <span
                                                    class="text-danger">*</span></label>
                                            <div class="rating">
                                                <input type="radio" id="star5" name="rating" value="5"
                                                    wire:model="produk.rating" /><label for="star5"
                                                    title="Excellent"></label>
                                                <input type="radio" id="star4" name="rating" value="4"
                                                    wire:model="produk.rating" /><label for="star4"
                                                    title="Very Good"></label>
                                                <input type="radio" id="star3" name="rating" value="3"
                                                    wire:model="produk.rating" /><label for="star3"
                                                    title="Good"></label>
                                                <input type="radio" id="star2" name="rating" value="2"
                                                    wire:model="produk.rating" /><label for="star2"
                                                    title="Fair"></label>
                                                <input type="radio" id="star1" name="rating" value="1"
                                                    wire:model="produk.rating" /><label for="star1"
                                                    title="Poor"></label>
                                            </div>
                                            @error('produk.rating')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="">Gambar <span class="text-danger">*</span></label>
                                            <input type="file"
                                                class="form-control-file @error('gambar') is-invalid @enderror"
                                                wire:model="gambar" aria-describedby="fileHelpId">
                                            @error('gambar')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                            @if ($gambar)
                                                <div class="mt-2">
                                                    <label for="preview">Preview:</label>
                                                    <img src="{{ $gambar->temporaryUrl() }}" alt="Preview"
                                                        class="img-thumbnail" width="40%" height="auto">
                                                </div>
                                            @elseif ($produk->image)
                                                Current: <br>
                                                <img src="{{ Storage::disk('s3')->url($produk->image) }}"
                                                    alt="Current Image" class="img-thumbnail" width="40%"
                                                    height="auto">
                                            @endif
                                        </div>

                                        <div class="form-group" wire:ignore>
                                            <label for="">Deskripsi</label>
                                            <textarea name="" id="" style="height: 150px" class="form-control body"
                                                data-model="produk.deskripsi" wire:model="produk.deskripsi">{{ $produk ? $produk->deskripsi : '' }}
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Informasi Tambahan</label>

                                            {{-- @if (!empty($informasi)) --}}
                                            @foreach ($informasi as $index => $info)
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        wire:model="informasi.{{ $index }}.name"
                                                        placeholder="Judul">
                                                    <input type="text" class="form-control"
                                                        wire:model="informasi.{{ $index }}.value"
                                                        placeholder="Info">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-danger"
                                                            wire:click="removeInfo({{ $index }})">Remove</button>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{-- @endif --}}
                                            <button class="btn btn-primary" wire:click="addInfo">Add Info</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary" wire:click.prevent="save">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>
    <script>
        //select fasilitas
        $(document).ready(function() {
            $('#multiple-select').select2({
                allowClear: false
            });
            $('#multiple-select').on('change', function(e) {
                let elementName = $(this).attr('id');
                var data = $(this).select2("val");
                @this.set('tag_produk', data);
            });
        });
    </script>
    <script>
        CKEDITOR.ClassicEditor.create(document.querySelector('textarea.body'), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },

            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true,
                }]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'image'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType'
            ]
        }).then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('produk.deskripsi', editor.getData());
            });
        })
    </script>
@endpush
