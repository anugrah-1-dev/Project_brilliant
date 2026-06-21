@extends('layouts.app')

@section('title', 'Akomodasi')

@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Akomodasi</h3>
            </div>

            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="{{ route('admin.transports.create') }}" class="btn btn-primary d-none d-md-inline-flex">
                                    <em class="icon ni ni-plus"></em><span>Tambah Akomodasi</span>
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
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tranports as $transport)
                        <tr>
                            <td><a href="{{ route('admin.transports.show', $transport) }}" class="text-capitalize">{{ $transport->name }}</a></td>
                            <td>{{ \Laraindo\RupiahFormat::currency($transport->price) }}</td>
                            <td>
                                @if ($transport->status == 'active')
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
@endsection
