<h1>Calendar {{ $appointments->id }}</h1>
<a href="{{ url('/') }}/calendar"><button>Back</button></a>
<a href="{{ url('/') }}/calendar/{{ $appointments->id }}/edit"><button> Edit</button></a>
<form method="POST"
    action="{{ url('/') }}/calendar/{{ $appointments->id }}"
    style="display:inline">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit"
            onclick="return confirm(&quot;Confirm delete?&quot;)">
      Delete
    </button>
</form>
<table border="1">
    <tbody>
        <tr><th>ID</th><td>{{ $appointments->id }}</td></tr>
        <tr><th>Appointment</th><td> {{ $appointments->appointment }} </td></tr>
        <tr><th>Location</th><td> {{ $appointments->location }} </td></tr>
        <tr><th>Time</th><td> {{ $appointments->time }} </td></tr>
        <tr><th>Created_at</th><td> {{ $appointments->created_at }} </td></tr>
        <tr><th>Updated_at</th><td> {{ $appointments->updated_at }} </td></tr>
    </tbody>
</table>