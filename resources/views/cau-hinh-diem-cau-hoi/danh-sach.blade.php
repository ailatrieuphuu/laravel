@extends('layout')

@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection

@section('main-content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách cấu hình điểm câu hỏi</h4>
                <a href="{{ route('cau-hinh-diem-cau-hoi.them-moi')}}" class="btn btn-success btn-rounded waves-effect waves-light">
                    Thêm mới<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                </a><br>
                <table id="linh-vuc-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thứ tự</th>
                            <th>Điểm </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listCauHinhDiemCauHoi as $cauHinhDiemCauHoi)
                            <tr>  
                                <td>{{$cauHinhDiemCauHoi -> id}}</td>
                                <td>{{$cauHinhDiemCauHoi -> thu_tu}}</td>
                                <td>{{$cauHinhDiemCauHoi -> diem}}</td>
                                <td>
                                <a href="{{route('cau-hinh-diem-cau-hoi.cap-nhat',['id'=>$cauHinhDiemCauHoi->id])}}"class="btn btn-purple waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                <a href="{{route('cau-hinh-diem-cau-hoi.xoa',['id'=>$cauHinhDiemCauHoi->id])}}" onclick="return confirm('Bạn có chắc muốn xóa???')"><i class="btn btn-danger mdi mdi-delete text-dark"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>   
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection

@section('js')
<!-- third party js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#linh-vuc-datatable").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                }
            })
        });
    </script>
@endsection
