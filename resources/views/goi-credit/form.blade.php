@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-12">

        <div class="card-box">
            <h4 class="header-title">@if(isset($goiCredit))Cập nhật @else Thêm @endif credit </h4><br>
            @if(isset($goiCredit))
            <form action="{{route('goi-credit.xu-ly-cap-nhat',['id'=>$GoiCredit->id])}}" method="POST" >
            @else
            <form action="{{route('goi-credit.xu-ly-them-moi')}}" method="POST" >
            @endif
                @csrf
                <div class="form-group">
                    <label for="ten_goi_credit">Tên Gói Credit</label>
                    <input type="text" name="ten_goi_credit"  class="form-control" id="ten_goi_credit" @if(isset($goiCredit)) value ="{{ $goiCredit->ten_goi_credit }}" @endif>
                </div>
                <div class="form-group">
                    <label for="credit">Credit</label>
                    <input type="text" name="credit"  class="form-control" id="credit" @if(isset($goiCredit)) value ="{{ $goiCredit->credit }}" @endif>
                </div>
                <div class="form-group">
                    <label for="so_tien">Số tiền</label>
                    <input type="text" name="so_tien"  class="form-control" id="so_tien" @if(isset($goiCredit)) value ="{{ $goiCredit->so_tien }}" @endif>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                    @if(isset($goiCredit))Cập nhật @else Thêm @endif
                    </button>
                </div>

            </form>
        </div> <!-- end card-box -->
    </div>
    <!-- end col -->
</div>
@endsection