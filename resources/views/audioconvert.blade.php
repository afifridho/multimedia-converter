<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ url('') }}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ url('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ url('') }}/assets/css/landing-page.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Multimedia Converter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/converter/image">Picture</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/converter/video">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/converter/audio">Sound</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="intro-header">
      <div class="container">
        <div class="intro-message">
        <h3> Sound/Audio Converter </h3>
        <!--   <hr class="intro-divider"> -->
        <form role="form" action="{{ url('/converter/audio') }}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
  <div class="box-body">
    <div class="form-group">
      <label for="exampleInputFile">File input:</label>
      <input type="file" name="audio">
    </div>
    <div class="form-group">
      <label>Format:</label>
      <select class="form-control" name="audioformat">
        <option value="mp3">mp3</option>
        <option value="ac3">ac3</option>
        <option value="aiff">aiff</option>
        <option value="ogg">ogg</option>
        <option value="wav">wav</option>

      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Bitrate:</label>
      <select class="form-control" name="bitrate">
        <option value="32k">32 kbit/s – generally acceptable only for speech</option>
        <option value="96k">96 kbit/s – generally used for speech or low-quality streaming</option>
        <option value="128k">128 kbit/s – mid-range bitrate quality</option>
        <option value="192k">192 kbit/s – medium quality bitrate</option>
        <option value="256k">256 kbit/s – a commonly used high-quality bitrate</option>
        <option value="320k">320 kbit/s – highest level supported by the MP3 standard</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sample Rate:</label>
      <select class="form-control" name="samplerate">
        <option value="8000">8000 Hz</option>
        <option value="11025">11025 Hz</option>
        <option value="22050">22050 Hz</option>
        <option value="32000">32000 Hz</option>
        <option value="44000">44000 Hz</option>
        <option value="48000">48000 Hz</option>
        <option value="64000">64000 Hz</option>
        <option value="88200">88200 Hz</option>
        <option value="96000">96000 Hz</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Channel:</label>
      <select class="form-control" name="channel">
        <option value="1">1</option>
        <option value="2">2</option>
      </select>
    </div>

  </div><!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" name="button">Convert</button>
  </div>
</form>



      </div>
      </header>
<footer>
      <div class="container">
        <ul class="list-inline">
          <!-- <li class="list-inline-item">
            <a href="#">Home</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a>About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a>Services</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#contact">Contact</a>
          </li>
        </ul> -->
        <p class="copyright text-muted small">Copyright by JMKel1 2017. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/dragdrop.js"></script>
    <script src="vendor/bootstrap/js/dropzone.js"></script>

  </body>

</html>
