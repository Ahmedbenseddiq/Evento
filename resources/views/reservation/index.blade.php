<x-layout>
    <h2>Reservations</h2>
    <button onclick="location.href='{{ route('reservation.create') }}'">Create reservation</button>
    <table>
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Reserved Seats</th>
                <th>status</th>
                <th>event</th>
                <th>user name</th>
                <th>created at</th>
                <th>actionn</th>
            </tr>
        </thead>
        @foreach ($reservations as $reservation)
        <tbody>
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->seats_reserved}}</td>
                <td>{{$reservation->status}}</td>
                <td>{{$reservation->event->title}}</td>
                <td>{{$reservation->user->name}}</td>
                <td>{{$reservation->created_at}}</td>
                <td>
                    <button onclick="location.href='{{ route('reservation.edit', $reservation) }}'">Edit</button>
                    <button onclick="location.href='{{ route('reservation.show', $reservation) }}'">More details</button>
                    <form action="{{ route('reservation.destroy', $reservation) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </from>
                </td>
            </tr>
        </tbody>  
        @endforeach
    </table>
</x-layout>

