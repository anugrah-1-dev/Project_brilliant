@extends('layouts.app')

@section('title', 'Detail Data Perizinan')

@section('content')
  <div class="nk-block-head">
    <div class="nk-block-between g-3">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Detail Data Perizinan {{ ucwords(strtolower($permit->fullname)) }}</h3>

        <div class="nk-block-des text-soft">
          <ul class="list-inline">
            <li>No Kwitansi: <span class="text-base">{{ $permit->invoice_number }}</span></li>
          </ul>
        </div>
      </div>

      <div class="nk-block-head-content">
        <a href="{{ route('admin.permits.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
          <em class="icon ni ni-arrow-left"></em><span>Back</span>
        </a>
        <a href="{{ route('admin.permits.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
          <em class="icon ni ni-arrow-left"></em>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">

      <span class="preview-title-lg overline-title">Informasi Data Member</span>
      <div class="row g-4">
        <div class="col-lg-4 col-12">
          <div class="form-group">
            <label class="form-label" for="fullname">Nama Lengkap</label>
            <div class="form-control-wrap">
              <input type="text" name="fullname" id="fullname" value="{{ $permit->fullname }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-12">
          <div class="form-group">
            <label class="form-label" for="classname">Kelas</label>
            <div class="form-control-wrap">
              <input type="text" name="classname" id="classname" value="{{ $permit->classname }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-12">
          <div class="form-group">
            <label class="form-label" for="camp">Camp</label>
            <div class="form-control-wrap">
              <input type="text" name="camp" id="camp" value="{{ $permit->camp }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="leave_date">Tanggal Pergi</label>
            <div class="form-control-wrap">
              <input type="text" name="leave_date" id="leave_date" value="{{ \Laraindo\TanggalFormat::DateIndo($permit->leave_date) }}"
                class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="leave_date">Tanggal Pulang</label>
            <div class="form-control-wrap">
              <input type="text" name="leave_date" id="leave_date" value="{{ \Laraindo\TanggalFormat::DateIndo($permit->leave_date) }}"
                class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="purpose">Tujuan</label>
            <div class="form-control-wrap">
              <textarea class="form-control no-resize" id="purpose" readonly>{{ $permit->purpose }}</textarea>
            </div>
          </div>
        </div>

        <hr class="preview-hr">
        <span class="preview-title-lg overline-title">Informasi Data Wali / Penanggung Jawab</span>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="nama_pj">Nama Penanggung Jawab</label>
            <div class="form-control-wrap">
              <input type="text" name="nama_pj" id="nama_pj" value="{{ $permit->nama_pj }}" class="form-control form-control-lg" readonly />
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="cp_pj">Nomor HP Penanggung Jawab</label>
            <div class="form-control-wrap">
              <input type="text" name="cp_pj" id="cp_pj" value="{{ $permit->cp_pj }}" class="form-control form-control-lg" readonly />
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="cp_pj">Scan KTP Member</label>
            <div class="form-control-wrap">
              <a target="_blank" href="{{ asset('storage/' . $permit->scan_ktp) }}" class="btn btn-info">
                <em class="icon ni ni-external"></em><span>Lihat File</span>
              </a>
            </div>
          </div>
        </div><!-- END COLUMN  -->

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="nama_walmur">Nama Wali Murid</label>
            <div class="form-control-wrap">
              <input type="text" name="nama_walmur" id="nama_walmur" value="{{ $permit->nama_walmur }}" class="form-control form-control-lg"
                readonly />
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="cp_walmur">Nomor HP Wali Murid</label>
            <div class="form-control-wrap">
              <input type="text" name="cp_walmur" id="cp_walmur" value="{{ $permit->cp_walmur }}" class="form-control form-control-lg"
                readonly />
            </div>
          </div>
        </div><!-- END COLUMN  -->

        <hr class="preview-hr">
        <span class="preview-title-lg overline-title">Informasi Data Officer</span>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="nama_officer">Nama Officer</label>
            <div class="form-control-wrap">
              <input type="text" name="nama_officer" id="nama_officer" value="{{ $permit->nama_officer }}" class="form-control form-control-lg"
                readonly />
            </div>
          </div>
        </div><!-- END COLUMN  -->

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="nama_officer">Foto Memo Pengantar</label>
            <div class="form-control-wrap">
              <a target="_blank" href="{{ asset('storage/' . $permit->memo_pengantar) }}" class="btn btn-info">
                <em class="icon ni ni-external"></em><span>Lihat Memo</span>
              </a>
            </div>
          </div>
        </div><!-- END COLUMN  -->

        <div class="col-12">
          <a href="{{ route('landing.permit.print', $permit->letter_code) }}" target="_blank" class="btn btn-primary">
            <em class="icon ni ni-printer"></em><span>Cetak Surat</span>
          </a>
        </div><!-- END COLUMN  -->
      </div><!-- END ROW  -->
    </div>
  </div>
@endsection
