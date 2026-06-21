@extends('layouts.front')

@section('title', 'Detail Pembayaran')

@section('content')
    <div class="shop-banner bg-catskillwhite">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <h2>Pendaftaran Program {{ $course->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shop-checkout-area">
        <div class="container">
            <div class="alert alert-primary" role="alert">
                Nomor Invoice: <b>{{ $student->token }}</b><br>
                Simpan Nomor Invoice anda di atas yang berguna untuk memantau status dari pendaftaran Anda.
            </div>

            <form action="{{ route('landing.payment.store', ['slug' => $course->slug, 'token' => $student->token]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <!-- Hidden Inputs -->
                <input type="hidden" name="student_id" value="{{ $student->id }}" />
                <input type="hidden" name="total" value="{{ $course->price + $course->admin_tax + 30 }}" />

                <!-- Cek Apakah Menggunakan Akomodasi Berbayar -->
                @if ($transport->price != 0)
                    <div class="row justify-content-center">
                        <!-- Input Bukti Transfer Akomodasi -->
                        <div class="col-xl-5 col-lg-6 col-md-10">
                            <div class="checkout-form-area">
                                <div class="login-form">
                                    <h3>Upload Bukti Transfer Akomodasi</h3>

                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="file" name="transport_payment" id="transport_payment" class="form-control" accept="image/*"
                                                required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Input Bukti Transfer Akomodasi -->

                        <!-- Rekening Tujuan Transfer Akomodasi -->
                        <div class="offset-xl-3 col-xl-4 offset-lg-2 col-lg-3 col-md-7 col-sm-10">
                            <!-- Rincian Harga Akomodasi -->
                            <div class="order-details-card">
                                <h3>Rincian Harga</h3>

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <p><span>{{ $transport->name }}</span></p>
                                        <strong>{{ \Laraindo\RupiahFormat::currency($transport->price + config('app.kode_unik')) }}</strong>
                                    </li>

                                    <li class="total-price-area d-flex justify-content-between">
                                        <h4>Total</h4>
                                        <h4>{{ \Laraindo\RupiahFormat::currency($transport->price + config('app.kode_unik')) }}</h4>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./Rincian Harga Akomodasi -->

                            <!-- Informasi Rekening -->
                            <div class="order-details-card mb-4">
                                <h3>Informasi Rekening</h3>

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <p>Metode Pembayaran</p>
                                        <strong>BRI</strong>
                                    </li>

                                    <li class="d-flex justify-content-between">
                                        <p>Nomor Rekening</p>
                                        <strong>002101241348500</strong>
                                    </li>

                                    <li class="d-flex justify-content-between">
                                        <p>Atas Nama</p>
                                        <strong>Adi Sucipto</strong>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./Informasi Rekening -->
                        </div>
                        <!-- ./Rekening Tujuan Transfer Akomodasi -->
                    </div>
                @endif

                <!-- Detail Pembayaran Program Belajar -->
                <div class="row justify-content-center">
                    <!-- Input Bukti Transfer Program Belajar -->
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="checkout-form-area">
                            <div class="login-form">
                                <h3>Upload Bukti Transfer Program Belajar</h3>

                                <div class="row">
                                    <div class="mb-3">
                                        <input type="file" name="course_payment" id="course_payment" class="form-control" accept="image/*" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Input Bukti Transfer Program Belajar -->

                    <div class="offset-xl-3 col-xl-4 offset-lg-2 col-lg-3 col-md-7 col-sm-10">
                        @if ($payment_type == 'DP')
                            <!-- Rincian Harga Pembayaran DP -->
                            <div class="order-details-card">
                                <h3>Rincian Harga</h3>

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <p>DP <span>{{ $course->name }}</span></p>
                                        <strong>{{ \Laraindo\RupiahFormat::currency(250000) }}</strong>
                                    </li>

                                    <li class="d-flex justify-content-between">
                                        <p>Kode Unik</p>
                                        <strong class="free-color">{{ \Laraindo\RupiahFormat::currency(config('app.kode_unik')) }}</strong>
                                    </li>

                                    <li class="total-price-area d-flex justify-content-between">
                                        <h4>Total</h4>
                                        <h4>{{ \Laraindo\RupiahFormat::currency(250000 + config('app.kode_unik')) }}</h4>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./Rincian Harga Pembayaran DP -->
                        @else
                            <!-- Rincian Harga Pembayaran LUNAS/FULL -->
                            <div class="order-details-card">
                                <h3>Rincian Harga</h3>

                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <p>Harga <span>{{ $course->name }}</span></p>
                                        <strong>{{ \Laraindo\RupiahFormat::currency($course->price) }}</strong>
                                    </li>

                                    <li class="d-flex justify-content-between">
                                        <p>Biaya Admin</p>
                                        <strong class="free-color">{{ \Laraindo\RupiahFormat::currency($course->admin_tax) }}</strong>
                                    </li>

                                    <li class="d-flex justify-content-between">
                                        <p>Kode Unik</p>
                                        <strong class="free-color">{{ \Laraindo\RupiahFormat::currency(config('app.kode_unik')) }}</strong>
                                    </li>

                                    <li class="total-price-area d-flex justify-content-between">
                                        <h4>Total</h4>
                                        <h4>{{ \Laraindo\RupiahFormat::currency($course->price + $course->admin_tax + config('app.kode_unik')) }}</h4>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./Rincian Harga Pembayaran LUNAS/FULL -->
                        @endif

                        <!-- Informasi Rekening Pembayaran Program Belajar -->
                        <div class="order-details-card mb-4">
                            <h3>Informasi Rekening</h3>

                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    <p>Metode Pembayaran</p>
                                    <strong>{{ $bank->name }}</strong>
                                </li>

                                <li class="d-flex justify-content-between">
                                    <p>Nomor Rekening</p>
                                    <strong>{{ $bank->number }}</strong>
                                </li>

                                <li class="d-flex justify-content-between">
                                    <p>Atas Nama</p>
                                    <strong>{{ $bank->owner }}</strong>
                                </li>
                            </ul>
                        </div>
                        <!-- ./Informasi Rekening Pembayaran Program Belajar -->
                    </div>
                </div>
                <!-- ./Detail Pembayaran Program Belajar -->

                <div class="proceed-check-btn mt-5">
                    <button type="submit" class="btn focus-reset">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
