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
