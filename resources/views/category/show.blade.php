
<x-app-layout>
    <h2>Category Details</h2>
    <p><strong>ID:</strong> {{ $category->id }} </p>
    <p><strong>Name:</strong> {{ $category->name }} </p>
    <button onclick="location.href='{{ route('category.index') }}'">Back to List</button>
    <button onclick="location.href='{{ route('category.edit', $category) }}'">Edit</button>
    <form action="{{ route('category.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </from>
</x-app-layout>

