<h1>Calendar</h1>
<a href="{{ url('/') }}/calendar/create"   > Add New </a>
<form method="GET"
      action="{{ url('/') }}/calendar" >
    <div>
        <input  name="search"
                placeholder="Search..."
                value="{{ request('search') }}"
                />
        <button type="submit">Search</button>
    </div>
</form>
<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Appointment</th>
            <th>Location</th>
            <th>Time</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
    </thead>
    <tbody>
    @foreach($appointments as $appointment)
        <tr>
        <td>{{ $appointment->id }}</td>
        <td> {{ $appointment->appointment }} </td>
        <td> {{ $appointment->location }} </td>
        <td> {{ $appointment->time }} </td>
        <td> {{ $appointment->created_at }} </td>
        <td> {{ $appointment->updated_at }} </td>
            <td>
                <a href="{{ url('/') }}/calendar/{{ $appointment->id }}"  >
                  <button>View</button>
                </a>
                <a href="{{ url('/') }}/calendar/{{ $appointment->id }}/edit"  >
                  <button>Edit</button>
                </a>
                <form method="POST"
                      action="{{ url('/') }}/calendar/{{ $appointment->id }}"
                      style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit"
                            onclick="return confirm(&quot;Confirm delete?&quot;)">
                      Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>