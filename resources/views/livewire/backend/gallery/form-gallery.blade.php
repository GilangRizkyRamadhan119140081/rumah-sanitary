<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Gallery') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-gallery') }}">{{ __('Gallery') }}</a>
                    </div>
                    <div class="breadcrumb-item">{{ __('Tambah') }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="">Gambar</label>
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
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($photo->image)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($photo->image) }}" alt="Current Image"
                                            class="img-thumbnail">
                                    @endif
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
@endpush
