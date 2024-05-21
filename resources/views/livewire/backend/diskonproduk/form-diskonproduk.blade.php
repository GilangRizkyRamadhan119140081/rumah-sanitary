<div>
    <div>
        <section class="section">
            <div class="section-header">
                <h1> {{ __('Diskon Produk') }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('data-diskon-produk') }}">{{ __('Diskon Produk') }}</a>
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
                                            <label for="">Produk <span class="text-danger">*</span></label>
                                            <select wire:model="diskonproduk.produk_id"
                                                class="form-control @error('diskonproduk.produk_id') is-invalid @enderror"
                                                name="" id="">
                                                <option value="">-- Pilih Produk --
                                                </option>

                                                @foreach ($produk as $produk)
                                                    <option value="{{ $produk->id }}">
                                                        {{ $produk->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('diskonproduk.produk_id')
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
@endpush
