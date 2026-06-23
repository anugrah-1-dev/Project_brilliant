@extends('layouts.app')

@section('title', 'Kontak WhatsApp CS')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Kontak CS (WhatsApp)</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none" data-bs-toggle="modal" data-bs-target="#addContact"><em class="icon ni ni-plus"></em></a>
                                <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" data-bs-target="#addContact">
                                    <em class="icon ni ni-plus"></em><span>Tambah Kontak</span>
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
                        <th>Nama CS</th>
                        <th>Nomor WhatsApp</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td class="text-capitalize">{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>
                                @if ($contact->status == 'active')
                                    <span class="badge badge-sm badge-dot has-bg bg-success d-none d-sm-inline-flex">Aktif</span>
                                @else
                                    <span class="badge badge-sm badge-dot has-bg bg-danger d-none d-sm-inline-flex">Tidak Aktif</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.contacts.status', $contact->id) }}" class="btn btn-sm {{ $contact->status == 'active' ? 'btn-warning' : 'btn-success' }}">
                                    {{ $contact->status == 'active' ? 'Nonaktifkan' : 'Aktifkan' }}
                                </a>
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#editContact{{ $contact->id }}">Edit</a>
                                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus kontak ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editContact{{ $contact->id }}" tabindex="-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Kontak CS</h5>
                                        <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="form-label" for="name">Nama CS</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone">Nomor WhatsApp</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" placeholder="Contoh: 6281234567890" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="status">Status</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" name="status" required>
                                                        <option value="active" {{ $contact->status == 'active' ? 'selected' : '' }}>Aktif</option>
                                                        <option value="inactive" {{ $contact->status == 'inactive' ? 'selected' : '' }}>Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group text-end">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="addContact" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kontak CS</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.contacts.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="name">Nama CS</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Contoh: CS Pendaftaran">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Nomor WhatsApp</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="phone" name="phone" required placeholder="Contoh: 6281234567890">
                            </div>
                            <span class="text-muted small">Mulai dengan kode negara (misal 62) tanpa tanda plus atau spasi.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" name="status" required>
                                    <option value="active">Aktif</option>
                                    <option value="inactive">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
