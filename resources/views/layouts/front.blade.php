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

        {{-- <a href="https://wa.me/6282228220233" target="_blank" class="float">
            <i class="fab fa-whatsapp fa-lg my-float"></i> <br><br>
            <strong class="subname">CS 1</strong>
        </a>
        <a href="https://wa.me/6281314727263" target="_blank" class="float-two">
            <i class="fab fa-whatsapp fa-lg my-float"></i> <br><br>
            <strong class="subname">CS 2</strong>
        </a> --}}
        <a href="#" target="_blank" class="float-three">
            <i class="fab fa-whatsapp fa-lg my-float"></i> <br><br>
            <strong class="subname">CS</strong>
        </a>

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
