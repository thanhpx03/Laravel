@extends('layout')
@section('content')
@if(session()->has('msg'))
        <div class="alert  
            @if(session()->get('status') == \Illuminate\Http\Response::HTTP_OK) 
                alert-success 
            @else 
                alert-danger 
            @endif 
         ">
            <p>{{ session()->get('msg') }}</p>
        </div>
    @endif
<h2>
<a href="{{route('product.create')}}" class="btn btn-primary">thêm mới </a>
</h2>


<table id="list" class="table table-striped" style="width:100%">
<thead>
            <tr>
                <th>id</th>
                <th>danh mục</th>
                <th>name </th>
                <th>sku </th>
                <th>slug </th>
                <th>img</th>
                <th>describe </th>
           
                <th>created_at </th>
                <th>updated_at</th>

                <th>hành động</th>
            </tr>
        </thead>
        <tbody?>
            @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->category->name }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->sku }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>
                        <img width="70px" src="{{ asset($data->img) }}" alt="">
                        </td>

                        <td>{{ $data->describe }}</td>




                        
                        <td>{{ $data->created_at }}</td>
                        <td>{{ $data->updated_at }}</td> 
                        <td>
                        <a class="btn btn-primary" href="{{ route('product.edit',$data->id) }}">Edit</a>
                        <!-- <button class="btn btn-danger"

                    onclick="
                     if (confirm('Are you sure?')) {
                            document.getElementById('item-{{ $data->id }}').submit();
                        }
                    ">Xóa</button> -->

                            <form action="{{ route('product.destroy',$data) }}" method="Post" id="data-{{$data->id}}">
                              
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
</tbody>
</table>
@endsection