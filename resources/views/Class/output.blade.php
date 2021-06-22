@extends('layouts.layout')
@section('main')
    

<body>
    <table border="1" >
<tr>
    <td>id</td>
    <td>lớp</td>
</tr>
@foreach ($a as $item)
<tr>
    <td><?=$item->id?></td>
    <td><?=$item->name?></td>
</tr>
    
@endforeach

    </table>
</body>
@endsection