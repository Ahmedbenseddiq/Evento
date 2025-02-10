<x-layout>
    <h2>Edit Category</h2>
    <form action="{{ route('category.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" value="{{$category->name}}" required>
        <button type="submit">Update</button>
    </form>
    <button onclick="location.href='{{ route('category.index')}}'">Back to List</button>
</x-layout>

