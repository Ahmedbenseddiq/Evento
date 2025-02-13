<x-app-layout>
    <h2>Create Category</h2>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <label for="name">Category Name: </label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create</button>
    </form>
    <button onclick="location.href='{{ route('category.index') }}'">Back to List</button>
</x-app-layout>
