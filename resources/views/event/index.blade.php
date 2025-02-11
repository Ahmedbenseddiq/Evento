<x-layout>
    <h2>Events</h2>
    <button onclick="location.href='{{ route('event.create') }}'">Create event</button>
    <table>
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Place</th>
                <th>Seats Number</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        @foreach ($events as $event)
        <tbody>
            <tr>
                <td>{{$event->id}}</td>
                <td>{{$event->title}}</</td>
                <td>{{$event->description}}</</td>
                <td>{{$event->date}}</</td>
                <td>{{$event->place}}</</td>
                <td>{{$event->seats_number}}</</td>
                <td>{{$event->category->name}}</</td>
                <td>
                    <button onclick="location.href='{{ route('event.edit', $event) }}'">Edit</button>
                    <button onclick="location.href='{{ route('event.show', $event) }}'">More details</button>
                    <form action="{{ route('event.destroy', $event) }}" method="POST">
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

