@extends('layouts.app')

@section('title', 'Master Data Pengguna')

@section('content')
  <div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">List Pengguna</h3>
      </div>
    </div>
  </div>

  <div class="card card-bordered card-preview">
    <div class="card-inner">
      <table class="datatable-init-export nowrap table" data-export-title="Export">
        <thead>
          <tr>
            <th>Nama Lengkap</th>
            <th>Token</th>
            <th>Tanggal Lahir</th>
            <th>Pendidikan</th>
            <th>Periode</th>
            <th>Alamat</th>
            <th>Info Web</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody class="text-capitalize">
          @foreach ($students as $student)
            <tr>
              <td>{{ $student->fullname }}</td>
              <td>{{ $student->token }}</td>
              <td>{{ \Laraindo\TanggalFormat::DateIndo($student->birth_date) }}</td>
              <td>{{ $student->last_education }}</td>
              <td>{{ $student->period ? \Laraindo\TanggalFormat::DateIndo($student->period->date) : ($student->payments->first()?->period ? \Laraindo\TanggalFormat::DateIndo($student->payments->first()->period->date) : '-') }}</td>
              <td>{{ $student->address }}</td>
              <td>{{ $student->info_web }}</td>
              <td><a href="{{ route('admin.students.show', $student) }}">Lihat Detail</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
