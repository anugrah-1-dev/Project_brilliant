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

  <div class="d-flex justify-content-between mt-5">
    <form action="{{ route('admin.course.features.destroy', $feature) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus luaran ini?');">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger text-capitalize">Hapus Luaran</button>
    </form>
    
    <div class="d-flex" style="gap: 10px;">
      <a href="{{ route('admin.course.features.edit', $feature) }}" class="btn btn-warning text-capitalize">Edit Luaran</a>

      @if ($feature->status == 'active')
        <a href="{{ route('admin.course.features.status', $feature) }}" class="btn btn-secondary text-capitalize">
          Nonaktifkan Luaran
        </a>
      @else
        <a href="{{ route('admin.course.features.status', $feature) }}" class="btn btn-success text-capitalize">
          Aktifkan Luaran
        </a>
      @endif
    </div>
  </div>
@endsection
