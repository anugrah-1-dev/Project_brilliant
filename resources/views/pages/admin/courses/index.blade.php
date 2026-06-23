@extends('layouts.app')

@section('title', 'Data Program Belajar')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Program Belajar</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="{{ route('admin.courses.create') }}" class="btn btn-primary d-none d-md-inline-flex">
                                    <em class="icon ni ni-plus"></em><span>Tambah Program</span>
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
                        <th>Nama Program Belajar</th>
                        <th>Harga</th>
                        <th>Biaya Admin</th>
                        <th>Durasi</th>
                        <th>Tipe Kelas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td><a href="{{ route('admin.courses.show', $course->slug) }}" class="text-capitalize">{{ $course->name }}</a></td>
                            <td>{{ \Laraindo\RupiahFormat::currency($course->price) }}</td>
                            <td>{{ \Laraindo\RupiahFormat::currency($course->admin_tax) }}</td>
                            <td class="text-uppercase">{{ $course->duration }}</td>
                            <td class="text-capitalize">Kelas {{ $course->type }}</td>
                            <td>
                                @if ($course->status == 'active')
                                    <span class="badge badge-dim bg-success">Aktif</span>
                                @else
                                    <span class="badge badge-dim bg-danger">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.courses.edit', $course->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus program ini?');">
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
