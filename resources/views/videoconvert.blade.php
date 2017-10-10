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
