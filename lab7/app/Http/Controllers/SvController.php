<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleNhapSV;

class SvController extends Controller
{
    public function sv()
    {
        return view('nhapsv');
    }

    public function sv_store(RuleNhapSV $request)
    {
        return "Code xử lý lưu thông tin sinh viên";
    }
}
