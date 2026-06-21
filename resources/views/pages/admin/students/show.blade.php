@extends('layouts.app')

@section('title', 'Detail Data Pengguna')

@section('content')
  <div class="nk-block-head">
    <div class="nk-block-between g-3">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Detail Data {{ ucwords(strtolower($student->fullname)) }}</h3>

        <div class="nk-block-des text-soft">
          <ul class="list-inline">
            <li>Token: <span class="text-base">{{ $student->token }}</span></li>
          </ul>
        </div>
      </div>

      <div class="nk-block-head-content">
        <a href="{{ route('admin.students.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
          <em class="icon ni ni-arrow-left"></em><span>Back</span>
        </a>
        <a href="{{ route('admin.students.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
          <em class="icon ni ni-arrow-left"></em>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="row g-4">
        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="fullname">Nama Lengkap</label>
            <div class="form-control-wrap">
              <input type="text" name="fullname" id="fullname" value="{{ $student->fullname }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="birth_date">Tanggal Lahir</label>
            <div class="form-control-wrap">
              <input type="text" name="birth_date" id="birth_date" value="{{ \Laraindo\TanggalFormat::DateIndo($student->birth_date) }}"
                class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="last_education">Pendidikan Terakhir</label>
            <div class="form-control-wrap">
              <input type="text" name="last_education" id="last_education" value="{{ $student->last_education }}"
                class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <div class="form-control-wrap">
              <input type="text" name="email" id="email" value="{{ $student->email }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="contact_number">Nomor Kontak</label>
            <div class="form-control-wrap">
              <input type="text" name="contact_number" id="contact_number" value="{{ $student->contact_number }}"
                class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="province">Provinsi</label>
            <div class="form-control-wrap">
              <input type="text" name="province" id="province" value="{{ $student->province }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="city">Kabupaten/Kota</label>
            <div class="form-control-wrap">
              <input type="text" name="city" id="city" value="{{ $student->city }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="district">Kecamatan</label>
            <div class="form-control-wrap">
              <input type="text" name="district" id="district" value="{{ $student->district }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="form-group">
            <label class="form-label" for="village">Kelurahan</label>
            <div class="form-control-wrap">
              <input type="text" name="village" id="village" value="{{ $student->village }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="address">Alamat Lengkap</label>
            <div class="form-control-wrap">
              {{-- <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control form-control-lg" readonly /> --}}
              <textarea name="address" id="address" rows="10" class="form-control form-control-lg no-resize" readonly>{{ $student->address }}</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
