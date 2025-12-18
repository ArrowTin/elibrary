@extends('components.head')

@section('style')
<style>
    /* =====================
       GLOBAL
    ====================== */
    td {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        vertical-align: top;
    }

    .book-cover {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
    }

    .book-title {
        font-size: 52px;
        line-height: 1.2;
    }

    .btn-book {
        width: 100%;
        background-color: #6499E9;
        border-radius: 8px;
        font-size: 16px;
    }

    /* =====================
       MOBILE
    ====================== */
    @media (max-width: 768px) {
        .book-title {
            font-size: 28px;
        }

        .detail-container {
            padding: 0 12px;
        }
    }
</style>
@endsection

@section('content')
@include('components.nav')

{{-- ===================== MODAL ===================== --}}
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Peminjaman Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12 col-md-5 text-center">
                        <img src="{{ asset(env('COVER_PATH')) . $book->cover }}"
                             class="book-cover">
                    </div>

                    <div class="col-12 col-md-7">
                        <h5>Informasi Buku</h5>
                        <table class="table table-sm">
                            <tbody class="urbanist-semibold">
                                <tr>
                                    <td>Penulis</td>
                                    <td>{{ $book->author }}</td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>{{ $book->publisher }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td>{{ $book->publishing_year }}</td>
                                </tr>
                                <tr>
                                    <td>Bahasa</td>
                                    <td>{{ $book->language }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>
                                        @foreach ($categories as $value)
                                            <span class="badge text-bg-primary me-1 mb-1">
                                                {{ $value->category }}
                                            </span>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr>

                <div class="alert alert-warning mt-3">
                    <strong>Mohon Diperhatikan!</strong><br>
                    Maksimal peminjaman buku adalah <b>7 hari</b> sejak dikonfirmasi petugas.
                    Pastikan petugas berada di tempat saat pengembalian.
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
        </div>
    </div>
</div>

{{-- ===================== CONTENT ===================== --}}
<div class="container detail-container mt-5 pb-5">

    {{-- Breadcrumb --}}
    <div class="mb-4 text-muted">
        <a href="{{ route('books') }}" class="text-decoration-none text-muted">
            Koleksi Buku
        </a>
        <img src="{{ asset('/img/icon/ic_chevron_right.webp') }}" width="20">
        <span class="text-primary">Detail Buku</span>
    </div>

    <div class="row g-4 align-items-start">

        {{-- COVER --}}
        <div class="col-12 col-md-4 text-center">
            <img src="{{ asset($book->cover) }}"
                 class="book-cover mb-3"
                 style="max-width: 280px;">

            <button class="btn btn-primary btn-book mt-3"
                    data-bs-toggle="modal"
                    data-bs-target="#pdfModal">
                Lihat Buku
            </button>
        </div>

        {{-- DETAIL --}}
        <div class="col-12 col-md-8">

            {{-- STATUS --}}
            @if ($book->stock > 0)
                <span class="badge text-bg-success">Tersedia</span>
            @else
                <span class="badge text-bg-danger">Tidak tersedia</span>
            @endif

            {{-- TITLE --}}
            <h1 class="amaranth-regular book-title mt-3">
                {{ $book->title }}
            </h1>

            {{-- DESCRIPTION --}}
            <p class="urbanist-regular mt-3">
                {{ $book->description }}
            </p>

            <hr>

            {{-- INFO TABLE --}}
            <h5 class="amaranth-regular mb-3">Informasi Buku</h5>
            <table class="table">
                <tbody class="urbanist-semibold">
                    <tr>
                        <td>Penulis</td>
                        <td>{{ $book->author }}</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    <tr>
                        <td>Tahun Terbit</td>
                        <td>{{ $book->publishing_year }}</td>
                    </tr>
                    <tr>
                        <td>Bahasa</td>
                        <td>{{ $book->language }}</td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td>{{ $book->stock }}</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>
                            @foreach ($categories as $value)
                                <span class="badge text-bg-primary me-1 mb-1">
                                    {{ $value->category }}
                                </span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <div class="modal fade" id="pdfModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h5 class="modal-title">{{ $book->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
    
                <div class="ratio ratio-16x9 mt-4">
                    <iframe
                        src="{{ route('books.pdf', $book->id) }}"
                        allowfullscreen>
                    </iframe>
                </div>
    
            </div>
        </div>
    </div>
    
</div>
@endsection
