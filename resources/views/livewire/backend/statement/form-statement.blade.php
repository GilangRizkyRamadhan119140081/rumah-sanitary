<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Our Statement') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-statement') }}">{{ __('Statement')
                            }}</a></div>
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
                                            <label for="">Name</label>
                                            <textarea wire:model="statement.name"
                                                class="form-control @error('statement.name') is-invalid @enderror"></textarea>

                                            @error('statement.name')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Title</label>
                                            <textarea wire:model="statement.title"
                                                class="form-control @error('statement.title') is-invalid @enderror"></textarea>

                                            @error('statement.title')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pernyataan</label>
                                            <textarea wire:model="statement.statement"
                                                class="form-control @error('statement.statement') is-invalid @enderror"></textarea>

                                            @error('statement.statement')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Image <span class="text-danger">*</span></label>
                                            <input type="file"
                                                class="form-control-file @error('image') is-invalid @enderror"
                                                wire:model="image" aria-describedby="fileHelpId">
                                            @error('image')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
                                            @if ($image)
                                                <div class="mt-2">
                                                    <label for="preview">Preview:</label>
                                                    <img src="{{ $image->temporaryUrl() }}" alt="Preview"
                                                        class="img-thumbnail" width="40%" height="auto">
                                                </div>
                                            @elseif ($statement->image)
                                                Current: <br>
                                                <img src="{{ Storage::disk('s3')->url($statement->image) }}"
                                                    alt="Current Image" class="img-thumbnail" width="40%" height="auto">
                                            @endif
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
<script>
    window.initSummernote = () => {
    $(".wysiwyg").summernote({
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'help']],
        ],
        height: 200,
        dialogsInBody: true
    });
}

initSummernote();
window.livewire.on('summernote', () => {
    initSummernote();
});

window.addEventListener('summernote', function() {
    initSummernote();
})

$(".wysiwyg").on('summernote.blur', function() {
    val = $(this).val();
    @this.set($(this).data('model'), val);
    console.log(val);
})

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@endpush
