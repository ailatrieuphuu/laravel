@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($linhVuc))Cập nhật @else Thêm @endif lĩnh vực </h4><br>
            @if(isset($linhVuc))
            <form action="{{route('linh-vuc.xu-ly-cap-nhat',['id'=>$linhVuc->id])}}" method="POST" >
            @else
            <form action="{{route('linh-vuc.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                @if (count($errors) > 0)
                    <ul>
                    @foreach ($errors->all() as $error)
                        <div class = 'alert alert-danger'>
                            <li>{{ $error }}</li>   
                        </div>
                        @endforeach
                    </ul> 
                @endif
                <div class="form-group">
                    <label for="ten_linh_vuc">Tên</label>
                    <input type="text" name="ten_linh_vuc"  class="form-control" id="ten_linh_vuc" @if(isset($linhVuc)) value ="{{ $linhVuc->ten_linh_vuc }}" @endif>
                </div>

                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($linhVuc))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection