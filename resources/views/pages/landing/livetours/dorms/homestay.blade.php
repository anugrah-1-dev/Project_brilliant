<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

  <title>Asrama Homestay | {{ config('app.name') }}</title>

  <!-- Favicon  -->
  <link rel="shortcut icon" href="{{ asset('assets/image/favicon/android-chrome-512x512.png') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  <style>
    html,
    body {
      margin: 0;
      width: 100%;
      height: 100%;
      font-family: 'Roboto', sans-serif;
      background-color: #eee;
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

    #gallery-container {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 4px;
    }

    .title {
      width: 100%;
      height: 80px;
      line-height: 80px;
      text-align: center;
      font-size: 24px;
      margin-top: 30px
    }

    #panorama-container {
      position: fixed;
      display: flex;
      width: 100%;
      height: 100%;
      top: 0;
      background: rgba(0, 0, 0, 0.9);
      transform: scale(0, 0);
      opacity: 0;
      -webkit-transition: all 0.5s ease-out;
      transition: all 0.5s ease-out;
    }

    #panorama-container.open {
      opacity: 1;
      transform: scale(1, 1);
    }

    .photo {
      flex-grow: 1;
      width: 360px;
      height: 380px;
      background-size: cover;
      margin: 4px;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .photo:hover {
      border-color: #000;
    }

    #progress-bar {
      position: fixed;
      top: 0;
      width: 0;
      height: 5px;
      background-color: #fff;
      transition: opacity 0.5s ease;
    }

    .close {
      width: 44px;
      height: 44px;
      position: absolute;
      right: 0;
      margin: 20px;
      cursor: pointer;
    }

    .close>i {
      color: #fff;
      font-size: 44px;
    }

    #main-container {
      width: 100%;
      height: 80%;
      align-self: center;
      background-color: #000;
    }
  </style>
</head>

<body>
  <div class="credit">
    <a href="{{ route('landing.index') }}" style="background-color: #FFF; padding: 5px; color: #000; border-radius: 10px">
      Kembali ke Beranda
    </a>
  </div>

  <div id="gallery-container">
    <div class="title">Gallery Live Tour Homestay Brilliant English Course</div>
  </div>

  <div id="panorama-container">

    <!-- Progress bar -->
    <div id="progress-bar"></div>

    <!-- Close button -->
    <div class="close">
      <i class="material-icons">close</i>
    </div>

    <!-- Main container -->
    <div id="main-container">

    </div>
  </div>

  <script src="{{ asset('assets/js/three.min.js') }}"></script>
  <script src="{{ asset('assets/js/panolens.min.js') }}"></script>

  <script>
    var gallery, galleryContainer, photo, desc, panoramaContainer, mainContainer, closeButton, animationEndEvents, viewer, panorama, progress, path,
      format, url;

    gallery = ['dalam_homestay', 'luar_homestay'];
    path = "{{ asset('assets/360/asrama/homestay/') }}";
    format = '.jpeg';

    urls = [
      "{{ asset('assets/360/asrama/homestay/dalam_homestay.jpeg') }}",
      "{{ asset('assets/360/asrama/homestay/luar_homestay.jpeg') }}",
    ];

    galleryContainer = document.getElementById('gallery-container');
    panoramaContainer = document.getElementById('panorama-container');
    mainContainer = document.getElementById('main-container');
    progressBar = document.getElementById('progress-bar');
    closeButton = panoramaContainer.querySelector('.close');

    function buildGallery() {

      for (i = 0; i < urls.length; i++) {

        url = urls[i];

        photo = document.createElement('div');
        photo.style.backgroundImage = 'url(' + url + ')';
        photo.classList.add('photo');

        photo.url = url;
        photo.type = 'image';

        photo.addEventListener('click', function() {

          // Keep one panorama
          if (panorama) {
            return;
          }

          // Dynamically generate panorama
          if (this.type === 'image') {

            panorama = new PANOLENS.ImagePanorama(this.url);

          } else if (this.type === 'video') {

            panorama = new PANOLENS.VideoPanorama(this.url, {
              autoplay: true
            });

          } else {

            return;

          }

          panorama.addEventListener('progress', function(event) {

            progress = event.progress.loaded / event.progress.total * 100;

            progressBar.style.width = progress + '%';

            if (progress === 100) {

              progressBar.style.opacity = 0;

            }

          });
          viewer.add(panorama);

          panoramaContainer.classList.add('open');

        }, false);

        galleryContainer.appendChild(photo);

      }

    }

    function setupPanolens() {

      viewer = new PANOLENS.Viewer({
        container: mainContainer
      });

    }

    function disposePanorama() {

      panorama.dispose();
      viewer.remove(panorama);
      panorama = null;
    }

    function init() {

      // Build up gallery
      buildGallery();

      // Setup panolens
      setupPanolens();

      // Dispose panorama when close
      closeButton.addEventListener('click', function() {

        disposePanorama();

        progressBar.style.width = 0;
        progressBar.style.opacity = 1;

        panoramaContainer.classList.remove('open');

      }, false);

    }

    init();
  </script>

</body>

</html>
