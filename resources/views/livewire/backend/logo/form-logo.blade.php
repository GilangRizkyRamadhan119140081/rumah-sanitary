<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Setting Logo') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-logo') }}">{{ __('Logo') }}</a>
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
                                    <label for="">Logo <span class="text-danger">*</span></label>
                                    <input type="file"
                                        class="form-control-file @error('logo') is-invalid @enderror"
                                        wire:model="logo" aria-describedby="fileHelpId">
                                    @error('logo')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                    @if ($logo)
                                        <div class="mt-2">
                                            <label for="preview">Preview:</label>
                                            <img src="{{ $logo->temporaryUrl() }}" alt="Preview"
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($photo->logo)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($photo->logo) }}" alt="Current Image Web"
                                            class="img-thumbnail">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Logo Footer <span class="text-danger">*</span></label>
                                    <input type="file"
                                        class="form-control-file @error('logoFooter') is-invalid @enderror"
                                        wire:model="logoFooter" aria-describedby="fileHelpId">
                                    @error('logoFooter')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                    @if ($logoFooter)
                                        <div class="mt-2">
                                            <label for="preview">Preview:</label>
                                            <img src="{{ $logoFooter->temporaryUrl() }}" alt="Preview"
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($photo->logo_footer)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($photo->logo_footer) }}" alt="Current Image Mobile"
                                            class="img-thumbnail">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Favicon<span class="text-danger">*</span></label>
                                    <input type="file"
                                        class="form-control-file @error('favicon') is-invalid @enderror"
                                        wire:model="favicon" aria-describedby="fileHelpId">
                                    @error('favicon')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                    @if ($favicon)
                                        <div class="mt-2">
                                            <label for="preview">Preview:</label>
                                            <img src="{{ $favicon->temporaryUrl() }}" alt="Preview"
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($photo->favicon)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($photo->favicon) }}" alt="Current Image Mobile"
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
