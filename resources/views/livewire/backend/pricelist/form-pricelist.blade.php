<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Price List') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-pricelist') }}">{{ __('PriceList')
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
                                            <label for="">Title</label>
                                            <textarea wire:model="pricelist.title"
                                                class="form-control @error('pricelist.title') is-invalid @enderror"></textarea>

                                            @error('pricelist.title')
                                            <span class='invalid-feedback'>
                                                <strong>{{ $message }} </strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">File <span class="text-danger">*</span></label>
                                            <input type="file"
                                                class="form-control-file @error('image') is-invalid @enderror"
                                                wire:model="image" aria-describedby="fileHelpId"
                                                accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                                            @error('image')
                                                <span class='invalid-feedback'>
                                                    <strong>{{ $message }} </strong>
                                                </span>
                                            @enderror
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
