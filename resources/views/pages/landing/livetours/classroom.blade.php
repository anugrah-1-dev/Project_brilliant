<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

  <title>Classroom | {{ config('app.name') }}</title>

  <!-- Favicon  -->
  <link rel="shortcut icon" href="{{ asset('assets/image/favicon/android-chrome-512x512.png') }}" type="image/x-icon">

  <style>
    html,
    body {
      margin: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background-color: #000;
    }

    a:link,
    a:visited {
      color: #bdc3c7;
    }

    .credit {
      position: absolute;
      text-align: center;
      width: 100%;
      padding: 20px 0;
      color: #fff;
    }

    #progress {
      width: 0;
      height: 5px;
      position: fixed;
      top: 0;
      background: #fff;
      -webkit-transition: opacity 0.5s ease;
      transition: opacity 0.5s ease;
    }

    #progress.finish {
      opacity: 0;
    }
  </style>
</head>

<body>

  <div class="credit">
    <a href="{{ route('landing.index') }}" style="background-color: #FFF; padding: 5px; color: #000; border-radius: 10px">
      Kembali ke Beranda
    </a>
  </div>

  <div id="progress"></div>

  <script src="{{ asset('assets/js/three.min.js') }}"></script>
  <script src="{{ asset('assets/js/panolens.min.js') }}"></script>

  <script>
    var progressElement;

    progressElement = document.getElementById('progress');

    function onEnter(event) {

      progressElement.style.width = 0;
      progressElement.classList.remove('finish');

    }

    function onProgress(event) {

      progress = event.progress.loaded / event.progress.total * 100;
      progressElement.style.width = progress + '%';
      if (progress === 100) {
        progressElement.classList.add('finish');
      }

    }

    const panorama = new PANOLENS.ImagePanorama("{{ asset('assets/360/classroom.jpg') }}");
    panorama.addEventListener('progress', onProgress);
    panorama.addEventListener('enter', onEnter);
    const viewer = new PANOLENS.Viewer({
      output: 'console'
    });
    viewer.add(panorama);
  </script>

</body>

</html>
