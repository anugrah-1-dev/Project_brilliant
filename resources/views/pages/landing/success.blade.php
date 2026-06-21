@extends('layouts.front')

@section('title', 'Success')

@section('content')
    <div class="thank-you-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                    <div class="thankyou-content text-center">
                        <img class="w-100" src="{{ asset('assets/image/thankyou.png') }}" alt="image">

                        <h2>Thank You</h2>

                        <p>
                            Terimakasih telah bergabung menjadi bagian dari Brilliant English course. <b>Jangan lupa untuk mencetak Invoice mu</b>
                        </p>

                        <div class="back-to-btn">
                            <a href="{{ route('landing.invoice.print', $token) }}" target="_blank"><button class="btn focus-reset">Cetak
                                    Invoice</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
