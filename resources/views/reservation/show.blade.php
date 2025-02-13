
<x-app-layout>
    <h2>reservation Details</h2>
    <p><strong>ID:</strong> {{ $reservation->id }} </p>
    <p><strong>Event:</strong> {{ $reservation->event->title }} </p>
    <p><strong>Reserved Seats:</strong> {{ $reservation->seats_reserved }} </p>
    <p><strong>Status:</strong> {{ $reservation->status }} </p>
    <p><strong>User Name:</strong> {{ $reservation->user->name }} </p>
    <p><strong>User ID:</strong> {{ $reservation->user_id }} </p>
    <p><strong>created at:</strong> {{ $reservation->created_at }} </p>
    <p><strong>updated at:</strong> {{ $reservation->updated_at }} </p>
    <button onclick="location.href='{{ route('reservation.index') }}'">Back to List</button>
    <button onclick="location.href='{{ route('reservation.edit', $reservation) }}'">Edit</button>
    <form action="{{ route('reservation.destroy', $reservation) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </from>
</x-app-layout>

