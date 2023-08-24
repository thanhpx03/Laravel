<!DOCTYPE html>
<html>
  
<body>

<form action="{{route('upload-file.handleUpload')}}" method="post" enctype="multipart/form-data">
    @csrf
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
<td><img src="{{}}" style="width: 300px" value=""></td>
</body>

