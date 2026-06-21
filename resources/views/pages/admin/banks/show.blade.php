@extends('layouts.app')

@section('title', 'Detail Bank')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub">
        <a class="back-to" href="{{ route('admin.banks.index') }}">
          <em class="icon ni ni-arrow-left"></em><span>List Bank Pembayaran</span>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">

      <div class="row g-4">
        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="name">Nama Bank</label>
            <div class="form-control-wrap">
              <input type="text" name="name" id="name" value="{{ $bank->name }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="number">Nomor Rekening</label>
            <div class="form-control-wrap">
              <input type="text" name="number" id="number" value="{{ $bank->number }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label class="form-label" for="owner">Atas Nama</label>
            <div class="form-control-wrap">
              <input type="text" name="owner" id="owner" value="{{ $bank->owner }}" class="form-control form-control-lg" readonly />
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="d-block text-end mt-5">
    @if ($bank->status == 'active')
      <a href="{{ route('admin.banks.status', $bank) }}" class="btn btn-danger text-capitalize">Nonaktifkan</a>
    @else
      <a href="{{ route('admin.banks.status', $bank) }}" class="btn btn-success text-capitalize">Aktifkan</a>
    @endif
  </div>
@endsection
