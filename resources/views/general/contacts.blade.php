@extends('components.head')

@section('style')
<style>
    /* =====================
       HEADER
    ====================== */
    .contact-title {
        font-size: 40px;
        color: #000;
    }

    .contact-subtitle {
        font-size: 20px;
        color: #7F7F7F;
    }

    /* =====================
       CARD
    ====================== */
    .contact-card {
        padding: 20px;
        cursor: pointer;
        border: none;
        border-radius: 12px;
        box-shadow: 0px 4px 10px rgba(0,0,0,0.06);
        transition: transform .2s ease, box-shadow .2s ease;
        height: 100%;
    }

    .contact-card:hover {
        transform: translateY(-4px);
        box-shadow: 0px 8px 18px rgba(0,0,0,0.12);
    }

    .contact-card img {
        height: 40px;
    }

    .contact-label {
        font-size: 20px;
        color: #1746A2;
        margin-top: 16px;
    }

    .contact-text {
        font-size: 16px;
        color: #7F7F7F;
    }

    /* =====================
       BACKGROUND
    ====================== */
    .contact-bg {
        background-color: #DAE9FF;
        padding: 80px 0 160px;
    }

    /* =====================
       MOBILE
    ====================== */
    @media (max-width: 768px) {
        .contact-title {
            font-size: 28px;
        }

        .contact-subtitle {
            font-size: 16px;
        }

        .contact-bg {
            padding: 60px 0 80px;
        }
    }
</style>
@endsection

@section('content')
@include('components.nav')

{{-- ===================== HEADER ===================== --}}
<div class="contact-bg">
    <div class="container text-center">
        <h1 class="amaranth-regular contact-title">
            Kontak Kami
        </h1>
        <p class="urbanist-regular contact-subtitle mt-2">
            Hubungi salah satu di bawah ini jika ada kendala dan butuh bantuan
        </p>
    </div>
</div>

{{-- ===================== CONTACT CARDS ===================== --}}
<div class="container" style="margin-top:-120px;">
    <div class="row g-4 justify-content-center">

        {{-- LOKASI --}}
        <div class="col-12 col-md-4">
            <div class="card contact-card text-center">
                <div class="card-body">
                    <img src="{{ asset('/img/icon/ic_location.webp') }}">
                    <div class="urbanist-semibold contact-label">
                        Lokasi
                    </div>
                    <div class="amaranth-regular contact-text mt-1">
                        Jl. Raya Sutorejo No.98-100
                    </div>
                </div>
            </div>
        </div>

        {{-- WHATSAPP --}}
        <div class="col-12 col-md-4">
            <div class="card contact-card text-center">
                <div class="card-body">
                    <img src="{{ asset('/img/icon/ic_whatsapp.webp') }}">
                    <div class="urbanist-semibold contact-label">
                        WhatsApp
                    </div>
                    <div class="amaranth-regular contact-text mt-1">
                        Chat dengan admin perpustakaan
                    </div>
                </div>
            </div>
        </div>

        {{-- EMAIL --}}
        <div class="col-12 col-md-4">
            <div class="card contact-card text-center">
                <div class="card-body">
                    <img src="{{ asset('/img/icon/ic_gmail.webp') }}">
                    <div class="urbanist-semibold contact-label">
                        Email
                    </div>
                    <div class="amaranth-regular contact-text mt-1">
                        Hubungi admin melalui email
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
