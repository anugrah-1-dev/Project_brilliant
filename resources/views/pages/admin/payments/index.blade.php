@extends('layouts.app')

@section('title', 'List Data Transaksi')

@section('content')
  <div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">List Transaksi</h3>
      </div>
    </div>
  </div>

  <div class="card card-bordered card-preview">
    <div class="card-inner">
      <table class="datatable-init-export table" data-export-title="Export">
        <thead>
          <tr>
            <th>Nama Lengkap</th>
            <th>Nama Program</th>
            <th>Periode</th>
            <th>Pembayaran</th>
            <th>Total</th>
            <th>Tanggal Pendaftaran</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="text-capitalize">
          @foreach ($payments as $payment)
            <tr>
              <td>{{ $payment->student?->fullname ?? '-' }}</td>
              <td>{{ $payment->course?->name ?? '-' }}</td>
              <td>{{ $payment->period ? \Laraindo\TanggalFormat::DateIndo($payment->period->date) : '-' }}</td>
              <td>{{ $payment->bank?->name ?? '-' }} {{ $payment->type == 'DP' ? 'DP' : '' }}</td>
              <td>
                {{ $payment->type == 'DP' ? \Laraindo\RupiahFormat::currency(250000) : \Laraindo\RupiahFormat::currency($payment->total) }}
              </td>
              <td>{{ \Laraindo\TanggalFormat::DateIndo($payment->created_at) }}</td>
              <td><a href="{{ route('admin.payments.show', $payment->id) }}">Lihat Detail</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
