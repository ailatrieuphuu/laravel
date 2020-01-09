<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use App\GoiCredit;
use App\LichSuMuaCredit;

class LichSuMuaCreditController extends Controller
{
   public function index()
   {
       $listLichSuMuaCredit = LichSuMuaCredit::all();
       $ListNguoiChoi = NguoiChoi::all();
       $ListGoiCredit = GoiCredit::all();
       return View('lich-su-mua-credit.danh-sach',compact('listLichSuMuaCredit','ListNguoiChoi','ListGoiCredit'));
   }
}
