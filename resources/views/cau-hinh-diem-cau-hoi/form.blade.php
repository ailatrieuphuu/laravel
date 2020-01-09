@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($cauHinhDiemCauHoi))Cập nhật @else Thêm @endif Câu hỏi </h4><br>
            @if(isset($cauHinhDiemCauHoi))
            <form action="{{route('cau-hinh-diem-cau-hoi.xu-ly-cap-nhat',['id'=>$cauHinhDiemCauHoi->id])}}" method="POST" >
            @else
            <form action="{{route('cau-hinh-diem-cau-hoi.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="thu_tu">Thứ Tự</label>
                    <input type="text" name="thu_tu"  class="form-control" id="thu_tu" @if(isset($cauHinhDiemCauHoi)) value ="{{ $cauHinhDiemCauHoi->thu_tu }}" @endif>
                </div>
                <div class="form-group">
                    <label for="diem">Điểm</label>
                    <input type="text" name="diem"  class="form-control" id="diem" @if(isset($cauHinhDiemCauHoi)) value ="{{ $cauHinhDiemCauHoi->diem }}" @endif>
                </div>
               
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($cauHinhDiemCauHoi))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection