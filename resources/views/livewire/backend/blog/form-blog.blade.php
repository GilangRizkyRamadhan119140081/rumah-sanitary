<div>
    <div>

        <section class="section">

            <div class="section-header">

                <h1> {{ __('Blog') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-blog') }}">{{ __('Blog') }}</a></div>
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
                                            <label for="">Judul <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('blogs.title') is-invalid @enderror"
                                                wire:model="blogs.title">
                                            @error('blogs.title')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Slug <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('blogs.slug') is-invalid @enderror"
                                                wire:model="blogs.slug">
                                            @error('blogs.slug')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi Singkat <span
                                                    class="text-danger">*</span></label>
                                            <textarea wire:model="blogs.excerpt" class="form-control @error('blogs.excerpt') is-invalid @enderror"></textarea>

                                            @error('blogs.excerpt')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keyword</label>
                                            <textarea wire:model="blogs.keyword" class="form-control @error('blogs.keyword') is-invalid @enderror"></textarea>

                                            @error('blogs.keyword')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Kategori Blog</label>
                                            <select wire:model="blogs.kategori_id"
                                                class="form-control @error('blogs.kategori_id') is-invalid @enderror"
                                                name="" id="">
                                                <option value="">-- Pilih Kategori --
                                                </option>

                                                @foreach ($kategori as $kategori)
                                                    <option value="{{ $kategori->id }}">
                                                        {{ $kategori->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('blogs.kategori_id')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="">Kategori Tags</label>
                                            <select class="form-control" name="tag_fasilitas[]" multiple
                                                data-placeholder="--- Pilih Fasilitas ---" data-allow-clear="1"
                                                id="multiple-select" wire:model="blogs.tag_fasilitas[]">
                                                @foreach ($kategoritags as $tags)
                                                    <option value="{{ $tags->id }}">{{ $tags->title }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}

                                        <div class="form-group">
                                            <div wire:ignore class="form-group">
                                                <label for="">Tag Blog</label>
                                                <select class="form-control" name="tag_fasilitas[]" multiple
                                                    data-placeholder="--- Pilih Tag ---" data-allow-clear="1"
                                                    id="multiple-select">
                                                    @foreach ($kategoriLayanan as $key => $tag)
                                                        <option value="{{ $tag->id }}"
                                                            {{ in_array($tag->id, $blogs->fasilitas->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                            {{ $tag->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Status <span class="text-danger">*</span></label>
                                                <select wire:model="blogs.status"
                                                    class="form-control @error('blogs.status') is-invalid @enderror"
                                                    name="" id="">
                                                    <option value="Draft">Draft</option>
                                                    <option value="Publish">Publish</option>
                                                </select>
                                                @error('blogs.status')
                                                    <span class='invalid-feedback'>
                                                        <strong>{{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Tanggal Publish <span
                                                        class="text-danger">*</span></label>
                                                <input type="date"
                                                    class="form-control @error('blogs.published_at') is-invalid @enderror"
                                                    name="" id="" placeholder=""
                                                    wire:model="blogs.published_at">
                                                @error('blogs.published_at')
                                                    <span class='invalid-feedback'>
                                                        <strong>{{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" wire:ignore>
                                        <label for="">Konten</label>
                                        <textarea class="form-control body" data-model="blogs.content" wire:model="blogs.content">{{ $blogs ? $blogs->content : '' }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gambar <span class="text-danger">*</span></label>
                                        <input type="file"
                                            class="form-control-file @error('gambar') is-invalid @enderror"
                                            wire:model="gambar" aria-describedby="fileHelpId">
                                        <!-- <small id="fileHelpId" class="form-text text-muted">Help text</small> -->
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
                                        @elseif ($blogs->image)
                                            <div class="mt-2">
                                                <label for="currentImage">Current Image:</label>
                                                <img src="{{ Storage::disk('s3')->url($blogs->image) }}"
                                                    alt="Current Image" class="img-thumbnail" width="40%"
                                                    height="auto">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama Penulis <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('blogs.created_by') is-invalid @enderror"
                                            wire:model="blogs.created_by">
                                        @error('blogs.created_by')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                        @enderror
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        //select fasilitas
        $(document).ready(function() {
            $('#multiple-select').select2({
                allowClear: false
            });
            $('#multiple-select').on('change', function(e) {
                let elementName = $(this).attr('id');
                var data = $(this).select2("val");
                @this.set('tags', data);
            });
        });
    </script>
    <script>
        // $(document).ready(function() {
        //     $('#multiple-select').select2({
        //         allowClear: false
        //     });

        //     $('#multiple-select').on('change', function(e) {
        //         var selectedValues = $(this).val();
        //         @this.set('selectedTags', selectedValues);
        //     });
        // });



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
                @this.set('blogs.content', editor.getData());
            });
        })
    </script>
@endpush
