@extends('layouts.app')

@section('title', 'Tambah Luaran Program')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub">
        <a class="back-to" href="{{ route('admin.courses.show', $course->slug) }}">
          <em class="icon ni ni-arrow-left"></em><span>Kembali ke Program Belajar {{ $course->name }}</span>
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
      <form action="{{ route('admin.course.features.store', $course) }}" method="POST">
        @csrf

        <div class="row g-4">
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="feature">Deskripsi Luaran</label>
              <div class="form-control-wrap">
                <input type="text" name="feature" id="feature" value="{{ old('feature') }}" placeholder="Masukkan deskripsi luaran program belajar"
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">Contoh: T-Shirt, Sertifikat, Tempat Tinggal / Camp</p>
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
