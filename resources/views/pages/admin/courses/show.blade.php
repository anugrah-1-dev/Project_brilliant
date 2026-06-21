{{-- @dd($course) --}}
@extends('layouts.app')

@section('title', 'Detail Program Belajar')

@section('content')
  <div class="nk-block-head nk-block-head-lg wide-sm">
    <div class="nk-block-head-content">
      <div class="nk-block-head-sub">
        <a class="back-to" href="{{ route('admin.courses.index') }}">
          <em class="icon ni ni-arrow-left"></em><span>List Program Belajar</span>
        </a>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="row g-4">
        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-label" for="name">Nama Program Belajar</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="name" name="name" placeholder="{{ $course->name }}" disabled />
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="form-group">
            <label class="form-label" for="price">Harga</label>
            <div class="form-control-wrap">
              <input type="text" class="form-control" id="price" name="price"
                placeholder="{{ \Laraindo\RupiahFormat::currency($course->price) }}" disabled>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
      <div class="nk-block-head-content">
        <span class="nk-block-title page-title">Luaran</span>
      </div>

      <div class="nk-block-head-content">
        <div class="toggle-wrap nk-block-tools-toggle">
          <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
          <div class="toggle-expand-content" data-content="pageMenu">
            <ul class="nk-block-tools g-3">
              <li class="nk-block-tools-opt">
                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                <a href="{{ route('admin.course.features.create', $course) }}" class="btn btn-primary d-none d-md-inline-flex text-capitalize">
                  <em class="icon ni ni-plus"></em><span>Tambah Luaran Program {{ $course->name }}</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card card-bordered card-preview">
    <div class="card-inner">
      <table class="datatable-init-export nowrap table" data-export-title="Export">
        <thead>
          <tr>
            <th class="text-capitalize">Luaran Program {{ $course->name }}</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($course->features as $feature)
            <tr>
              <td><a href="{{ route('admin.course.features.show', $feature) }}" class="text-capitalize">{{ $feature->feature }}</a></td>
              <td>
                @if ($feature->status == 'active')
                  <span class="badge badge-dim bg-success">Aktif</span>
                @else
                  <span class="badge badge-dim bg-danger">Tidak Aktif</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="d-block text-end mt-5">
    @if ($course->status == 'active')
      <a href="{{ route('admin.courses.status', $course) }}" class="btn btn-danger text-capitalize">
        Nonaktifkan Program {{ $course->name }}
      </a>
    @else
      <a href="{{ route('admin.courses.status', $course) }}" class="btn btn-success text-capitalize">
        Aktifkan Program {{ $course->name }}
      </a>
    @endif
  </div>
@endsection
