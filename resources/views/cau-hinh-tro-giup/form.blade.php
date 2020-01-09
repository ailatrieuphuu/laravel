@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($cauHinhTroGiup))Cập nhật @else Thêm @endif Câu hỏi </h4><br>
            @if(isset($cauHinhTroGiup))
            <form action="{{route('cau-hinh-tro-giup.xu-ly-cap-nhat',['id'=>$cauHinhTroGiup->id])}}" method="POST" >
            @else
            <form action="{{route('cau-hinh-tro-giup.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="loai_tro_giup">Loại trợ giúp</label>
                    <input type="text" name="loai_tro_giup"  class="form-control" id="loai_tro_giup" @if(isset($cauHinhTroGiup)) value ="{{ $cauHinhTroGiup->loai_tro_giup }}" @endif>
                </div>
                <div class="form-group">
                    <label for="thu_tu">Thứ tự</label>
                    <input type="text" name="thu_tu"  class="form-control" id="thu_tu" @if(isset($cauHinhTroGiup)) value ="{{ $cauHinhTroGiup->thu_tu }}" @endif>
                </div>
                <div class="form-group">
                    <label for="credit">Credit</label>
                    <input type="text" name="credit"  class="form-control" id="credit" @if(isset($cauHinhTroGiup)) value ="{{ $cauHinhTroGiup->credit }}" @endif>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($cauHinhTroGiup))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection