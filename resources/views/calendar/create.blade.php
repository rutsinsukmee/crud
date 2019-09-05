<h1>Create New Vehicle</h1>
<a href="{{ url('/') }}/calendar" >Back</a>
<form method="POST" action="{{ url('/') }}/calendar" >
    {{ csrf_field() }}
    {{ method_field('POST') }}
    @include ('calendar.form')
    <input type="submit" value="Save">
</form>