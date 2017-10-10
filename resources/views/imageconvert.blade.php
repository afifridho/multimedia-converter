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
        <h3> Image Converter </h3>
        <!--   <hr class="intro-divider"> -->


<form role="form" action="{{ url('/converter/image') }}" method="post" enctype="multipart/form-data">
  {!! csrf_field() !!}
  <div class="box-body">
    <div class="form-group">
      <label for="exampleInputFile">File input:</label>
      <input type="file" name="image">
    </div>
    <div class="form-group">
      <label>Format:</label>
      <select class="form-control" name="imageformat">
        <option value="jpg">jpg</option>
        <option value="png">png</option>
        <option value="bmp">bmp</option>
        <option value="tiff">tiff</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Width:</label>
      <input type="number" class="form-control" name="width" value="0">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Height:</label>
      <input type="number" class="form-control" name="height" value="0">
    </div>
    <div class="form-group">
      <label>Mode:</label>
      <select class="form-control" name="mode">
        <option value="1">1 (1-bit pixels, black and white, stored with one pixel per byte)</option>
        <option value="L">L (8-bit pixels, black and white)</option>
        <option value="P">P (8-bit pixels, mapped to any other mode using a color palette)</option>
        <option value="RGB">RGB (3x8-bit pixels, true color)</option>
        <option value="RGBA">RGBA (4x8-bit pixels, true color with transparency mask)</option>
        <option value="CMYK">CMYK (4x8-bit pixels, color separation)</option>
        <option value="YCbCr">YCbCr (3x8-bit pixels, color video format)</option>
        <option value="LAB">LAB (3x8-bit pixels, the L*a*b color space)</option>
        <option value="HSV">HSV (3x8-bit pixels, Hue, Saturation, Value color space)</option>
        <option value="I">I (32-bit signed integer pixels)</option>
        <option value="F">F (32-bit floating point pixels)</option>
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
