<h1>Edit Calendar #{{ $appointments->id }}</h1>
<a href="{{ url('/') }}/calendar" >Back</a>
<form method="POST" 
      action="{{ url('/') }}/calendar/{{$appointments->id}}" >
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    @include ('calendar.form')
    <input type="submit" value="Save">
</form>