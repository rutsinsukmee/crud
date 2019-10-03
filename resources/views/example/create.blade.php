<form action="{{ url('/example') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('POST') }}
  <input type="file" name="image" >
  <button type="submit">Submit</button>
</form>