@extends('layouts.layout');
@section('main')

<h1>sửa </h1>
<div class="form-group">
    
    <form action="{{ route('class.update', $id) }}" method="post">
@csrf
@method("PUT")
    <input type="text" value={{$name}} name="name" placeholder="Input" class="form-control" />
    <button class="btn btn-primary btn-sm" type="submit">Small</button>
  
    </form>
</div>
    
@endsection