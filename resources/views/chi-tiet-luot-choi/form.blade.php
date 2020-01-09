@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($chiTietLuotChoi))Cập nhật @else Thêm @endif Câu hỏi </h4><br>
            @if(isset($chiTietLuotChoi))
            <form action="{{route('chi-tiet-luot-choi.xu-ly-cap-nhat',['id'=>$chiTietLuotChoi->id])}}" method="POST" >
            @else
            <form action="{{route('chi-tiet-luot-choi.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="luot_choi_id">Lượt Chơi ID</label>
                    <input type="text" name="luot_choi_id"  class="form-control" id="luot_choi_id" @if(isset($chiTietLuotChoi)) value ="{{ $chiTietLuotChoi->luot_choi_id }}" @endif>
                </div>
                <div class="form-group">
                    <label for="cau_hoi_id">Câu Hỏi ID</label>
                    <input type="text" name="cau_hoi_id"  class="form-control" id="cau_hoi_id" @if(isset($chiTietLuotChoi)) value ="{{ $chiTietLuotChoi->cau_hoi_id }}" @endif>
                </div>
                <div class="form-group">
                    <label for="phuong_an">Phương Án</label>
                    <input type="text" name="phuong_an"  class="form-control" id="phuong_an" @if(isset($chiTietLuotChoi)) value ="{{ $chiTietLuotChoi->phuong_an }}" @endif>
                </div>
                <div class="form-group">
                    <label for="diem">Điểm</label>
                    <input type="text" name="diem"  class="form-control" id="diem" @if(isset($chiTietLuotChoi)) value ="{{ $chiTietLuotChoi->diem }}" @endif>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($chiTietLuotChoi))Cập nhật @else Thêm @endif
                    </button>
                </div>
            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection