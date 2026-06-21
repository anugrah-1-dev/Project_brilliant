@extends('layouts.app')

@section('title', 'Tambah Akomodasi')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.transports.index') }}">
          <em class="icon ni ni-arrow-left"></em><span>List Akomodasi</span>
        </a>
      </div>
    </div>
  </div>

  <!-- ./Error-Handling -->
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
  <!-- ./Error-Handling -->

  <div class="card">
    <div class="card-inner">
      <!-- ./Form -->
      <form action="{{ route('admin.transports.store') }}" method="POST">
        @csrf

        <div class="row g-4">
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="name">Nama Akomodasi</label>
              <div class="form-control-wrap">
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan nama akomodasi"
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: Jemput Stasiun Kediri, Jemput Bandara Juanda Surabaya</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="price">Harga Akomodasi</label>
              <div class="form-control-wrap">
                <input type="number" min="0" name="price" id="price" value="{{ old('price') }}"
                  placeholder="Masukkan (nominal) harga akomodasi" class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: 123456</p>
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
      <!-- ./EndForm -->
    </div>
  </div>
@endsection
