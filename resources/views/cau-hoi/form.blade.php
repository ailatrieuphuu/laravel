@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($cauHoi))Cập nhật @else Thêm @endif Câu hỏi </h4><br>
            @if(isset($cauHoi))
            <form action="{{route('cau-hoi.xu-ly-cap-nhat',['id'=>$cauHoi->id])}}" method="POST" >
            @else
            <form action="{{route('cau-hoi.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="noi_dung">Nội dung</label>
                    <input type="text" name="noi_dung"  class="form-control" id="noi_dung" @if(isset($cauHoi)) value ="{{ $cauHoi->noi_dung }}" @endif>
                </div>
                <div class="form-group">
                    <label for="linh_vuc">Lĩnh vực</label>
                    <select class="custom-select " name="linh_vuc" id="linh_vuc">
                        <option>Chọn lĩnh vực</option>
                        @foreach ($listLinhVuc as $linhVuc)
                        <option @if(isset($cauHoi)&& $linhVuc->id == $cauHoi->linh_vuc_id) selected @endif value ="{{$linhVuc->id}}">{{$linhVuc->ten_linh_vuc}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="phuong_an_a">Phương án A</label>
                    <input type="text" name="phuong_an_a"  class="form-control" id="phuong_an_a" @if(isset($cauHoi)) value ="{{ $cauHoi->phuong_an_a }}" @endif>
                </div>
                <div class="form-group">
                    <label for="phuong_an_b">Phương án B</label>
                    <input type="text" name="phuong_an_b"  class="form-control" id="phuong_an_b" @if(isset($cauHoi)) value ="{{ $cauHoi->phuong_an_b }}" @endif>
                </div>
                <div class="form-group">
                    <label for="phuong_an_c">Phương án C</label>
                    <input type="text" name="phuong_an_c"  class="form-control" id="phuong_an_c" @if(isset($cauHoi)) value ="{{ $cauHoi->phuong_an_c }}" @endif>
                </div>
                <div class="form-group">
                    <label for="phuong_an_d">Phương án D</label>
                    <input type="text" name="phuong_an_d"  class="form-control" id="phuong_an_d" @if(isset($cauHoi)) value ="{{ $cauHoi->phuong_an_d }}" @endif>
                </div>
                <div class="form-group">
                    <label for="dap_an">Đáp án</label>
                    <input type="text" name="dap_an"  class="form-control" id="dap_an" @if(isset($cauHoi)) value ="{{ $cauHoi->dap_an }}" @endif>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($cauHoi))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection