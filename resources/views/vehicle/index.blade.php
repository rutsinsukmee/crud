<h1>Vehicles</h1>

<a href="{{ url('/') }}/vehicle/create"   > Add New </a>

<form method="GET" action="{{ url('/') }}/vehicle" >
    <div class="input-group">
        <input name="search" placeholder="Search..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </div>
</form>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Series</th>
            <th>Colour</th>
            <th>Mileage</th>
            <th>Owner</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->id }}</td>
            <td>{{ $vehicle->brand }}</td>
            <td>{{ $vehicle->series }}</td>
            <td>{{ $vehicle->colour }}</td>
            <td>{{ $vehicle->mileage }}</td>
            <td>{{ $vehicle->user->name }}</td>
            <td>
                <a href="{{ url('/') }}/vehicle/{{ $vehicle->id }}"  ><button class="btn btn-info btn-sm"> View</button></a>
                <a href="{{ url('/') }}/vehicle/{{ $vehicle->id }}/edit"  ><button class="btn btn-primary btn-sm"> Edit</button></a>

                <form method="POST" action="{{ url('/vehicle' . '/' . $vehicle->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit"  onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
