@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($quanTriVien))Cập nhật @else Thêm @endif quản trị viên </h4><br>
            @if(isset($quanTriVien))
            <form action="{{route('quan-tri-vien.xu-ly-cap-nhat',['id'=>$quanTriVien->id])}}" method="POST" >
            @else
            <form action="{{route('quan-tri-vien.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="ten_dang_nhap">Tên đăng nhập</label>
                    <input type="text" name="ten_dang_nhap"  class="form-control" id="ten_dang_nhap" @if(isset($quanTriVien)) value ="{{ $quanTriVien->ten_dang_nhap }}" @endif>
                </div>
                <div class="form-group">
                    <label for="mat_khau">Mật khẩu</label>
                    <input type="password" name="mat_khau"  class="form-control" id="mat_khau" @if(isset($quanTriVien)) value ="{{ $quanTriVien->mat_khau }}" @endif>
                </div>
                <div class="form-group">
                    <label for="ho_ten">Họ tên</label>
                    <input type="text" name="ho_ten"  class="form-control" id="ho_ten" @if(isset($quanTriVien)) value ="{{ $quanTriVien->ho_ten }}" @endif>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($quanTriVien))Cập nhật @else Thêm @endif
                    </button>
                </div>
            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection