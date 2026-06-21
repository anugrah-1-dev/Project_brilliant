@extends('layouts.app')

@section('title', 'Tambah Bank Pembayaran')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub">
        <a class="back-to" href="{{ route('admin.banks.index') }}">
          <em class="icon ni ni-arrow-left"></em><span>ListBank</span>
        </a>
      </div>
    </div>
  </div>

  @if ($errors->any())
    <div class="alert alert-fill alert-danger alert-dismissible alert-icon" role="alert">
      @foreach ($errors->all() as $error)
        <ul class="list">
          <li><strong>{{ $error }}</strong></li>
        </ul>
      @endforeach
      <button class="close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="card">
    <div class="card-inner">
      <form action="{{ route('admin.banks.store') }}" method="POST">
        @csrf

        <div class="row g-4">
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="name">Nama Bank</label>
              <div class="form-control-wrap">
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan nama bank"
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: BCA, BNI, Mandiri</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="number">Nomor Rekening</label>
              <div class="form-control-wrap">
                <input type="text" name="number" id="number" value="{{ old('number') }}" placeholder="Masukkan nomor rekening bank"
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: 0123.4567.89 (pisahkan dengan .)</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="owner">Atas Nama</label>
              <div class="form-control-wrap">
                <input type="text" name="owner" id="owner" value="{{ old('owner') }}" placeholder="Masukkan nama pemilik rekening"
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: CV. BRILLIANT INDONESIA GROUP</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
