@extends('layouts.app')

@section('title', 'Detail Akomodasi')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub">
        <a class="back-to" href="{{ route('admin.transports.index') }}">
          <em class="icon ni ni-arrow-left"></em><span>List Akomodasi</span>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-label" for="name">Nama Akomodasi</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ $transport->name }}" readonly />
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-label" for="price">Harga Akomodasi</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control form-control-lg" id="price" name="price"
                value="{{ \Laraindo\RupiahFormat::currency($transport->price) }}" readonly />
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="d-block text-end mt-5">
    @if ($transport->status == 'active')
      <a href="{{ route('admin.transports.status', $transport) }}" class="btn btn-danger text-capitalize">Nonaktifkan</a>
    @else
      <a href="{{ route('admin.transports.status', $transport) }}" class="btn btn-success text-capitalize">Aktifkan</a>
    @endif
  </div>
@endsection
