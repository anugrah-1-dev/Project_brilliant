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

    @php
        $popupPoster = \App\Models\Popup::where('is_active', true)->first();
    @endphp

    @if($popupPoster && $popupPoster->image)
        <div class="modal fade" id="posterPopupModal" tabindex="-1" aria-labelledby="posterPopupModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" style="background: transparent; border: none;">
                    <div class="modal-header border-0 p-0" style="position: absolute; right: -10px; top: -10px; z-index: 1050;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff; border-radius: 50%; opacity: 1; padding: 10px;"></button>
                    </div>
                    <div class="modal-body p-0 text-center">
                        <img src="{{ Storage::url($popupPoster->image) }}" class="img-fluid rounded" alt="Promo Poster" style="max-height: 80vh; object-fit: contain;">
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Gunakan sessionStorage agar popup muncul sekali tiap sesi
                if (!sessionStorage.getItem('popupShown')) {
                    // Cek jika bootstrap tersedia
                    if(typeof bootstrap !== 'undefined') {
                        var popupModal = new bootstrap.Modal(document.getElementById('posterPopupModal'));
                        popupModal.show();
                        sessionStorage.setItem('popupShown', 'true');
                    }
                }
            });
        </script>
    @endif

    @stack('before-script')
    @include('includes.front.script')
    @stack('after-script')

    @include('sweetalert::alert')
</body>

</html>
