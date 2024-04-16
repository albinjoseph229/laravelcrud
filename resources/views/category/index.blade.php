@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>

@endif
<h1>Hello Category</h1>
<h2>{{$categories}}</h2>
