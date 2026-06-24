@php
    use Laraindo\RupiahFormat;
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') | {{ config('app.name') }}</title>

    @stack('before-style')
    @include('includes.front.style')
    @stack('after-style')
</head>

<body data-theme-mode-panel-active data-theme="light" style="font-family: 'DM Sans', sans-serif;">
    <div class="site-wrapper overflow-hidden position-relative">
        <!-- Site Header -->
        <!--Site Header Area -->
        @include('includes.front.navbar')
        <!-- navbar- -->

        @yield('content')

        @php
            $waContacts = \App\Models\Contact::where('status', 'active')->get();
            $baseRight = 40;
            $gap = 65;
        @endphp

        @foreach($waContacts as $index => $contact)
            @php
                $waText = "Halo, saya mau tanya-tanya tentang program di Brilliant English Course. Saya tahu info ini dari websitenya: https://pendaftarankampunginggris.com/";
                
                // Ensure phone number only contains digits and starts with 62 instead of 0
                $phone = preg_replace('/[^0-9]/', '', $contact->phone);
                if (str_starts_with($phone, '0')) {
                    $phone = '62' . substr($phone, 1);
                }
            @endphp
            <a href="https://api.whatsapp.com/send?phone={{ $phone }}&text={{ urlencode($waText) }}" target="_blank" class="float-dynamic" style="right: {{ $baseRight + ($index * $gap) }}px;">
                <i class="fab fa-whatsapp fa-lg my-float"></i> <br><br>
                <strong class="subname">{{ $contact->name }}</strong>
            </a>
        @endforeach

        <footer class="text-white text-center p-3" style="background-color: #101C3D">
            Kampung Inggris Pusat. © 2023 Brilliant English Course. Hak Cipta Dilindungi Oleh Undang-Undang
        </footer>

    </div>

    @stack('before-script')
    @include('includes.front.script')
    @stack('after-script')

    @include('sweetalert::alert')
</body>

</html>
