@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                
                {{ csrf_field() }}

                <table class="table table-striped table-pos">
                <thead class="thead-color">
                    <tr>
                        <th scope="col">序</th>
                        <th scope="co1">使用者編號</th>
                        <th scope="col">訂購數量</th>
                        <th scope="col">訂購商品</th>
                        <th scope="col">訂購單價</th>               
                        <th scope="col">總共價錢</th> 
                        <th scope="col">修改</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                @foreach($datas as $key=>$data)
                        <tr>     
                           
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->user_id }}</td>
                            <td>{{ $data->count }}</td>
                            <td>{{ $data->prodect->name }}</td>
                            <td>{{ $data->prodect->price }}</td>
                            <td>{{ $data->prodect->price * $data->count }}</td>
                            <td>
                            <a href="{{ route('order.edit', $data->id) }}" class="btn btn-primary">編輯</a>
                                <form action="{{ route('order.destroy', $data->id) }}"  method="POST" style="display:inline-block"> 
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">刪除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                </tbody>
            </table>
                <form class="form-horizontal" action="{{ route('home') }}" >
                    <div style="text-align:center">
                             @csrf
                                <button type="submit" class="btn btn-success btn-lg" style="width:45%">訂購</button>
                                
                            </div>
                </form>  

                </div>
            </div>
        </div>

        
        
    </div>
</div>

@endsection
