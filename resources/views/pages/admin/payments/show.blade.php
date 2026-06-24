@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
  <div class="nk-block-head">
    <div class="nk-block-between g-3">
      <div class="nk-block-head-content">
        <h3 class="nk-block-title page-title">Invoice {{ $payment->student->fullname }}</h3>

        <div class="nk-block-des text-soft">
          <ul class="list-inline">
            <li>Dibuat: <span class="text-base">{{ \Laraindo\TanggalFormat::DateIndo($payment->created_at) }}</span></li>
          </ul>
        </div>
      </div>

      <div class="nk-block-head-content">
        <a href="{{ route('admin.payments.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
          <em class="icon ni ni-arrow-left"></em><span>Back</span>
        </a>
        <a href="{{ route('admin.payments.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
          <em class="icon ni ni-arrow-left"></em>
        </a>
      </div>
    </div>
  </div>

  <div class="nk-block">
    <div class="invoice">

      <div class="invoice-action">
        <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="{{ route('admin.payments.print', $payment) }}" target="_blank"
          style="transform: translateY(30px);">
          <em class="icon ni ni-printer-fill"></em>
        </a>
      </div>

      @if (is_null($payment->transport_id))
        <span class="btn btn-danger text-capitalize d-block mx-auto">Akomodasi: Tidak Ada</span>
      @else
        <span class="btn btn-info text-capitalize d-block mx-auto">Akomodasi: {{ $payment->transport->name }}</span>
      @endif

      <div class="invoice-wrap">
        <div class="invoice-brand text-center">
          <img src="{{ asset('backend/images/logo-dark.png') }}" srcset="{{ asset('backend/images/logo-dark2x.png 2x') }}" alt="logo">
        </div>

        <!-- ./Header-Invoice -->
        <div class="invoice-head">
          <div class="invoice-contact">
            <span class="overline-title">Pemilik Invoice</span>
            <div class="invoice-contact-info">
              <h4 class="title">{{ $payment->student->fullname }}</h4>
              <ul class="list-plain">
                <li>
                  <em class="icon ni ni-map-pin-fill"></em><span>{{ $payment->student->fullname }}<br>
                    {{ $payment->student->village }}, {{ $payment->student->district }},
                    {{ $payment->student->district }}, {{ $payment->student->province }}
                  </span>
                </li>

                <li><em class="icon ni ni-call-fill"></em><span>{{ $payment->student->contact_number }}</span></li>
              </ul>
            </div>
          </div>

          <div class="invoice-desc">
            <h3 class="title">Invoice</h3>
            <ul class="list-plain">
              <li class="invoice-id"><span>Token</span>:<span>{{ $payment->student->token }}</span></li>
              <li class="invoice-date"><span>Periode</span>:<span>{{ \Laraindo\TanggalFormat::DateIndo($payment->period->date) }}</span></li>
            </ul>
          </div>
        </div>
        <!-- ./Header-Invoice -->

        @if ($payment->type == 'DP')
          <!-- ./Invoice-Pembayaran-DP -->
          <div class="invoice-bills">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Durasi</th>
                    <th>Harga</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>DP</td>
                    <td>{{ $payment->course->name }}</td>
                    <td>
                      @if ($payment->course->type == 'offline')
                        Kelas Offline
                      @else
                        Kelas Online
                      @endif
                    </td>
                    <td>{{ $payment->course->duration }}</td>
                    <td>{{ \Laraindo\RupiahFormat::currency(250000 + config('app.kode_unik')) }}</td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Pelunasan</td>
                    <td>{{ \Laraindo\RupiahFormat::currency($payment->course->price + $payment->course->admin_tax - 250000) }}</td>
                  </tr>
                </tfoot>
              </table>

              <div class="nk-notes ff-italic fs-12px text-soft">
                Invoice ini dibuat melalui komputer dan sah tanpa tanda tangan dan stempel.<br><br>
                Pesan Penting: Kami ingin menegaskan bahwa uang yang telah ditransfer untuk pembayaran uang muka (DP) maupun pelunasan (lunas) tidak
                dapat direfund.<br>
              </div>
            </div>
          </div>
          <!-- ./Invoice-Pembayaran-DP -->
        @else
          <!-- ./Invoice-Pembayaran-LUNAS -->
          <div class="invoice-bills">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>Tipe</th>
                    <th>Durasi</th>
                    <th>Harga</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Program</td>
                    <td>{{ $payment->course->name }}</td>
                    <td>
                      @if ($payment->course->type == 'offline')
                        Kelas Offline
                      @else
                        Kelas Online
                      @endif
                    </td>
                    <td>{{ $payment->course->duration }}</td>
                    <td>{{ \Laraindo\RupiahFormat::currency($payment->course->price) }}</td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Biaya Admin</td>
                    <td>{{ \Laraindo\RupiahFormat::currency($payment->course->admin_tax) }}</td>
                  </tr>

                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Kode Unik</td>
                    <td>{{ \Laraindo\RupiahFormat::currency(config('app.kode_unik')) }}</td>
                  </tr>

                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Total</td>
                    <td>{{ \Laraindo\RupiahFormat::currency($payment->course->price + $payment->course->admin_tax + config('app.kode_unik')) }}</td>
                  </tr>
                </tfoot>
              </table>

              <div class="nk-notes ff-italic fs-12px text-soft">
                Invoice ini dibuat melalui komputer dan sah tanpa tanda tangan dan stempel.<br><br>
                Pesan Penting: Kami ingin menegaskan bahwa uang yang telah ditransfer untuk pembayaran uang muka (DP) maupun pelunasan (lunas) tidak
                dapat direfund.<br>
              </div>
            </div>
          </div>
          <!-- ./Invoice-Pembayaran-LUNAS -->
        @endif
      </div>

      <div class="row">
        @if ($payment->transport?->price != 0)
          <div class="col-lg-6 col-12">
            <a target="_blank" href="{{ route('admin.payments.download', [$payment->id, 'course']) }}" class="btn btn-primary text-capitalize d-block mx-auto">
              Download Bukti Transfer Program Belajar
            </a>
          </div>
          <div class="col-lg-6 col-12">
            <a target="_blank" href="{{ route('admin.payments.download', [$payment->id, 'transport']) }}" class="btn btn-primary text-capitalize d-block mx-auto">
              Download Bukti Transfer Akomodasi
            </a>
          </div>
        @else
          <div class="col-12">
            <a target="_blank" href="{{ route('admin.payments.download', [$payment->id, 'course']) }}" class="btn btn-primary text-capitalize d-block mx-auto">
              Download Bukti Transfer Program Belajar
            </a>
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection
