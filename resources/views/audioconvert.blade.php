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
        <option value="mp4">mp4</option>
        <option value="ac3">ac3</option>
        <option value="aiff">aiff</option>
        <option value="ogg">ogg</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Bitrate:</label>
      <input type="number" class="form-control" name="bitrate" value="0">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sample Rate:</label>
      <input type="number" class="form-control" name="samplerate" value="0">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Channel:</label>
      <input type="number" class="form-control" name="channel" value="0">
    </div>

  </div><!-- /.box-body -->

  <div class="box-footer">
    <button type="submit" name="button">Convert</button>
  </div>
</form>
