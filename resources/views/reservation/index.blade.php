<x-layout>
    <h2>Categories</h2>
    <button onclick="location.href='{{ route('category.create') }}'">Create Category</button>
    <table>
        
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        @foreach ($categories as $category)
        <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <button onclick="location.href='{{ route('category.edit', $category) }}'">Edit</button>
                    <button onclick="location.href='{{ route('category.show', $category) }}'">More details</button>
                    <form action="{{ route('category.destroy', $category) }}" method="POST">
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

