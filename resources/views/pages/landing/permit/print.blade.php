<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Surat Perizinan Meninggalkan Camp</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <link type="text/css" href="{{ asset('assets/css/jquery.signature.css') }}" rel="stylesheet">
  <style>
    .kbw-signature {
      width: 50%;
      height: 300px;
    }

    #sig canvas {
      width: 100% !important;
      height: auto;
    }
  </style>
</head>

<body onload="cetak()">
  <div class="container">
    <div class="card" style="border: none;">
      <div class="card-body">
        <div class="container mb-5 mt-3">
          <div class="container">
            <div class="col-md-12">
              <div class="text-center">
                <img src="{{ asset('assets/image/logo/logo-surat.png') }}" alt="logo-surat">
                <h3 class="pt-0">SURAT IZIN</h3>
              </div>
            </div>

            <div class="row mt-5">
              <div class="col-xl-8">
                <ul class="list-unstyled">
                  <li>Assalamualaikum wr wb,</li>
                  <li>Dengan Hormat, dalam rangka tujuan {{ $permit->purpose }}, maka :</li>
                </ul>
              </div>
              <div class="col-xl-4"></div>
            </div>

            <div class="row my-2 mx-1 justify-content-center" style="page-break-inside: avoid;">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td scope="row">Nama</td>
                    <td>:</td>
                    <td>{{ $permit->fullname }}</td>
                  </tr>
                  <tr>
                    <td scope="row">Kelas</td>
                    <td>:</td>
                    <td>{{ $permit->classname }}</td>
                  </tr>
                  <tr>
                    <td scope="row">Camp</td>
                    <td>:</td>
                    <td>{{ $permit->camp }}</td>
                  </tr>
                  <tr>
                    <td scope="row">Tanggal Pergi</td>
                    <td>:</td>
                    <td>{{ \Laraindo\TanggalFormat::DateIndo($permit->leave_date) }}</td>
                  </tr>
                  <tr>
                    <td scope="row">Tanggal Pulang</td>
                    <td>:</td>
                    <td>{{ \Laraindo\TanggalFormat::DateIndo($permit->arrival_date) }}</td>
                  </tr>
                  <tr>
                    <td scope="row">No Kwitansi</td>
                    <td>:</td>
                    <td>{{ $permit->invoice_number }}</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="row">
              <div class="col-xl-8">
                <p class="text-center"><strong>Telah diizinkan</strong></p>
                <p style="text-align: justify;">Apabila ditemukan adanya pemalsuan data, maka Brilliant English Course memiliki wewenang untuk
                  menerbitkan Surat Peringatan Ketiga
                  (SP3) sesuai prosedur yang berlaku</p>
                <p style="text-align: justify;">Demikian permohonan kami, atas perhatian dan bantuannya disampaikan terimakasih.</p>
                <p>Wassalamualaikum wr wb.</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-10"></div>
              <div class="col-xl-2 text-end">
                <ul class="list-unstyled">
                  <li>Pare, {{ \Laraindo\TanggalFormat::DateIndo($permit->leave_date, 'j F Y') }}</li>

                </ul>
              </div>
            </div>

            <div class="row">
              <table>
                <tbody>

                  <tr>
                    <!-- ./paraf tutor satu -->
                    <td class="text-center">
                      <img class="img-fluid" src="{{ asset('storage/signature/' . $ttd_officer) }}" alt="paraf-satu" />
                      {{-- <hr class="w-75 mx-auto"> --}}
                      <p style="border-top: 1px solid black; width: 75%; padding-top: 15px;">{{ $permit->nama_officer }}</p>
                    </td>

                    <!-- ./paraf penanggung jawab -->
                    <td class="text-center">
                      <img class="img-fluid" src="{{ asset('storage/signature/' . $ttd_pj) }}" alt="ttd_pj" />
                      {{-- <hr class="w-75 mx-auto"> --}}
                      <p style="border-top: 1px solid black; width: 75%; padding-top: 15px;">{{ $permit->nama_pj }}</p>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-ui-touch-punch@0.2.3/jquery.ui.touch-punch.min.js"></script>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.signature.js') }}"></script>
  <script>
    function cetak() {
      window.print();
    }
  </script>
</body>

</html>
