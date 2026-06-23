@extends('layouts.app')

@section('title', 'List Bank Pembayaran')

@section('content')
  <div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Bank</h3>
      </div>

      <div class="nk-block-head-content">
        <div class="toggle-wrap nk-block-tools-toggle">
          <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
          <div class="toggle-expand-content" data-content="pageMenu">
            <ul class="nk-block-tools g-3">
              <li class="nk-block-tools-opt">
                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                <a href="{{ route('admin.banks.create') }}" class="btn btn-primary d-none d-md-inline-flex">
                  <em class="icon ni ni-plus"></em><span>Tambah Bank</span>
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
            <th>Nama Bank</th>
            <th>Nomor Rekening</th>
            <th>Atas Nama</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody class="text-uppercase">
          @foreach ($banks as $bank)
            <tr>
              <td><a href="{{ route('admin.banks.show', $bank) }}" class="text-capitalize">{{ $bank->name }}</td>
              <td>{{ $bank->number }}</td>
              <td>{{ $bank->owner }}</td>
              <td>
                @if ($bank->status == 'active')
                  <span class="badge bg-success">Aktif</span>
                @else
                  <span class="badge bg-danger">Tidak Aktif</span>
                @endif
              </td>
              <td>
                <a href="{{ route('admin.banks.edit', $bank->id) }}" class="btn btn-sm btn-primary">Edit</a>
                <form action="{{ route('admin.banks.destroy', $bank->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus bank ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
