
{{-- lấy css/js --}}
@extends('layouts.layout') 
@section('main')
    
    <h1>classroom fsdf</h1>
    <form action="{{ route('class.store') }}" method="post">
    @csrf
    <input type="text" name="class"><br>
    <button type="submit">oke</button>
    </form>
    <a href="{{ route('output')}}">xem</a>
@endsection