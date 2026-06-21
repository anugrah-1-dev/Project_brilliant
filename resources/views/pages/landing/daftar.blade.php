@extends('layouts.front')

@section('title', 'Form Pendaftaran')

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
            <div class="row justify-content-center">
                <div class="checkout-form-area">
                    <div class="login-form">
                        <!-- ./Form-Pendaftaran -->
                        <form action="{{ route('landing.daftar.store', $course->slug) }}" method="POST">
                            @csrf
                            <!-- ./Hidden-Inputs -->
                            <input type="hidden" name="course_id" value="{{ $course->id }}" />

                            <!-- ./Informasi-Data-Diri -->
                            <h3>Informasi Data Diri</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="fullname">Nama Lengkap</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nama Lengkap Kamu</span>
                                        <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}" placeholder="Ketik Disini"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="birth_date">Tanggal Lahir</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Tanggal Lahir Kamu</span>
                                        <input type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') }}" class="form-control"
                                            required />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="last_education">Pendidikan Terakhir</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Dengan Benar Sesuai Jenjang
                                            Pendidikan Kamu</span>
                                        <select name="last_education" id="last_education" class="form-select" required>
                                            <option selected>- Pilihan -</option>
                                            <option value="SD" {{ old('last_education') == 'SD' ? 'selected' : '' }}>SD</option>
                                            <option value="SMP" {{ old('last_education') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                            <option value="SMA" {{ old('last_education') == 'SMA' ? 'selected' : '' }}>SMA</option>
                                            <option value="Kuliah" {{ old('last_education') == 'Kuliah' ? 'selected' : '' }}>Kuliah</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Alamat Email</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Alamat Email Kamu</span>
                                        <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Ketik Disini"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="contact_number">Nomor HP</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                                            Pastikan nomor kamu sudah terhubung dengan whatsapp
                                        </span>
                                        <div class="form-group">
                                            <input type="text" name="contact_number" id="contact_number" value="{{ old('contact_number') }}"
                                                placeholder="Ketik Disini" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="province">Provinsi</label>
                                        <input type="text" name="province" id="province" value="{{ old('province') }}" placeholder="Ketik Disini"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="city">Kabupaten atau Kota</label>
                                        <input type="text" name="city" id="city" value="{{ old('city') }}" placeholder="Ketik Disini"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="district">Kecamatan</label>
                                        <input type="text" name="district" id="district" value="{{ old('district') }}" placeholder="Ketik Disini"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="village">Kelurahan</label>
                                        <input type="text" name="village" id="village" value="{{ old('village') }}" placeholder="Ketik Disini"
                                            class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address">Alamat Lengkap</label>
                                        <textarea name="address" id="address" placeholder="Ketik Disini" class="form-control" required>{{ old('address') }}</textarea>
                                    </div>
                                </div>
                                <!-- ./Informasi-Data-Diri -->

                                <!-- ./Tambahan -->
                                <h3 class="mt-4 mb-2">Tambahan</h3>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="info_web">Informasi Website</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                                            Dari Mana Anda Mengetahui Website Kami
                                        </span>
                                        <select name="info_web" id="info_web" class="form-select" required>
                                            <option selected>- Pilihan -</option>
                                            <option value="Instagram" {{ old('info_web') == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                                            <option value="TikTok" {{ old('info_web') == 'TikTok' ? 'selected' : '' }}>TikTok</option>
                                            <option value="Lainnya" {{ old('info_web') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="transport">Akomodasi</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                                            Akomodasi Transportasi Yang Kamu Perlukan
                                        </span>
                                        <select class="form-select" name="transport" id="transport" required>
                                            <option selected>- Pilihan -</option>
                                            @foreach ($transports as $transport)
                                                <option value="{{ $transport->id }}">{{ $transport->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- ./Tambahan -->

                                <!-- ./Atur Program -->
                                <h3 class="mt-4 mb-2">Atur Program</h3>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="period">Periode</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Periode Sesuai Tanggal Yang
                                            Akan Kamu
                                            Ambil</span>
                                        <select class="form-select" name="period" id="period" required>
                                            <option selected>- Pilihan -</option>
                                            @if ($course->type == 'offline')
                                                @foreach ($periods as $period)
                                                    @if ($period->date >= \Carbon\Carbon::now()->format('Y-m-d'))
                                                        <option value="{{ $period->id }}">{{ \Laraindo\TanggalFormat::DateIndo($period->date) }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            @else
                                                @foreach ($periods as $period)
                                                    @if (\Laraindo\TanggalFormat::DateIndo($period->date, 'j') == '10' || \Laraindo\TanggalFormat::DateIndo($period->date, 'j') == '25')
                                                        @if ($period->date >= \Carbon\Carbon::now()->format('Y-m-d'))
                                                            <option value="{{ $period->id }}">{{ \Laraindo\TanggalFormat::DateIndo($period->date) }}
                                                            </option>
                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="payment_bank">Metode Pembayaran</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Metode Pembayaran</span>
                                        <select class="form-select" name="payment_bank" id="payment_bank" required>
                                            @foreach ($banks as $bank)
                                                <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="payment_type">Sistem Pembayaran</label><br>
                                        <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Sistem Pembayaran</span>
                                        @if ($course->type == 'online')
                                            <input type="text" value="Pembayaran Penuh" class="form-control" readonly />
                                            <input type="hidden" name="payment_type" id="payment_type" value="LUNAS" readonly />
                                        @else
                                            <select class="form-select" id="payment_type" name="payment_type" required>
                                                <option value="DP">DP / Uang Muka</option>
                                                <option value="LUNAS">Pembayaran Penuh</option>
                                            </select>
                                        @endif
                                    </div>
                                </div>

                                <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                                    *) Untuk pendaftaran program kelas online tidak berlaku sistem pembayaran DP / Uang Muka
                                </span>
                                <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                                    *) Jika Pembayaran DP maka hanya perlu membayar uang muka sebesar {{ \Laraindo\RupiahFormat::currency(250000) }}.
                                    Pelunasan
                                    {{ \Laraindo\RupiahFormat::currency($course->price + $course->admin_tax - 250000) }} dilakukan pada saat daftar ulang
                                    di Brilliant
                                    English Course
                                </span>
                            </div>

                            <div class="proceed-check-btn mt-4">
                                <button type="submit" class="btn focus-reset">Selanjutnya</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
