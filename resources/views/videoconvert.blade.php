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
        <h3> Video Converter </h3>
        <!--   <hr class="intro-divider"> -->
        <form role="form" action="{{ url('/converter/video') }}" method="post" enctype="multipart/form-data">
{!! csrf_field() !!}
<div class="box-body">
  <div class="form-group">
    <label for="exampleInputFile">File input:</label>
    {!! Form::file('video', array('class' => 'video')) !!}
  </div>
  <div class="form-group">
    <label>Format:</label>
    <select class="form-control" name="videoformat">
      <option value="mkv">mkv</option>
      <option value="avi">avi</option>
      <option value="mp4">mp4</option>
      <option value="flv">flv</option>
      <option value="mpg">mpg</option>
    </select>
  </div>
  <div class="form-group">
    <label>Audio Format:</label>
    <select class="form-control" name="audioformat">
      <option value="aac">aac</option>
      <option value="mp3">mp3</option>
      <option value="flac">flac</option>
      <option value="ac3">ac3</option>
    </select>
  </div>
  <div class="form-group">
    <label>Audio Sample Rate:</label>
    <select class="form-control" name="samplerate">
      <option value="8000">8000</option>
      <option value="11025">11025</option>
      <option value="16000">16000</option>
      <option value="22050">22050</option>
      <option value="32000">32000</option>
      <option value="37800">37800</option>
      <option value="44056">44056</option>
      <option value="44100">44100</option>
    </select>
  </div>
  <div class="form-group">
    <label>Audio Channel:</label>
    <select class="form-control" name="channel">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="5">5 (Only for ac3)</option>
    </select>
  </div>
  <div class="form-group">
    <label>Video Codec:</label>
    <select class="form-control" name="videocodec">
      <option value="h264">h264</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Video Width:</label>
    <input type="number" class="form-control" id="videowidth" name="videowidth" placeholder="Enter Width in Pixel" value="0">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Video Height:</label>
    <input type="number" class="form-control" id="videoheight" name="videoheight" placeholder="Enter Height in Pixel" value="0">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">FPS:</label>
    <input type="number" class="form-control" id="fps" name="fps" placeholder="Enter FPS" value="0">
  </div>

</div><!-- /.box-body -->

<div class="box-footer">
  <button type="submit">Submit</button>
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

