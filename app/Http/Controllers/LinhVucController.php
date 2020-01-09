<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLinhVuc = LinhVuc::all();
        return view('linh-vuc.danh-sach', compact('listLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linh-vuc.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ten_linh_vuc'=>'required|unique:linh_vuc'
        ], [
            'ten_linh_vuc.required' => 'Bạn chưa nhập lĩnh vực.',
            'ten_linh_vuc.unique' => 'Lĩnh vực đã có trong danh sách.'
        ]);
        $linhVuc = new LinhVuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->route('linh-vuc.danh-sach')->with(['flash_message' => 'Thêm lĩnh vực thành công ']);
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
        $linhVuc = LinhVuc::find($id);
        return view('linh-vuc.form', compact('linhVuc'));
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
        $this->validate($request, [
            'ten_linh_vuc'=>'required|unique:linh_vuc'
        ], [
            'ten_linh_vuc.required' => 'Bạn chưa nhập lĩnh vực.',
            'ten_linh_vuc.unique' => 'Lĩnh vực đã có trong danh sách.'
        ]);
        $linhVuc = LinhVuc::find($id);
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->route('linh-vuc.danh-sach')->with(['flash_message' => 'Thêm lĩnh vực thành công ']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();
        return redirect()->route('linh-vuc.danh-sach')->with(['flash_message' => 'Thêm lĩnh vực thành công ']);
    }
}
