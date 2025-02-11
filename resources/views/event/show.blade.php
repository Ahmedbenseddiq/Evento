
<x-layout>
    <h2>Event Details</h2>
    <p><strong>ID:</strong> </p>
    <p><strong>Name:</strong>  </p>
    <button onclick="location.href='{{ route('category.index') }}'">Back to List</button>
    <button onclick="location.href='{{ route('category.edit', $category) }}'">Edit</button>
    <form action="{{ route('category.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </from>
</x-layout>

