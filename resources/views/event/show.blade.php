
<x-layout>
    <h2>Event Details</h2>
    <p><strong>ID:</strong>{{$event->id}}</p>
    <p><strong>Title:</strong>{{$event->title}}</p>
    <p><strong>Description:</strong>{{$event->description}}</p>
    <p><strong>Date:</strong>{{$event->date}}</p>
    <p><strong>Place:</strong>{{$event->place}}</p>
    <p><strong>Seats number:</strong>{{$event->seats_number}}</p>
    <p><strong>Category:</strong>{{$event->category}}</p>
    <button onclick="location.href='{{ route('event.index') }}'">Back to List</button>
    <button onclick="location.href='{{ route('event.edit', $event) }}'">Edit</button>
    <form action="{{ route('event.destroy', $event) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </from>
</x-layout> 

