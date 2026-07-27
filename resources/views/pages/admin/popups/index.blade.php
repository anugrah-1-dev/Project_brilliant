@extends('layouts.app')

@section('title', 'Pengaturan Popup Poster')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Pengaturan Popup Poster</h3>
            </div>
        </div>
    </div>

    <div class="card card-bordered">
        <div class="card-inner">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.popups.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="image">Gambar Poster</label>
                            <div class="form-control-wrap">
                                <input type="file" class="form-control" id="image" name="image" accept="image/*" {{ $popup ? '' : 'required' }}>
                            </div>
                            <span class="text-muted small">Format yang didukung: JPG, JPEG, PNG, GIF, WEBP. Maks 4MB.</span>
                            
                            @if ($popup && $popup->image)
                                <div class="mt-3">
                                    <p class="form-label">Poster Saat Ini:</p>
                                    <img src="{{ Storage::url($popup->image) }}" alt="Poster" class="img-thumbnail" style="max-height: 250px;">
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" {{ ($popup && $popup->is_active) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active">Aktifkan Popup</label>
                            </div>
                            <span class="text-muted small d-block mt-1">Jika diaktifkan, poster ini akan muncul pertama kali saat pengunjung membuka website.</span>
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
