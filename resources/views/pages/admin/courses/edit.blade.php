@extends('layouts.app')

@section('title', 'Edit Program Belajar')

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
      <!-- ./Form -->
      <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-4">
          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="name">Nama Program Belajar</label>
              <div class="form-control-wrap">
                <input type="text" name="name" id="name" value="{{ old('name', $course->name) }}" placeholder="Masukkan nama program belajar"
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: kelas online 1</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="price">Harga</label>
              <div class="form-control-wrap">
                <input type="number" min="0" name="price" id="price" value="{{ old('price', $course->price) }}"
                  placeholder="Masukkan (nominal) harga program belajar" class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: 250000</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="admin_tax">Biaya Admin</label>
              <div class="form-control-wrap">
                <input type="number" min="0" name="admin_tax" id="admin_tax" value="{{ old('admin_tax', $course->admin_tax) }}"
                  placeholder="Masukkan (nominal) biaya admin program belajar" class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: 125000</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label" for="duration">Durasi</label>
              <div class="form-control-wrap">
                <input type="text" name="duration" id="duration" value="{{ old('duration', $course->duration) }}" placeholder="Masukkan durasi (hari) program belajar "
                  class="form-control form-control-lg" />
                <p class="text-soft mt-1">contoh: 14 hari</p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <label class="form-label">Tipe Kelas</label>
              <div class="form-control-wrap">
                <select name="type" data-ui="lg" class="form-select js-select2">
                  <option>Pilih Tipe Kelas</option>
                  <option value="offline" {{ old('type', $course->type) == 'offline' ? 'selected' : '' }}>Kelas Offline</option>
                  <option value="online" {{ old('type', $course->type) == 'online' ? 'selected' : '' }}>Kelas Online</option>
                  <option value="combo" {{ old('type', $course->type) == 'combo' ? 'selected' : '' }}>Kelas Offline + Liburan</option>
                  <option value="holiday-member" {{ old('type', $course->type) == 'holiday-member' ? 'selected' : '' }}>Paket Liburan (Khusus Member)</option>
                </select>
                <p class="text-soft mt-1">contoh: online/offline </p>
              </div>
            </div>
          </div>

          <div class="col-12">
            <div class="form-group">
              <button type="submit" class="btn btn-lg btn-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
