@extends('components.login')

@section('content')
<div class="container-fluid min-vh-100">
    <div class="row min-vh-100">

        <!-- FORM LOGIN -->
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center px-4 px-md-5">
            <div class="w-100" style="max-width: 420px;">

                <!-- TITLE -->
                <div class="text-center mb-4">
                    <div class="amaranth-regular fs-2">Selamat Datang</div>
                    <div class="amaranth-regular fs-2">
                        di <span style="color:#6499E9">{{ env('SCHOOL_NAME') }}</span> Library
                    </div>
                </div>

                <!-- ERROR -->
                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <!-- FORM -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="number" name="nisn" class="form-control" placeholder="Masukkan Username" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi" required>
                    </div>

                    <button class="btn btn-primary w-100 mt-4"
                        style="background:#6499E9;border:none;">
                        Masuk
                    </button>
                    <div style="margin-top: 36px;" class="text-center">
                        <span>Tetap Berkunjung ? <a style="color: #1746A2; text-decoration: none;"
                                href="{{ route('index') }}">Kembali</a></span>
                    </div>
                </form>

            </div>
        </div>

        <!-- IMAGE (HIDDEN ON MOBILE) -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-light">
            <img src="{{asset('/img/cover/cover.webp')}}"
                class="img-fluid"
                style="max-height: 90vh;"
                alt="Login">
        </div>

    </div>
</div>
@endsection
