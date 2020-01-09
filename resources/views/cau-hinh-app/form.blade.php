@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($cauHinhApp))Cập nhật @else Thêm @endif Câu hỏi </h4><br>
            @if(isset($cauHinhApp))
            <form action="{{route('cau-hinh-app.xu-ly-cap-nhat',['id'=>$cauHinhApp->id])}}" method="POST" >
            @else
            <form action="{{route('cau-hinh-app.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="co_hoi_sai">Co hoi sai</label>
                    <input type="text" name="co_hoi_sai"  class="form-control" id="co_hoi_sai" @if(isset($cauHinhApp)) value ="{{ $cauHinhApp->co_hoi_sai }}" @endif>
                </div>
                <div class="form-group">
                    <label for="thoi_gian_tra_loi">Thời gian trả lời</label>
                    <input type="text" name="thoi_gian_tra_loi"  class="form-control" id="thoi_gian_tra_loi" @if(isset($cauHinhApp)) value ="{{ $cauHinhApp->thoi_gian_tra_loi }}" @endif>
                </div>
               
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($cauHinhApp))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection