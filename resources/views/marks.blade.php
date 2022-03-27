<h1>Enter Marks</h1>
@if($errors->any())
@foreach ($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="marks" method="POST">
    @csrf
  <label for="english">English:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="english" name="english" placeholder="enter marks">
  <br>
  <br>
  <label for="maths">Maths:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="maths" name="maths" placeholder="enter marks">
  <br>
  <br>
  <label for="physics">Physics:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="physics" name="physics" placeholder="enter marks">
  <br>
  <br>
  <label for="chemistry">Chemistry:&nbsp;</label>
  <input type="text" id="chemistry" name="chemistry" placeholder="enter marks">
  <br>
  <br>
  <label for="social">Social:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
  <input type="text" id="social" name="social" placeholder="enter marks">
  <br>
  <br>
  <button type="submit">Submit</button>
</form>
