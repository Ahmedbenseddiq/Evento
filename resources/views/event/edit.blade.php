<x-app-layout>
    <h2>Create Event</h2>
    <form action="{{ route('event.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Event title: </label>
        <input type="text" id="name" value="{{$event->title}}" name="title" required>
        <br>
        <label for="name">Event Description: </label>
        <input type="text" id="name" value="{{$event->description}}" name="description" required>
        <br>
        <label for="name">Event Date: </label>
        <input type="date" id="name" value="{{$event->date}}" name="date" required>
        <br>
        <label for="name">Event Place: </label>
        <input type="text" id="name" value="{{$event->place}}" name="place" required>
        <br>
        <label for="name">Event Seats number: </label>
        <input type="number" id="name" value="{{$event->seats_number}}" name="seats_number" required>

        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ $event->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        


        <button type="submit">Update</button>
    </form>
    <button onclick="location.href='{{ route('event.index') }}'">Back to List</button>
</x-app-layout>
