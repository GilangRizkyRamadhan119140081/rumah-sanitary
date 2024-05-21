<div>

    <section class="section">

        <div class="section-header">

            <h1> {{ __('Price List') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">{{ __('Pricelist') }}</div>
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
                                        <a class="nav-link active btn-sm" href="{{ route('data-pricelist') }}"
                                            data-toggle="tooltip" title="{{ __('Kembali') }}"><i
                                                class="fa fa-arrow-alt-circle-left" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td style="font-weight: 700">Title</td>
                                            <td>
                                                <div>{!! $detailPriceList->title !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">File</td>
                                            <td>
                                                @if ($detailPriceList->image)
                                                    <a href='{{ Storage::disk('s3')->url($detailPriceList->image) }}' target='_blank' class='btn btn-primary'>
                                                        Lihat File
                                                    </a>
                                                    <br> <!-- Optional: Add a line break for better appearance -->
                                                    {{-- <img src='{{ Storage::disk('s3')->url($detailPriceList->image) }}'
                                                        alt='{{ $detailPriceList->id }}' class='img-thumbnail' width='150' /> --}}
                                                @else
                                                    <span class='text-muted'>File tidak tersedia</span>
                                                @endif
                                            </td>
                                        </tr>


                                        <tr>
                                            <td style="font-weight: 700">Created At</td>
                                            <td>
                                                <div>{!! $detailPriceList->created_at !!}</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700">Updated At</td>
                                            <td>
                                                <div>{!! $detailPriceList->updated_at !!}</div>
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
