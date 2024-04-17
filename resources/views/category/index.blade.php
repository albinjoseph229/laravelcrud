@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
<h1>Hello Category</h1>
<div class="container">
    <div class="table-responsive"> <!-- Add this div for responsiveness -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ url('categories'.$category->id.'/edit')}}">edit</a>
                            <a href="{{ url('destroy'.$category->id.'/destroy')}}">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
