@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($luotChoi))Cập nhật @else Thêm @endif lượt chơi </h4><br>
            @if(isset($luotChoi))
            <form action="{{route('luot-choi.xu-ly-cap-nhat',['id'=>$luotChoi->id])}}" method="POST" >
            @else
            <form action="{{route('luot-choi.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="nguoi_choi_id">Người chơi id</label>
                    <input type="text" name="nguoi_choi_id"  class="form-control" id="nguoi_choi_id" @if(isset($luotChoi)) value ="{{ $luotChoi->nguoi_choi_id }}" @endif>
                </div>
                <div class="form-group">
                    <label for="so_cau">Số câu</label>
                    <input type="text" name="so_cau"  class="form-control" id="so_cau" @if(isset($luotChoi)) value ="{{ $luotChoi->so_cau }}" @endif>
                </div>
                <div class="form-group">
                    <label for="diem">Điểm</label>
                    <input type="text" name="diem"  class="form-control" id="diem" @if(isset($luotChoi)) value ="{{ $luotChoi->diem }}" @endif>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($luotChoi))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection