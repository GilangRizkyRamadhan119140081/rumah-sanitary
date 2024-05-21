<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Banner') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-banner') }}">{{ __('Banner') }}</a>
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
                                    <label for="">Posisi Banner <span class="text-danger">*</span></label>
                                    <select wire:model="photo.posisi"
                                        class="form-control @error('photo.posisi') is-invalid @enderror"
                                        name="" id="">
                                        <option value="">-- Posisi Banner --</option>
                                        <option value="Atas">Atas</option>
                                        <option value="Tengah">Tengah</option>
                                    </select>
                                    @error('photo.posisi')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Banner Web / Landscape <span class="text-danger">*</span></label>
                                    <input type="file"
                                        class="form-control-file @error('gambarweb') is-invalid @enderror"
                                        wire:model="gambarweb" aria-describedby="fileHelpId">
                                    @error('gambarweb')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                    @if ($gambarweb)
                                        <div class="mt-2">
                                            <label for="preview">Preview:</label>
                                            <img src="{{ $gambarweb->temporaryUrl() }}" alt="Preview"
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($photo->imageweb)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($photo->imageweb) }}" alt="Current Image Web"
                                            class="img-thumbnail">
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="">Banner Mobile / Potrait <span class="text-danger">*</span></label>
                                    <input type="file"
                                        class="form-control-file @error('gambarmobile') is-invalid @enderror"
                                        wire:model="gambarmobile" aria-describedby="fileHelpId">
                                    @error('gambarmobile')
                                        <span class='invalid-feedback'>
                                            <strong>{{ $message }} </strong>
                                        </span>
                                    @enderror
                                    @if ($gambarmobile)
                                        <div class="mt-2">
                                            <label for="preview">Preview:</label>
                                            <img src="{{ $gambarmobile->temporaryUrl() }}" alt="Preview"
                                                class="img-thumbnail">
                                        </div>
                                    @elseif ($photo->imagemobile)
                                        Current: <br>
                                        <img src="{{ Storage::disk('s3')->url($photo->imagemobile) }}" alt="Current Image Mobile"
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
