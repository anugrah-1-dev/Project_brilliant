@extends('layouts.app')

@section('title', 'Luaran Program')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub">
        <a class="back-to" href="{{ route('admin.courses.show', $feature->course->slug) }}">
          <em class="icon ni ni-arrow-left"></em>
          <span>Kembali ke Program Belajar {{ $feature->course->name }}</span>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="form-group">
        <label class="form-label" for="feature">Deskripsi Luaran</label>
        <div class="form-control-wrap">
          <input type="text" name="feature" id="feature" value="{{ $feature->feature }}" class="form-control form-control-lg" readonly />
        </div>
      </div>
    </div>
  </div>

  <div class="d-block text-end mt-5">
    @if ($feature->status == 'active')
      <a href="{{ route('admin.course.features.status', $feature) }}" class="btn btn-danger text-capitalize">
        Nonaktifkan Luaran
      </a>
    @else
      <a href="{{ route('admin.course.features.status', $feature) }}" class="btn btn-success text-capitalize">
        Aktifkan Luaran
      </a>
    @endif
  </div>
@endsection
