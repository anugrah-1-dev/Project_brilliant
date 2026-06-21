@extends('layouts.front')

@section('title', 'Home')

@section('content')
    <!-- Hero Area -->
    <div class="hero-area hero--area-curve text-center bg-position position-relative" style="background: url({{ asset('assets/image/landing/hero.jpg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-10" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true">
                    <div class="hero-area-content">
                        <div class="hero-area__title">
                            <h2 class="text-white">BRILLIANT ENGLISH COURSE</h2>
                            <small class="text-white">Tingkatkan kemampuan Bahasa Inggris Anda dan rasakan pengalaman belajar yang berkualitas di
                                Brilliant English
                                Course, tempat di mana potensi Anda menjadi lebih gemilang!</small>
                        </div>
                        <div class="hero-area__btn">
                            <!-- <a href="#program" class="btn btn--lg bg-primary focus-reset text-white">Daftar Sekarang</a> -->
                            <button type="button" class="btn btn--lg bg-primary focus-reset text-white" data-bs-toggle="modal"
                                data-bs-target="#programModal">
                                Daftar Sekarang
                            </button>


                        </div>
                        <div class="hero-area__image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Area-1 -->
    <div class="content-area-1" id="tentang">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10 col-sm-12 order-lg-0 order-1" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="content">
                        <div class="section__heading">
                            <h2>Sekilas Mengenai Kampung Inggris Pusat</h2>
                            <p>Lembaga Pendidikan yang berfokus dalam pengajaran bahasa inggris yang sudah berdiri sejak
                                tahun 2015 atas ijin dari DIKNAS dengan nomor SK 421.8/6426/418.20/2018 dan DIPORA yang
                                bertempat di kecamatan Pare, kabupaten Kediri, Jawa Timur.</p>
                        </div>
                        <div class="content__btn">
                            <a class="btn  btn--link focus-reset focus-reset" data-fancybox="" href="https://www.youtube.com/embed/29Bu9HoUgL0">Tonton
                                Ringkasan Video</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12 order-lg-1 order-0" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="content-image-group-1">
                        <div class="image__1">
                            <img class="w-100" src="{{ asset('assets/image/landing/big-ca-1.jpeg') }}" alt="image">
                        </div>
                        <div class="image__2">
                            <img src="{{ asset('assets/image/landing/small-ca-1.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Area -->
    <div class="feature-area" id="keunggulan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9 col-sm-12">
                    <div class="section__heading text-center">
                        <h2>Keunggulan</h2>
                        <p class="text-capitalize">Pembelajaran dalam kampung inggris pusat dirancang khusus agar orang
                            yang awam dengan bahasa inggris dapat menguasai bahasa inggris dengan mudah</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 ">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="card feature--card text-center">
                                <div class="card__icon">
                                    <i class="fas fa-bed"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card__title">
                                        <h4>Asrama</h4>
                                    </div>
                                    <div class="card__content">
                                        <p class="text-capitalize">Tersedia berbagai jenis asrama yang sesuai dengan
                                            kebutuhan dan dikelola oleh warga setempat. Pada setiap asrama putra & putri
                                            terdapat asrama Reguler, Reguler Plus, Homestay, dan VIP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="card feature--card text-center">
                                <div class="card__icon card__icon__2">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card__title">
                                        <h4 style="font-style: italic">Native Speaker</h4>
                                    </div>
                                    <div class="card__content">
                                        <p class="text-capitalize">Asah kemampuan berbahasa inggris dengan menjadikan
                                            bahasa inggris menjadi bahasa utama bersama instruktur yang
                                            berpengalaman</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="card feature--card text-center">
                                <div class="card__icon card__icon__3">
                                    <i class="fas fa-school"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card__title">
                                        <h4>Lingkungan yang Mendukung</h4>
                                    </div>
                                    <div class="card__content">
                                        <p class="text-capitalize">Semua tempat pada kampung inggris pusat didesain
                                            khusus agar kegiatan belajar mengajar berjalan dengan lancar serta
                                            efektif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="card feature--card text-center">
                                <div class="card__icon card__icon__2">
                                    <i class="fas fa-person-booth"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card__title">
                                        <h4>Pemimpin Asrama</h4>
                                    </div>
                                    <div class="card__content">
                                        <p class="text-capitalize">Dengan Menjadi Pemimpin Asrama akan mendapatkan
                                            program kelas gratis dan tempat tinggal gratis selama yang
                                            diinginkan<br><span class="fw-bolder">(Syarat dan Ketentuan Berlaku)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="card feature--card text-center">
                                <div class="card__icon card__icon__3">
                                    <i class="fas fa-school"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card__title">
                                        <h4>Kelas Online (Daring)</h4>
                                    </div>
                                    <div class="card__content">
                                        <p class="text-capitalize">Kelas Online dikhususkan bagi pelajar yang tidak bisa
                                            hadir di tempat. Namun, jangan bersedih dahulu karena dengan mengikuti kelas
                                            online juga dapat merasakan keseruan kegiatan belajar yang berkesan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-11" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                            <div class="card feature--card text-center">
                                <div class="card__icon">
                                    <i class="fas fa-hospital"></i>
                                </div>
                                <div class="card-body">
                                    <div class="card__title">
                                        <h4>Klinik Kesehatan</h4>
                                    </div>
                                    <div class="card__content">
                                        <p class="text-capitalize">Kampung Inggris Pusat memiliki klinik praktek dokter
                                            yang dinaungi oleh Ikatan Dokter Indonesia secara resmi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Area-2 -->
    <div class="content-area-2">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="content-image-group-2">
                        <div class="image__1">
                            <img class="w-100" src="{{ asset('assets/image/landing/ca-2.jpg') }}" alt="image">
                        </div>
                        <div class="image__2">
                            <img src="{{ asset('assets/image/landing/small-ca-2.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="content">
                        <div class="section__heading">
                            <h2>Inspirasi Banyak Bentuknya</h2>
                            <p>Apa pun bidang keterampilan bahasa Inggris yang siap Anda kuasai, temukan program yang
                                tepat untuk Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alur -->
    <div class="feature-area-l5-1 bg-bunting-aprx" id="alur">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section__heading text-center">
                        <h2>Alur Pendaftaran</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-lg-between justify-content-center feature-l5-1-items">
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>1</span>
                        </div>
                        <div class="content">
                            <h4>Pilih Program </h4>
                            <p>Pilih program yang sesuai dengan tujuan kamu agar mendapatkan hasil yang maksimal. Ingat!
                                Kamu gak bakal bisa tiba-tiba jago ngomong Inggris dalam satu malam. Kami bukan
                                dukun.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>2</span>
                        </div>
                        <div class="content">
                            <h4>Isi Formulir</h4>
                            <p>Isi beberapa formulir yang diperlukan dengan benar untuk melakukan pendaftaran pada
                                program yang telah dipilih sebelumnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>3</span>
                        </div>
                        <div class="content">
                            <h4>Lakukan Pembayaran</h4>
                            <p>Lakukan pembayaran beserta bukti pembayaran setelah melakukan pengisian formulir. Harga
                                pembayaran berbeda-beda tergantung dari program mana yang dipilih</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>4</span>
                        </div>
                        <div class="content">
                            <h4>Validasi Pembayaran</h4>
                            <p>Setelah melakukan pembayaran, tunggu beberapa jam hingga pihak dari kampung inggris pusat
                                menyelesaikan validasi pembayaran yang telah dilakukan sebelumnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>5</span>
                        </div>
                        <div class="content">
                            <h4>Tunggu Pemberitahuan</h4>
                            <p>Setelah validasi pembayaran selesai dilakukan oleh pihak kampung inggris pusat, kami akan
                                mengirimkan pemberitahuan terhadap Anda melalui media sosial WhatsApp.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>6</span>
                        </div>
                        <div class="content">
                            <h4>Datang ke <a href="https://goo.gl/maps/cQU1QZxD34hcRQ8B7" target="_blank">Brilliant
                                    English Course</a></h4>
                            <p>Berangkat menuju <a href="https://goo.gl/maps/cQU1QZxD34hcRQ8B7" target="_blank">Brilliant
                                    English Course</a> sesuai periode yang telah dipilih sebelumnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-9 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-once="true">
                    <div class="feature-l5-1-items__card text-center">
                        <div class="number">
                            <span>7</span>
                        </div>
                        <div class="content">
                            <h4>Ikuti Aturan</h4>
                            <p>Ikuti Aturan yang berlaku dan pulang dengan hasil yang memuaskan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Area - Kelas Offline -->
    <div class="pricing-area-l3-1 bg-catskillwhite pricing-03-area" id="kelas-offline">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-11 aos-init aos-animate" data-aos="fade-in" data-aos-duration="800"
                    data-aos-once="true">
                    <div class="section__heading text-center">
                        <h2>Kelas Offline</h2>
                        <p>
                            <b>Reguler</b>: Program yang ditujukan jago berbahasa inggris<br>
                            <b>Short Learning</b>: Program belajar sambil liburan<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pricing-l3-1-items">
                @foreach ($courses as $course)
                    @if ($course->type == 'offline')
                        <div class="col-lg-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800"
                            data-aos-once="true">
                            <div class="card card--pricing-l3-1">
                                <div class="card--pricing-l3-1__head">
                                    <h6>{{ $course->name }}</h6>
                                </div>
                                <div class="card--pricing-l3-1__price">
                                    <h2>
                                        {{ \Laraindo\RupiahFormat::currency($course->price) }}
                                    </h2>
                                    <span class="text-uppercase">{{ $course->duration }}</span><br>
                                    Biaya Admin :
                                    @if ($course->admin_tax == 0)
                                        Gratis
                                    @else
                                        {{ \Laraindo\RupiahFormat::currency($course->admin_tax) }}
                                    @endif
                                    <div class="price-l3-btn">
                                        <a href="{{ route('landing.daftar.create', $course->slug) }}" class="btn focus-reset">
                                            Daftar <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="price-l3-border"></div>
                                <div class="card--pricing-l3-1__service">
                                    <ul class="list-unstyled">
                                        @foreach ($features as $feature)
                                            @if ($feature->course_id == $course->id)
                                                <li class="d-inline-flex align-items-center text-capitalize">
                                                    <span><i class="fas fa-check"></i></span>{{ $feature->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Pricing Area - Kelas Online -->
    <div class="pricing-area-l3-1 bg-catskillwhite pricing-03-area" id="kelas-online">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-11 aos-init aos-animate" data-aos="fade-in" data-aos-duration="800"
                    data-aos-once="true">
                    <div class="section__heading text-center">
                        <h2>Kelas Online</h2>
                        <p>Kelas Online Dikhususkan Bagi Pelajar Yang Tidak Bisa Hadir Di Tempat.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pricing-l3-1-items">
                @foreach ($courses as $course)
                    @if ($course->type == 'online')
                        <div class="col-lg-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800"
                            data-aos-once="true">
                            <div class="card card--pricing-l3-1">
                                <div class="card--pricing-l3-1__head">
                                    <h6>{{ $course->name }}</h6>
                                </div>
                                <div class="card--pricing-l3-1__price">
                                    <h2>
                                        {{ \Laraindo\RupiahFormat::currency($course->price) }}
                                    </h2>
                                    <span class="text-uppercase">{{ $course->duration }}</span><br>
                                    Biaya Admin :
                                    @if ($course->admin_tax == 0)
                                        Gratis
                                    @else
                                        {{ \Laraindo\RupiahFormat::currency($course->admin_tax) }}
                                    @endif
                                    <div class="price-l3-btn">
                                        <a href="{{ route('landing.daftar.create', $course->slug) }}" class="btn focus-reset">
                                            Daftar <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="price-l3-border"></div>
                                <div class="card--pricing-l3-1__service">
                                    <ul class="list-unstyled">
                                        @foreach ($features as $feature)
                                            @if ($feature->course_id == $course->id)
                                                <li class="d-inline-flex align-items-center text-capitalize">
                                                    <span><i class="fas fa-check"></i></span>{{ $feature->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <!-- Pricing Area - Kelas Combo (Offline + Liburan) -->
    {{-- <div class="pricing-area-l3-1 bg-catskillwhite pricing-03-area" id="paket-combo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-11 aos-init aos-animate" data-aos="fade-in" data-aos-duration="800"
                    data-aos-once="true">
                    <div class="section__heading text-center">
                        <h2>Kelas Offline + Holiday</h2>
                        <p>Kelas Ini Dikhususkan Bagi Pelajar Yang Ingin Belajar Sambil Liburan.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pricing-l3-1-items">
                @foreach ($courses as $course)
                    @if ($course->type == 'combo')
                        <div class="col-lg-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800"
                            data-aos-once="true">
                            <div class="card card--pricing-l3-1">
                                <div class="card--pricing-l3-1__head">
                                    <h6>{{ $course->name }}</h6>
                                </div>
                                <div class="card--pricing-l3-1__price">
                                    <h2>
                                        {{ \Laraindo\RupiahFormat::currency($course->price) }}
                                    </h2>
                                    <span class="text-uppercase">{{ $course->duration }}</span><br>
                                    Biaya Admin :
                                    @if ($course->admin_tax == 0)
                                        Gratis
                                    @else
                                        {{ \Laraindo\RupiahFormat::currency($course->admin_tax) }}
                                    @endif
                                    <div class="price-l3-btn">
                                        <a href="{{ route('landing.daftar.create', $course->slug) }}" class="btn focus-reset">
                                            Daftar <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="price-l3-border"></div>
                                <div class="card--pricing-l3-1__service">
                                    <ul class="list-unstyled">
                                        @foreach ($features as $feature)
                                            @if ($feature->course_id == $course->id)
                                                <li class="d-inline-flex align-items-center text-capitalize">
                                                    <span><i class="fas fa-check"></i></span>{{ $feature->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> --}}

    <!-- Pricing Area - Paket Liburan (Khusus Member) -->
    {{-- <div class="pricing-area-l3-1 bg-catskillwhite pricing-03-area" id="paket-liburan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-9 col-md-11 aos-init aos-animate" data-aos="fade-in" data-aos-duration="800"
                    data-aos-once="true">
                    <div class="section__heading text-center">
                        <h2 class="text-nowrap">Paket Liburan (Khusus Member)</h2>
                        <p>Program Ini Dikhususkan Bagi Member Brilliant English Course Yang Ingin Liburan.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pricing-l3-1-items">
                @foreach ($courses as $course)
                    @if ($course->type == 'holiday-member')
                        <div class="col-lg-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800"
                            data-aos-once="true">
                            <div class="card card--pricing-l3-1">
                                <div class="card--pricing-l3-1__head">
                                    <h6>{{ $course->name }}</h6>
                                </div>
                                <div class="card--pricing-l3-1__price">
                                    <h2>
                                        {{ \Laraindo\RupiahFormat::currency($course->price) }}
                                    </h2>
                                    <span class="text-uppercase">{{ $course->duration }}</span><br>
                                    Biaya Admin :
                                    @if ($course->admin_tax == 0)
                                        Gratis
                                    @else
                                        {{ \Laraindo\RupiahFormat::currency($course->admin_tax) }}
                                    @endif
                                    <div class="price-l3-btn">
                                        <a href="{{ route('landing.daftar.create', $course->slug) }}" class="btn focus-reset">
                                            Daftar <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="price-l3-border"></div>
                                <div class="card--pricing-l3-1__service">
                                    <ul class="list-unstyled">
                                        @foreach ($features as $feature)
                                            @if ($feature->course_id == $course->id)
                                                <li class="d-inline-flex align-items-center text-capitalize">
                                                    <span><i class="fas fa-check"></i></span>{{ $feature->feature }}
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> --}}
@endsection

@push('before-script')
    <div class="modal fade" id="programModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Daftar Program</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-grid gap-2">
                    <button type="button" id="kelas-offline-section" class="btn btn--lg d-block bg-primary text-white mb-2">Kelas Offline</button>
                    <button type="button" id="kelas-online-section" class="btn btn--lg d-block bg-primary text-white mb-2">Kelas Online</button>
                    <button type="button" id="paket-combo-section" class="btn btn--lg d-block bg-primary text-white mb-2">Kelas Offline +
                        Liburan</button>
                    <button type="button" id="paket-liburan-section" class="btn btn--lg d-block bg-primary text-white mb-2">
                        Paket Liburan (Khusus Member)
                    </button>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('after-script')
    <script>
        $("#kelas-offline-section").click(function() {
            $('#programModal').modal('hide');
            $('html, body').animate({
                scrollTop: $("#kelas-offline").offset().top
            }, 2000);
        });
        $("#kelas-online-section").click(function() {
            $('#programModal').modal('hide');
            $('html, body').animate({
                scrollTop: $("#kelas-online").offset().top
            }, 2000);
        });
    </script>
@endpush
