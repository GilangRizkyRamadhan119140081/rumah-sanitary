@extends('sanitary.layout.app')
@section('content')
    <main>

        <section class="breadcrumb__area include-bg pt-30 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1 text-center">
                            <h3 class="breadcrumb__title">Download Company Profile</h3>
                            <div class="breadcrumb__list" style="max-width: 650px; margin: 0 auto; text-align: justify;">
                                <span>Silahkan unduh company profile Rumah Sanitary, temukan lebih banyak tentang kami lebih dalam mengenai visi, misi, nilai-nilai, dan portofolio layanan kami. Klik tombol di bawah ini untuk mengakses dan mengunduh profil perusahaan kami sekarang.                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- breadcrumb area end -->

        <!-- cart area start -->
        <section class="tp-cart-area pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8">
                        <div class="tp-cart-list mb-25 mr-30">
                            <div class="table-responsive">
                                <table class="table" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="tp-cart-header-product">Title</th>
                                            <th class="tp-cart-header-price">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($companyprofile as $item)
                                            <tr>
                                                <!-- title -->
                                                <td class="tp-cart-title" style="font-size: 18px;">
                                                    @if (!empty($item->title))
                                                        {{ $item->title }}
                                                    @endif
                                                </td>
                                                <!-- image -->
                                                <td>
                                                    @if ($item->file)
                                                        <a href="{{ Storage::disk('s3')->url($item->file) }}">
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- cart area end -->

    </main>
    <script>
        function downloadFile(url, filename) {
            fetch(url)
                .then(response => response.blob())
                .then(blob => {
                    const url = window.URL.createObjectURL(new Blob([blob]));
                    const link = document.createElement('a');
                    link.href = url;
                    link.setAttribute('download', filename);
                    document.body.appendChild(link);
                    link.click();
                    link.parentNode.removeChild(link);
                });
        }
    </script>
@endsection
