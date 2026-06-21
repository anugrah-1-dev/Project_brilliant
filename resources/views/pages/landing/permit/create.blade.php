@extends('layouts.front')

@section('title', 'Form Perizinan')

@push('after-style')
  <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets/css/jquery.signature.css') }}" rel="stylesheet">
  <style>
    .kbw-signature {
      width: 100%;
      height: 300px;
    }

    #sig canvas {
      width: 100% !important;
      height: auto;
    }
  </style>
@endpush

@section('content')
  <div class="shop-banner bg-catskillwhite">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
          <div class="text-center">
            <h3>Form Surat Perizinan - {{ ucfirst($kategori) }}</h3>
            @if ($errors->any())
              <div class="container mt-5">
                @foreach ($errors->all() as $error)
                  <ul class="list">
                    <li><strong style="color: #dc3545;">{{ $error }}</strong></li>
                  </ul>
                @endforeach
              </div>
            @endif
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
            <form action="{{ route('landing.permit.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <!-- ./Hidden-Inputs -->
              <input type="hidden" name="kategori" value="{{ $kategori }}" />

              <!-- ./Informasi-Data-Diri -->
              <h3>Informasi Data Diri</h3>

              @if ($kategori == 'individu')
                <!-- / INDIVIDU -->
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="fullname">Nama Lengkap</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nama Lengkap Kamu</span>
                      <input type="text" name="fullname" id="fullname" value="{{ old('fullname') }}" placeholder="Ketik Disini" class="form-control"
                        required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="classname">Kelas</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nama Kelas Kamu</span>
                      <input type="text" name="classname" id="classname" value="{{ old('classname') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="camp">Camp</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nama Camp Kamu</span>
                      <input type="text" name="camp" id="camp" value="{{ old('camp') }}" placeholder="Ketik Disini" class="form-control"
                        required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="invoice_number">No Kwitansi (Invoice)</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nomor Kwitansi Kamu</span>
                      <input type="text" name="invoice_number" id="invoice_number" value="{{ old('invoice_number') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="leave_date">Tanggal Pergi</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Tanggal Pergi Kamu</span>
                      <input type="date" name="leave_date" id="leave_date" value="{{ old('leave_date') }}" class="form-control" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="arrival_date">Tanggal Pulang</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Tanggal Pulang Kamu</span>
                      <input type="date" name="arrival_date" id="arrival_date" value="{{ old('arrival_date') }}" class="form-control" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="cp_pj">Nomor HP</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nomor Yang Dapat Dihubungi</span>
                      <input type="text" name="cp_pj" id="cp_pj" value="{{ old('cp_pj') }}" placeholder="Ketik Disini" class="form-control"
                        required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="scan_ktp">Upload Scan KTP</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Upload scan KTP kamu</span>
                      <input type="file" name="scan_ktp" id="scan_ktp" class="form-control" accept="image/*" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="purpose">Tujuan</label>
                      <textarea name="purpose" id="purpose" placeholder="Ketik Disini" class="form-control" style="height: 200px;" required>{{ old('purpose') }}</textarea>
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="ttd_pj">Tanda Tangan Member</label><br>
                      <div id="sign_pad_pj"></div> <br>
                      <button id="clear_pj" class="btn btn-sm" style="background-color: #f5f5f5;">Clear</button>
                      <textarea name="ttd_pj" id="ttd_pj" style="display: none;" required>{{ old('ttd_pj') }}</textarea>
                    </div>
                  </div><!-- / end column -->

                </div><!-- / end row -->
              @else
                <!-- / KELOMPOK -->
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="fullname">Nama Lengkap</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                        Isikan Nama Lengkap {{ $kategori == 'individu' ? 'Kamu' : 'Per Anak' }}
                      </span>
                      <textarea name="fullname" id="fullname" placeholder="Ketik Disini" class="form-control" style="height: 200px;" required>{{ old('fullname') }}</textarea>
                    </div>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="classname">Kelas</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                        Isikan Nama Kelas {{ $kategori == 'individu' ? 'Kamu' : 'Per Anak' }}
                      </span>
                      <textarea name="classname" id="classname" placeholder="Ketik Disini" class="form-control" style="height: 200px;" required>{{ old('classname') }}</textarea>
                    </div>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="camp">Camp</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">
                        Isikan Nama Camp {{ $kategori == 'individu' ? 'Kamu' : 'Per Anak' }}
                      </span>
                      <textarea name="camp" id="camp" placeholder="Ketik Disini" class="form-control" style="height: 200px;" required>{{ old('camp') }}</textarea>
                    </div>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="invoice_number">No Kwitansi (Invoice)</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nomor Kwitansi Kamu</span>
                      <input type="text" name="invoice_number" id="invoice_number" value="{{ old('invoice_number') }}"
                        placeholder="Ketik Disini" class="form-control" required />
                    </div>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="leave_date">Tanggal Pergi</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Tanggal Pergi Kamu</span>
                      <input type="date" name="leave_date" id="leave_date" value="{{ old('leave_date') }}" class="form-control" required />
                    </div>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="arrival_date">Tanggal Pulang</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Pilih Tanggal Pulang Kamu</span>
                      <input type="date" name="arrival_date" id="arrival_date" value="{{ old('arrival_date') }}" class="form-control"
                        required />
                    </div>
                  </div>

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="cp_pj">Nomor HP</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nomor Yang Dapat Dihubungi</span>
                      <input type="text" name="cp_pj" id="cp_pj" value="{{ old('cp_pj') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="scan_ktp">Upload Scan KTP</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Upload scan KTP kamu</span>
                      <input type="file" name="scan_ktp" id="scan_ktp" class="form-control" accept="image/*" required />
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="purpose">Tujuan</label>
                      <textarea name="purpose" id="purpose" placeholder="Ketik Disini" class="form-control" style="height: 200px;" required>{{ old('purpose') }}</textarea>
                    </div>
                  </div><!-- / end column -->

                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="ttd_pj">Tanda Tangan Member</label><br>
                      <div id="sign_pad_pj"></div> <br>
                      <button id="clear_pj" class="btn btn-sm" style="background-color: #f5f5f5;">Clear</button>
                      <textarea name="ttd_pj" id="ttd_pj" style="display: none;" required>{{ old('ttd_pj') }}</textarea>
                    </div>
                  </div><!-- / end column -->

                </div><!-- / end row -->
              @endif

              <!-- ./Informasi-Data-Diri -->


              <!-- ./Informasi-Lainnya -->
              <h3 class="mt-5 mb-2">Informasi Data Wali</h3>
              @if ($kategori == 'individu')
                <!-- ./ INDIVIDU -->
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="nama_walmur">Nama Wali Murid</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nama Wali Murid</span>
                      <input type="text" name="nama_walmur" id="nama_walmur" value="{{ old('nama_walmur') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>

                    <div class="form-group">
                      <label for="cp_walmur">No HP Wali Murid</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nomor Yang Dapat Dihubungi</span>
                      <input type="text" name="cp_walmur" id="cp_walmur" value="{{ old('cp_walmur') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>
                  </div>
                </div>
              @else
                <!-- ./ KELOMPOK -->
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <div class="form-group">
                      <label for="nama_walmur">Nama Wali Murid</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nama Wali Murid</span>
                      <input type="text" name="nama_walmur" id="nama_walmur" value="{{ old('nama_walmur') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>

                    <div class="form-group">
                      <label for="cp_walmur">No HP Wali Murid</label><br>
                      <span class="fs-6 text-capitalize" style="font-style: italic; color: grey">Isikan Nomor Yang Dapat Dihubungi</span>
                      <input type="text" name="cp_walmur" id="cp_walmur" value="{{ old('cp_walmur') }}" placeholder="Ketik Disini"
                        class="form-control" required />
                    </div>
                  </div>
                </div>
              @endif

              <!-- ./Informasi-Lainnya -->


              <!-- ./Paraf Tutor -->
              <h3 class="mt-5 mb-2">Informasi Data Officer</h3>
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="nama_officer">Nama Officer (Wajib Diisi)</label><br>
                    <input type="text" name="nama_officer" id="nama_officer" value="{{ old('nama_officer') }}" placeholder="Ketik Disini"
                      class="form-control" required />
                  </div>

                  <div class="form-group">
                    <label for="ttd_pj">Tanda Tangan Officer</label><br>
                    <div id="sign_pad_officer"></div> <br>
                    <button id="clear_officer_sign" class="btn btn-sm" style="background-color: #f5f5f5;">Clear</button>
                    <textarea name="ttd_officer" id="ttd_officer" style="display: none;" required>{{ old('ttd_officer') }}</textarea>
                  </div>
                </div><!-- END COLUMN -->

                <div class="col-lg-6 col-12">
                  <div class="form-group">
                    <label for="memo_pengantar">Upload Foto Memo Pengantar</label><br>
                    <input type="file" name="memo_pengantar" id="memo_pengantar" class="form-control" accept="image/*" required />
                  </div>
                </div><!-- END COLUMN -->
              </div><!-- END ROW -->

              <div class="proceed-check-btn mt-4">
                <button type="submit" class="btn focus-reset">Selanjutnya</button>
              </div><!-- SUBMIT BTN -->
            </form>
            <!-- END FORM -->

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('after-script')
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-ui-touch-punch@0.2.3/jquery.ui.touch-punch.min.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.signature.js') }}"></script>
  <script>
    // PRESET CONST VARIABLE
    const column_pj = '#ttd_pj';
    const column_officer = '#ttd_officer';

    // SIGN PAD CONFIG
    var sign_pad_pj = $('#sign_pad_pj').signature({ // PENANGGUNG_JAWAB
      syncField: column_pj,
      syncFormat: 'PNG',
      thickness: 3,
    });

    var sign_pad_officer = $('#sign_pad_officer').signature({ // OFFICER
      syncField: column_officer,
      syncFormat: 'PNG',
      thickness: 3,
    });




    // SIGN PAD - CLEAR BTN
    $('#clear_pj').click(function(e) { // PENANGGUNG_JAWAB
      e.preventDefault();
      sign_pad_pj.signature('clear');
      $(column_pj).val('');
    });

    $('#clear_officer_sign').click(function(e) { // OFFICER
      e.preventDefault();
      sign_pad_officer.signature('clear');
      $(column_officer).val('');
    });
  </script>
@endpush
