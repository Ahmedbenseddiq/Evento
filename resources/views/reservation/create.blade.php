<x-layout>
    <h2>Create Reservation</h2>
    <form action="{{ route('reservation.store') }}" method="POST">
        @csrf
        <label for="name">How many seats you want to reserve: </label>
        <input type="number" id="seats_reserved" name="seats_reserved" required>
        <button type="submit">Create</button>
    </form>
    <button onclick="location.href='{{ route('reservation.index') }}'">Back to List</button>
</x-layout>
