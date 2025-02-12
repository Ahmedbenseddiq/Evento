<x-layout>
    <h2>Create Event</h2>
    <form action="{{ route('event.store') }}" method="POST">
        @csrf
        <label for="title">Event title: </label>
        <input type="text" id="name" name="title" required>
        <br>
        <label for="name">Event Description: </label>
        <input type="text" id="name" name="description" required>
        <br>
        <label for="name">Event Date: </label>
        <input type="date" id="name" name="date" required>
        <br>
        <label for="name">Event Place: </label>
        <input type="text" id="name" name="place" required>
        <br>
        <label for="name">Event Seats number: </label>
        <input type="number" id="name" name="seats_number" required>

        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        


        <button type="submit">Create</button>
    </form>
    <button onclick="location.href='{{ route('event.index') }}'">Back to List</button>
</x-layout>
