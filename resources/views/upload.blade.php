<h1>Upload a file</h1>
<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <br>
    <br>
    <button type="submit">Upload</button>
</form>

