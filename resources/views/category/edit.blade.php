<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container m-5">
      <h1>Edit Category</h1>
      <form action="{{url('categories/'.$category->id.'/edit')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <label>name:</label>
            <input type="text" class="form-control" value="{{$category->name}}" name="name" id="name">
            @error('name')<span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label>description:</label>
            <textarea class="form-control" name="description" rows="3" value="">{{$category->description}}
            </textarea>
            @error('description')<span class="text-danger">{{$message}}</span>
            @enderror
         </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
