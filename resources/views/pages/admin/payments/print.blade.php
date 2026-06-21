<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
  <base href="../">
  <meta charset="utf-8">
  <meta name="author" content="Softnio">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="{{ asset('backend/images/favicon.png') }}">
  <!-- Page Title  -->
  <title>Invoice Print | Brilliant English Course</title>
  <!-- StyleSheets  -->
  <link rel="stylesheet" href="{{ asset('backend/css/dashlite.css') }}">
  <link id="skin-default" rel="stylesheet" href="{{ 'backend/css/theme.css' }}">
</head>

<body class="bg-white" onload="printPromot()">
  <div class="nk-block">
    <div class="invoice invoice-print">
      <div class="invoice-wrap">
        <div class="invoice-brand text-center">
          <img src="{{ asset('backend/images/logo-dark.png') }}" srcset="{{ asset('backend/images/logo-dark2x.png 2x') }}" alt="">
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
                    <td>{{ \Laraindo\RupiahFormat::currency(250098) }}</td>
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
                    <td>{{ \Laraindo\RupiahFormat::currency(98) }}</td>
                  </tr>

                  <tr>
                    <td colspan="2"></td>
                    <td colspan="2">Total</td>
                    <td>{{ \Laraindo\RupiahFormat::currency($payment->course->price + $payment->course->admin_tax + 98) }}</td>
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
    </div>
  </div>

  <!-- ./Js-Print-Page -->
  <script>
    function printPromot() {
      window.print();
    }
  </script>
</body>

</html>
