@if (session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
<h1>Hello Category</h1>
<div class="container">
    <div class="row">
        <table class="table-boardered table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                </tr>
            @endforeach
    </div>
</div>
