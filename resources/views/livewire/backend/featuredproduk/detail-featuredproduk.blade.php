<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Featured Produk') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Featured Produk') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('data-featured-produk') }}"
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
                                                <div>{!! $featuredproduk->data_produk->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Gambar</td>
                                            <td>
                                                @if ($featuredproduk->data_produk->image)
                                                    <img src='{{ Storage::disk('s3')->url($featuredproduk->data_produk->image) }}'
                                                        alt='{{ $featuredproduk->data_produk->slug }}' class='img-thumbnail'
                                                        width='150' />
                                                @else
                                                    <span class='text-muted'>Gambar tidak tersedia</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Slug</td>
                                            <td>
                                                <div class="badge badge-primary">{!! $featuredproduk->data_produk->slug !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Harga</td>
                                            <td>
                                                @if ($featuredproduk->data_produk->price)
                                                    <div>Rp. {!! $featuredproduk->data_produk->price !!},-</div>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Harga Disc</td>
                                            <td>
                                                @if ($featuredproduk->data_produk->price_disc)
                                                    <div>Rp. {!! $featuredproduk->data_produk->price_disc !!},-</div>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                            <td style="font-weight: 700">Sales</td>
                                            <td>
                                                <div>{!! $featuredproduk->data_produk->sales_produk->name !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">No. Sales</td>
                                            <td>
                                                <div>{!! $featuredproduk->data_produk->sales_produk->telp !!}</div>
                                            </td>
                                        </tr> --}}
                                        <tr>
                                            <td style="font-weight: 700">Deskripsi</td>
                                            <td>
                                                <div>{!! $featuredproduk->data_produk->deskripsi !!}</div>
                                            </td>
                                        </tr>

                                        @if ($featuredproduk->data_produk->media !== null)
                                            <tr>
                                                <td style="font-weight: 700">Gambar</td>
                                                <td>
                                                    <div>
                                                        <img src="{{ Storage::disk('s3')->url($featuredproduk->data_produk->media) }}"
                                                            alt="" class="img-thumbnail" width="150">
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $featuredproduk->data_produk->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $featuredproduk->data_produk->updated_at !!}</div>
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
