<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietLuotChoi;
use App\LuotChoi;
use App\CauHoi;
use App\NguoiChoi;

class ChiTietLuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listChiTietLuotChoi = ChiTietLuotChoi::all();
        return view('chi-tiet-luot-choi.danh-sach', compact('listChiTietLuotChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listNguoiChoi = NguoiChoi::all();
        $listCauHoi = CauHoi::all();
        return view('chi-tiet-luot-choi.form',compact('listNguoiChoi','listCauHoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chiTietLuotChoi = new ChiTietLuotChoi;
        $chiTietLuotChoi->luot_choi_id = $request->luot_choi_id;
        $chiTietLuotChoi->cau_hoi_id = $request->cau_hoi_id;
        $chiTietLuotChoi->phuong_an = $request->phuong_an;
        $chiTietLuotChoi->diem = $request->diem;
        $chiTietLuotChoi->save();
        return redirect()->route('chi-tiet-luot-choi.danh-sach');
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
        $chitietluotchoi = ChiTietLuotChoi::find($id);
        $listnguoichoi = NguoiChoi::all();
        $listcauhoi = CauHoi::all();
        return view('chi-tiet-luot-choi.from',compact('chitietluotchoi','listnguoichoi','listcauhoi'));
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
        $chiTietLuotChoi = ChiTietLuotChoi::find($id);
        $chiTietLuotChoi->luot_choi_id = $request->luot_choi_id;
        $chiTietLuotChoi->cau_hoi_id = $request->cau_hoi_id;
        $chiTietLuotChoi->phuong_an = $request->phuong_an;
        $chiTietLuotChoi->diem = $request->diem;
        $chiTietLuotChoi->save();
        
        return redirect()->route('chi-tiet-luot-choi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chiTietLuotChoi = ChiTietLuotChoi::find($id);
        $chiTietLuotChoi->delete();
        return redirect()->route('chi-tiet-luot-choi.danh-sach');
    }
}


