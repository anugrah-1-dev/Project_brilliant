@extends('layouts.app')

@section('title', 'Periode')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub"><a class="back-to" href="{{ route('admin.periods.index') }}">
          <em class="icon ni ni-arrow-left"></em><span>List Periode</span>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <form action="{{ route('admin.periods.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label class="form-label">Tanggal</label>
          <div class="form-control-wrap">
            <input type="text" name="date" placeholder="yyyy-mm-dd" class="form-control form-control-lg date-picker" data-date-format="yyyy-mm-dd"
              required />
            <p class="text-soft mt-1">contoh: 2023-03-03</p>
          </div>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
@endsection
