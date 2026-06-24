<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice - {{ $payment->student->fullname }}</title>
    <style>
        /* Reset & Dasar */
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 12px;
            color: #555;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }

        /* Helper Classes */
        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .text-bold {
            font-weight: bold;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .mb-1 {
            margin-bottom: 5px;
        }

        .mt-2 {
            margin-top: 15px;
        }

        /* Layout Utama */
        .invoice-box {
            max-width: 100%;
            margin: auto;
            padding: 0;
            /* Padding diatur oleh dompdf via setPaper */
        }

        /* Header Layout dengan Tabel (Pengganti Flexbox) */
        table.header-table {
            width: 100%;
            margin-bottom: 20px;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }

        .brand-logo img {
            max-height: 60px;
            width: auto;
        }

        /* Informasi Invoice & Siswa */
        .invoice-info-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .invoice-info-table td {
            vertical-align: top;
        }

        .student-info h4 {
            margin: 0 0 5px 0;
            font-size: 16px;
            color: #333;
        }

        /* Tabel Item Tagihan */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .items-table th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: bold;
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }

        .items-table td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .items-table tfoot td {
            border-top: 2px solid #eee;
            font-weight: bold;
            color: #333;
            padding: 10px;
        }

        .items-table .total-row td {
            background-color: #f8f9fa;
            border-top: 2px solid #333;
            font-size: 14px;
        }

        /* Catatan Footer */
        .notes {
            font-size: 10px;
            color: #777;
            font-style: italic;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }

        /* Watermark */
        .watermark {
            position: fixed;
            top: 25%;
            left: 10%;
            width: 80%;
            opacity: 0.25; /* Ditingkatkan agar lebih jelas */
            z-index: -1000;
            text-align: center;
        }
        .watermark img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    @php
        $watermarkPath = public_path('assets/image/logo/logo.jpeg');
        $watermarkSrc = '';
        if (file_exists($watermarkPath)) {
            $watermarkData = base64_encode(file_get_contents($watermarkPath));
            $watermarkSrc = 'data:image/jpeg;base64,' . $watermarkData;
        }
    @endphp

    @if($watermarkSrc)
    <div class="watermark">
        <img src="{{ $watermarkSrc }}" alt="Watermark" />
    </div>
    @endif

    <div class="invoice-box">

        <table class="header-table">
            <tr>
                <td width="50%">
                    <div class="brand-logo">
                        @php
                            $imagePath = public_path('assets/image/logo/logo-surat.png');
                            $imageData = base64_encode(file_get_contents($imagePath));
                            $src = 'data:image/png;base64,' . $imageData;
                        @endphp
                        <img src="{{ $src }}" alt="Logo" />
                    </div>
                </td>
                <td width="50%" class="text-right">
                    <h2 style="margin:0; color: #333;">INVOICE</h2>
                    <div>Nomor: <strong>{{ $payment->student->token }}</strong></div>
                    <div>Periode: {{ \Laraindo\TanggalFormat::DateIndo($payment->period->date) }}</div>
                </td>
            </tr>
        </table>

        <table class="invoice-info-table">
            <tr>
                <td>
                    <span style="font-size: 10px; text-transform: uppercase; color: #999;">Ditagihkan Kepada:</span>
                    <div class="student-info mt-2">
                        <h4>{{ $payment->student->fullname }}</h4>
                        <div>{{ $payment->student->address }}</div>
                        <div>
                            {{ $payment->student->village }}, {{ $payment->student->district }}<br>
                            {{ $payment->student->city }}, {{ $payment->student->province }}
                        </div>
                        <div style="margin-top: 5px;">Telp: {{ $payment->student->contact_number }}</div>
                    </div>
                </td>
            </tr>
        </table>

        <table class="items-table">
            <thead>
                <tr>
                    <th>Jenis</th>
                    <th>Nama Program</th>
                    <th>Tipe</th>
                    <th>Durasi</th>
                    <th class="text-right">Harga</th>
                </tr>
            </thead>
            <tbody>
                @if ($payment->type == 'DP')
                    <tr>
                        <td>DP</td>
                        <td>{{ $payment->course->name }}</td>
                        <td>{{ $payment->course->type == 'offline' ? 'Kelas Offline' : 'Kelas Online' }}</td>
                        <td>{{ $payment->course->duration }}</td>
                        <td class="text-right">{{ \Laraindo\RupiahFormat::currency(250000 + config('app.kode_unik')) }}</td>
                    </tr>
                @else
                    <tr>
                        <td>Program</td>
                        <td>{{ $payment->course->name }}</td>
                        <td>{{ $payment->course->type == 'offline' ? 'Kelas Offline' : 'Kelas Online' }}</td>
                        <td>{{ $payment->course->duration }}</td>
                        <td class="text-right">{{ \Laraindo\RupiahFormat::currency($payment->course->price) }}</td>
                    </tr>
                @endif
            </tbody>

            <tfoot>
                @if ($payment->type == 'DP')
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-right">Pelunasan Berikutnya</td>
                        <td class="text-right">
                            {{ \Laraindo\RupiahFormat::currency($payment->course->price + $payment->course->admin_tax - 250000) }}
                        </td>
                    </tr>
                @else
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-right">Biaya Admin</td>
                        <td class="text-right">{{ \Laraindo\RupiahFormat::currency($payment->course->admin_tax) }}</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-right">Kode Unik</td>
                        <td class="text-right">{{ \Laraindo\RupiahFormat::currency(config('app.kode_unik')) }}</td>
                    </tr>
                    <tr class="total-row">
                        <td colspan="3"></td>
                        <td class="text-right">TOTAL BAYAR</td>
                        <td class="text-right">
                            {{ \Laraindo\RupiahFormat::currency($payment->course->price + $payment->course->admin_tax + config('app.kode_unik')) }}
                        </td>
                    </tr>
                @endif
            </tfoot>
        </table>

        <div class="notes">
            <p><strong>Pesan Penting:</strong></p>
            <p style="margin-top: 5px;">
                Faktur ini dibuat melalui komputer dan sah tanpa tanda tangan dan stempel.<br>
                Kami ingin menegaskan bahwa uang yang telah ditransfer untuk pembayaran uang muka (DP) maupun pelunasan tidak dapat direfund.<br><br>
                Kamu harus datang di Brilliant 2 atau 1 hari sebelum tanggal Start Program dimulai. Dikarenakan akan ada Placement Tes Kemampuan Bahasa Inggris kamu dan akan masuk asrama sebelum tanggal program dimulai.<br><br>
                Harap cetak invoice ini dan tunjukan di Front Office Brilliant ketika daftar ulang dan pelunasan.<br><br>
                Thank you, Welcome to Brilliant!<br>
                We Are Big Family!
            </p>
        </div>

    </div>
</body>

</html>
