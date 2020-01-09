<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhDiemCauHoi;
use App\LinhVuc;

class CauHinhDiemCauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHinhDiemCauHoi = CauHinhDiemCauHoi::all();
        return view('cau-hinh-diem-cau-hoi.danh-sach',compact('listCauHinhDiemCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listCauHinhDiemCauHoi = CauHinhDiemCauHoi::all();
    
        return view('cau-hinh-diem-cau-hoi.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHinhDiemCauHoi = new CauHinhDiemCauHoi;
        $cauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $cauHinhDiemCauHoi->diem = $request->diem;
        $cauHinhDiemCauHoi->save();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $listLinhVuc = LinhVuc::all();
        return view('cau-hinh-diem-cau-hoi.form',compact('cauHinhDiemCauHoi','listLinhVuc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $cauHinhDiemCauHoi->thu_tu = $request->thu_tu;
        $cauHinhDiemCauHoi->diem = $request->diem;
        $cauHinhDiemCauHoi->save();
        
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cauHinhDiemCauHoi = CauHinhDiemCauHoi::find($id);
        $cauHinhDiemCauHoi->delete();
        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach');
    }
}
