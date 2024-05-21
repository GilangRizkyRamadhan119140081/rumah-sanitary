<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Produk') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Produk') }}</div>
            </div>

        </div>

        <div class="section-body">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <ul class="nav nav-pills w-100 mb-4" role="tablist">
                                    <li class="nav-pill ml-auto">
                                        <a class="nav-link active btn-sm" href="{{ route('data-produk') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Produk</td>
                                            <td>
                                                <div>{!! $produk->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Kategori</td>
                                            <td>
                                                <div>{!! $produk->kategori_produk->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Brand</td>
                                            <td>
                                                <div>{!! $produk->brand_produk->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Gambar</td>
                                            <td>
                                                @if ($produk->image)
                                                    <img src='{{ Storage::disk('s3')->url($produk->image) }}'
                                                        alt='{{ $produk->slug }}' class='img-thumbnail'
                                                        width='150' />
                                                @else
                                                    <span class='text-muted'>Gambar tidak tersedia</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Slug</td>
                                            <td>
                                                <div class="badge badge-primary">{!! $produk->slug !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Harga</td>
                                            <td>
                                                @if ($produk->price)
                                                    <div>Rp. {!! $produk->price !!},-</div>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Harga Disc</td>
                                            <td>
                                                @if ($produk->price_disc)
                                                    <div>Rp. {!! $produk->price_disc !!},-</div>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Nilai Disc</td>
                                            <td>
                                                <div>{!! $produk->diskon !!}%</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Sales</td>
                                            <td>
                                                <div>{!! $produk->sales_produk->name !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">No. Sales</td>
                                            <td>
                                                <div>{!! $produk->sales_produk->telp !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Rating</td>
                                            <td>
                                                <div>{!! $produk->rating !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Deskripsi</td>
                                            <td>
                                                <div>{!! $produk->deskripsi !!}</div>
                                            </td>
                                        </tr>

                                        @if ($produk->media !== null)
                                            <tr>
                                                <td style="font-weight: 700">Gambar</td>
                                                <td>
                                                    <div>
                                                        <img src="{{ Storage::disk('s3')->url($produk->media) }}"
                                                            alt="" class="img-thumbnail" width="150">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $produk->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $produk->updated_at !!}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
