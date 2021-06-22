@extends('layouts.layout')
@section('main')
<div class="table-responsive">
    <a href="{{ route('class.create') }}">thêm</a>
    <form class="navbar-form navbar-left navbar-search-form" role="search">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" value="{{ $search}}" name ="search" class="form-control" placeholder="Search...">
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">id</th>
                <th>Name</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $item)
               <tr>
                <td class="text-center">{{ $item->id}}</td>
               <td>{{ $item->name}}</td>
                
                <td class="td-actions text-right">
                    <a  rel="tooltip" title="View Profile" class="btn btn-info btn-link btn-sm" href="{{ route('class.show', $item->id) }}">
                        <i class="fa fa-user"></i>
                    </a>
                   
                <a rel="tooltip" title="Edit Profile" class="btn btn-success btn-link btn-sm" href="{{ route('class.edit',$item->id) }}">
                        <i class="fa fa-edit " ></i>
                    </a>
                    <form action="{{ route('class.destroy', $item->id) }}" method="post">
                        @csrf
                        @method("DELETE")
                    <button type="submit"  rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm" >
                        <i class="fa fa-times"></i>
                    </button>
                </form>
                </td>
            </tr> 
            @endforeach
            

        </tbody>
    </table>
    {{ $list->appends(['search'=>$search])->links('pagination::bootstrap-4') }}
    </div>
    
@endsection