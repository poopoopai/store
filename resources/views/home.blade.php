@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form class="form-horizontal" action="{{ route('order.store') }}" method="POST">
                {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-md-2 control-label">訂購</label>
                                    
                                            <div class="col-md-6">
                                                <select name="code"  class="form-control"  required>
                                                    <option value=""></option>
                                                    <option value="111">ABCbook</option>
                                                    <option value="112">Notebook</option>
                                                    <option value="113">Historybook</option>
                                                </select>
                                                
                                                
                                            </div>
                            <br>
                                            <div>
                                                <label class="col-md-2 control-label">訂購數量</label>
                                                <input type="text" name="count" value="1">
                                            </div>                                           
                                              

                            </div>

                  
                    <div style="text-align:center">
                             @csrf
                                <button type="submit" id="sendBtn" class="btn btn-success btn-lg" style="width:45%">確認</button>
                                <button type="reset" onclick="" class="btn btn-secondary btn-lg" style="width:45%">清除資料</button>
                            </div>
                </form>  

                </div>
            </div>
        </div>

        
        
    </div>
</div>

@endsection
